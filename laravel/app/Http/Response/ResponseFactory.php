<?php
namespace App\Http\Response;

use App\Contracts\Response\HttpStatuses;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class ResponseFactory implements HttpStatuses
{
    /**
     * Respond with a created response and associate a location if provided.
     *
     * @param JsonResource $resource
     * @param array $headers
     *
     * @return JsonResponse
     */
    public function created(JsonResource $resource, array $headers = []): JsonResponse
    {
        return new JsonResponse($this->compose($resource), static::HTTP_CREATED, $headers);
    }

    /**
     * Respond with an accepted response and associate a location if provided.
     *
     * @param array $headers
     *
     * @return JsonResponse
     */
    public function accepted(array $headers = []): JsonResponse
    {
        return new JsonResponse($this->compose(null), static::HTTP_ACCEPTED, $headers);
    }

    /**
     * Respond with a no content response.
     *
     * @param array $headers
     *
     * @return JsonResponse
     */
    public function noContent(array $headers = []): JsonResponse
    {
        return new JsonResponse($this->compose(null), static::HTTP_NO_CONTENT, $headers);
    }

    /**
     * Respond with json resource.
     *
     * @param JsonResource $resource
     * @param array $headers
     *
     *
     * @return JsonResponse
     */
    public function resource(JsonResource $resource, array $headers = []): JsonResponse
    {
        return new JsonResponse($this->compose($resource), static::HTTP_OK, $headers);
    }

    /**
     * Return an error response.
     *
     * @param array $errors
     * @param int $status
     * @param array $headers
     *
     * @return JsonResponse
     */
    public function error(array $errors = [], int $status = 500, array $headers = [])
    {
        return new JsonResponse($this->compose(null, $errors), $status, $headers);
    }

    /**
     * Return a 403 forbidden error.
     *
     * @param string $message The exception message
     *
     * @return void
     * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
     */
    public function errorAccessDenied($message = 'Access Denied')
    {
        throw new AccessDeniedHttpException($message);
    }

    /**
     * Return a 401 unauthorized error.
     *
     * @param string $message The exception message
     * @param string $challenge WWW-Authenticate challenge string
     *
     * @return void
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     */
    public function errorUnauthorized($message = 'Unauthorized', $challenge = 'Bearer')
    {
        throw new UnauthorizedHttpException($challenge, $message);
    }

    /**
     * Return a 503 Service Temporarily Unavailable error.
     *
     * @param string $message The exception message
     * @param int|string $retryAfter The number of seconds or HTTP-date after which the request may be retried
     *
     * @return void
     * @throws \Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException
     */
    public function errorUnavailable(string $message = 'Service Temporarily Unavailable', $retryAfter = null)
    {
        throw new ServiceUnavailableHttpException($retryAfter, $message);
    }

    /**
     * Return a 406 NOT ACCEPTABLE.
     *
     * @param string $message The exception message
     *
     * @return void
     * @throws NotAcceptableHttpException
     */
    public function notAcceptable(string $message = 'Not Acceptable')
    {
        throw new NotAcceptableHttpException($message);
    }

    /**
     * Compose data to the response
     *
     * @param JsonResource|null $data
     * @param array $errors
     * @param null $meta
     * @return array
     */
    private function compose(?JsonResource $data, array $errors = [], $meta = null)
    {
        return [
            'data' => $data,
            'errors' => $errors,
            'meta' => $meta
        ];
    }
}
