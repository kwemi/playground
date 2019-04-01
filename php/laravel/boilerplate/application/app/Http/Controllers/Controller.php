<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Boirlerplate OpenApi",
 *      description="Boilerplate OpenApi description",
 *      @OA\Contact(
 *          email="matthieu.bonventi@gmail.com"
 *      ),
 *     @OA\License(
 *         name="No licence",
 *         url=""
 *     )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
