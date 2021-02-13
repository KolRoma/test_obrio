<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (QueryException $e) {
            return response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        });

        $this->reportable(function (ValidationException $e) {
            return response($e->getMessage(), Response::HTTP_UNPROCESSABLE_ENTITY);
        });

        $this->reportable(function (ModelNotFoundException $e) {
            return response(['errors' => 'Resource Not Found'], Response::HTTP_NOT_FOUND);
        });
    }
}
