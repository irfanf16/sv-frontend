<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $brokenLink = strtolower($request->path());

            $redirects = [
                'affiliate' => 'partner-program',
                'features-page' => 'features',
                'product-profile' => asset('public/assets/pdf/product-profile.pdf'),
                'productprofile' => asset('public/assets/pdf/product-profile.pdf'),
                'tth_frontend/pricing-plans' => 'pricing-plans',
                'tth_frontend/' => '/',
                'blog' => 'blogs',
            ];

            if (array_key_exists($brokenLink, $redirects)) {
                return redirect($redirects[$brokenLink], 301);
            }

            if (str_starts_with($brokenLink, 'blog/')) {
                $newUrl = str_replace('blog/', 'blogs/', $brokenLink);
                return redirect($newUrl, 301);
            }
        }

        return parent::render($request, $exception);
    }
}
