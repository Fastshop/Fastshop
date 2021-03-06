<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Encore\Admin\Reporter\Reporter;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param \Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
       // $_ENV = [];
        if (ob_get_length()) ob_end_clean();

       if ($this->shouldReport($exception)) {
           Reporter::report($exception);
       }
       kd([
           get_class($exception),
           $exception->getMessage(),
           $exception->getFile() . ":" . $exception->getLine(),
           'ErrorCode:' . $exception->getCode(),
           $exception->getTraceAsString()
       ]);

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        //$_ENV = [];
        if (ob_get_length()) ob_end_clean();
        return parent::render($request, $exception);
    }
}
