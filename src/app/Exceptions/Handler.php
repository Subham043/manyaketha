<?php

namespace App\Exceptions;

use App\Modules\Legal\Services\LegalService;
use App\Modules\ServicePage\Services\Service;
use App\Modules\Settings\Services\ChatbotService;
use App\Modules\Settings\Services\GeneralService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, HttpException|Throwable $exception)
    {
        if ($this->isHttpException($exception) && !$request->wantsJson()) {
            return $this->customRender(
                $exception,
                $exception->getStatusCode(),
                $exception->getMessage(),
                $exception->getHeaders()
            );
        }

        if ($exception instanceof MethodNotAllowedHttpException && !$request->wantsJson()) {
            return $this->customRender(
                $exception,
                Response::HTTP_METHOD_NOT_ALLOWED,
                $exception->getMessage()
            );
        }

        if ($exception instanceof ModelNotFoundException && !$request->wantsJson()) {
            return $this->customRender(
                $exception,
                Response::HTTP_NOT_FOUND,
                'No data found'
            );
        }

        if ($exception instanceof NotFoundHttpException && !$request->wantsJson()) {
            return $this->customRender(
                $exception,
                Response::HTTP_NOT_FOUND,
                $exception->getMessage(),
                $exception->getHeaders()
            );
        }


        return parent::render($request, $exception);
    }

    private function customRender($exception, $status_code, $message, $headers = []){
        if(request()->is('admin/*')){
            if(Auth::check()){
                return $this->sendErrorResponse($exception, $status_code, $message, $headers, 'errors.admin.authenticated_error');
            }else{
                return $this->sendErrorResponse($exception, $status_code, $message, $headers, 'errors.admin.unauthenticated_error');
            }
        }else{
            return $this->sendErrorResponse(
                $exception,
                $status_code,
                $message,
                $headers,
                'errors.error',
                [
                    'generalSetting' => (new GeneralService)->getById(1),
                    'chatbotSetting' => (new ChatbotService)->getById(1),
                    'legal' => (new LegalService)->main_all(),
                    'serviceOption' => (new Service)->main_all(),
                ],
            );
        }
    }

    private function sendErrorResponse($exception, $status_code, $message, $headers, $view, $data = []){
        return response()
            ->view($view,
                [
                    ...$data,
                    'exception' => $exception,
                    'status_code' => $status_code,
                    'message' => $message
                ],
                $status_code,
                $headers
            );
    }
}
