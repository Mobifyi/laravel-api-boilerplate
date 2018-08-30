<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *   schemes={"https"},
 *   host="laravel-demo.uberforall.com/api",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Article api",
 *         description="This is our demo api.",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="rahul@3embed.com"
 *         ),
 *         @SWG\License(
 *             name="3Embed",
 *             url="https://www.3embed.com"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about this in our FAQ",
 *         url="https://www.3embed.com"
 *     ),
 *    @SWG\SecurityScheme(
 *          securityDefinition="default",
 *          type="apiKey",
 *          in="header",
 *          name="Authorization"
 *      )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
