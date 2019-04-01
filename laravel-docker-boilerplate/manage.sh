#!/usr/bin/env bash
#
# Script to support services management.
# @author: David Lonjon <david.lonjon@gmail.com> & Matthieu Bonventi <matthieu.bonventi@gmail.com>
COMPOSE_PROJECT_NAME="laravel-boilerplate"
DOCKER_REGISTRY_NAME="docker.registry.asiance.com"
BASE_DIR=$(pwd)
DOCKER_ENV_FILE=./.env
COMPOSER_VENDOR_DIRECTORY=BASE_DIR/vendor
NODE_MODULES_DIRECTORY=BASE_DIR/node_modules
if [ -f ".env" ];then
    source .env
fi

print_style () {
    if [ "$2" == "info" ] ; then
        COLOR="96m"
    elif [ "$2" == "success" ] ; then
        COLOR="92m"
    elif [ "$2" == "warning" ] ; then
        COLOR="93m"
    elif [ "$2" == "danger" ] ; then
        COLOR="91m"
    else #default color
        COLOR="0m"
    fi

    STARTCOLOR="\e[$COLOR"
    ENDCOLOR="\e[0m"

    printf "$STARTCOLOR%b$ENDCOLOR" "$1"
}

help() {
    printf "Available options:\n";
    print_style "   setup" "success"; printf "\t\t\t Run setup tasks before doing anything else.\n"
    print_style "   install" "info"; printf "\t\t Installs docker-sync gem on the host machine.\n"
    print_style "   up [services]" "success"; printf "\t Starts docker-sync and runs docker compose.\n"
    print_style "   down" "success"; printf "\t\t\t Stops containers and docker-sync.\n"
    print_style "   bash" "success"; printf "\t\t\t Opens bash on the workspace with user laradock.\n"
    print_style "   compose [parameters]" "success"; printf "\t\t Run docker-compose command.\n"
    print_style "   reset" "danger"; printf "\t\t\t Stop and remove container(s), volume(s) and network(s) and remove images.\n"
    print_style "   lr" "success"; printf "\t\t List Docker resources for this project.\n"
    print_style "   sync" "info"; printf "\t\t\t Manually triggers the synchronization of files.\n"
    print_style "   clean" "danger"; printf "\t\t Removes all files from docker-sync.\n"
}

setup() {
    print_style "Copying git hooks\n" "info"
    cp githooks/* .git/hooks
    print_style "Creating Docker ${DOCKER_ENV_FILE} file\n" "info"
    # Make a copy of env file is present
    cp .env .env.old || true
    cp .env.dist .env
}


check-setup() {
    if [ ! -f "$DOCKER_ENV_FILE" ]; then
        print_style "The ${DOCKER_ENV_FILE} file is missing. Run 'bin/manage setup' command first.\n" "danger"
        exit
    fi
}

compose() {
    docker-compose -p ${COMPOSE_PROJECT_NAME} ${@:1}
}

reset() {
    print_style "This will remove the following files and directories if they exists:\n" "danger"
    print_style "- ${DOCKER_ENV_FILE}\n" "danger"
    print_style "- ${COMPOSER_VENDOR_DIRECTORY}\n" "danger"
    print_style "- ${NODE_MODULES_DIRECTORY}\n" "danger"
    echo
    print_style "Finally it will the following Docker resources:\n" "danger"
    list-resources
    echo
    read -p "Are you sure that you want to continue? (Y/y for yes or any other key to abort) " -n 1 -r
    echo    # (optional) move to a new line
    if [[ $REPLY =~ ^[Yy]$ ]]
    then
        if [ -f "$DOCKER_ENV_FILE" ]; then
            print_style "Running Docker compose down\n" "info"
            down
        fi

        if [ -f "$DOCKER_ENV_FILE" ]; then
            print_style "Removing the Docker ${DOCKER_ENV_FILE} file\n" "info"
            rm ${DOCKER_ENV_FILE}
        fi

        if [ -d "$COMPOSER_VENDOR_DIRECTORY" ]; then
            print_style "Removing the ${COMPOSER_VENDOR_DIRECTORY} file\n" "info"
            rm -rf ${COMPOSER_VENDOR_DIRECTORY}
        fi

        if [ -d "$NODE_MODULES_DIRECTORY" ]; then
            print_style "Removing the ${NODE_MODULES_DIRECTORY} file\n" "info"
            rm -rf ${NODE_MODULES_DIRECTORY}
        fi
    fi
}

list-resources() {
    print_style "Images\n" "info"
    docker images --format '{{.Repository}}:{{.Tag}}' | grep ${COMPOSE_PROJECT_NAME}
    print_style "\nContainers\n" "info"
    docker container ps -a --format '{{.Names}}' | grep ${COMPOSE_PROJECT_NAME}
    print_style "\nNetworks\n" "info"
    docker network ls --format '{{.Name}}' | grep ${COMPOSE_PROJECT_NAME}
    print_style "\nVolumes\n" "info"
    docker volume ls --format '{{.Name}}' | grep ${COMPOSE_PROJECT_NAME}
}

case $1 in
    setup)
        setup
    ;;
    up)
        print_style "Initializing Docker Sync\n" "info"
        print_style "May take a long time (15min+) on the first run\n" "info"
        docker-sync start;

        print_style "Initializing Docker Compose\n" "info"
        shift # removing first argument
        compose up -d ${@}
    ;;

    stop)
        print_style "Stopping Docker Compose\n" "info"
        docker-compose stop
        print_style "Stopping Docker Sync\n" "info"
        docker-sync stop
    ;;

    exec)
        shift
        compose exec --user=laradock workspace ${@}
    ;;

    install)
        case $2 in
            sync)
                print_style "Installing docker-sync\n" "info"
                gem install docker-sync
            ;;

            project)
                print_style "Installing project\n" "info"
            ;;

            *)
                printf "Available options:\n";
                print_style "   sync" "success"; printf "\t\t\t Install docker-sync.\n"
                print_style "   project" "success"; printf "\t\t\t Install project.\n"
            ;;
        esac
    ;;

    sync)
        print_style "Manually triggering sync between host and docker-sync container.\n" "info"
        docker-sync sync;
    ;;

    clean)
        print_style "Removing and cleaning up files from the docker-sync container.\n" "warning"
        docker-sync clean
        reset
    ;;

    xdebug)



        case $2 in

            restart)
                ./manage.sh xdebug stop
                ./manage.sh xdebug start
            ;;

            *)
                shift
                images/php-fpm/xdebug ${@}
            ;;
        esac
    ;;

    compose)
        compose ${@:2}
    ;;

    lr)
        list-resources
    ;;

    --help|-h)
        help
    ;;

    *)
        print_style "Invalid arguments. Run './manage.sh --help' for more information on a command.\n" "danger"
        exit 1
    ;;
esac
exit 0
