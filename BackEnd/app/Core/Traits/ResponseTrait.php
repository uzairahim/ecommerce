<?php
namespace App\Core\Traits;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Arr;


trait ResponseTrait {
    /**
     * @param array|null $payload
     * @param int|null $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function jsonResponse(array $payload=null, int $statusCode=null)
    {
        return response()->json($payload, $statusCode);
    }

    /**
     * @param string $message
     * @param array|null $data
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(string $message, array $data = null, $statusCode=400) {
        $statusCode = ($statusCode !== 0 ? $statusCode : 400);

        return $this->jsonResponse([
            'message' => $message,
            'data' => $data,
            'status' => $statusCode
        ], $statusCode);
    }

    /**
     * @param null $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function validationError($errors = null) {
        $statusCode =  422;
        $message = 'Fields required';
        return $this->jsonResponse([
            'message' => $message,
            'data' => null,
            'status' => $statusCode,
            'errors' => $errors,
            'error' => $this->firstError($errors),
        ], $statusCode);
    }

    public function firstError($errors){
        $errorMessage = Arr::first($errors, function($key, $value)
        {
            return $value;
        });

        return $errorMessage[0];

    }

    /**
     * @param string $message
     * @param null $data
     * @param null $metadata
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse|ResourceCollection
     */
    public function responseGet(string $message, $data = null, $metadata = null, $statusCode = 200) {
        /* If a collection hasn't been passed, show everything */
        if(!($data instanceof ResourceCollection)) {
            return $this->jsonResponse(
                [
                    'message'    => $message,
                    'status' => $statusCode,
                    'data'      => $data,
                ],
                $statusCode
            );
        }

        /* If a collection has been passed, the data will already be in there. Just add on any additional fields */
        return $data->additional(
            array_merge(
                $data->additional,
                [
                    'message' => $message,
                    'status' => $statusCode,
                    'meta' => [
                        'custom' => $metadata
                    ],
                ]
            )
        );
    }

    /**
     * Returns json response.
     *
     * @param array|null $data
     * @param array|null $errors
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function wrappedResponse($data=null, $errors=null,$statusCode = 200){
        return $this->jsonResponse(
            [
                'errors'    => is_array($errors) ? $errors : $errors,
                'status'    => $statusCode,
                'data'      => $data
            ],
            $statusCode
        );
    }

    protected function errorResponse($errors, $statusCode=500) {
        return $this->wrappedResponse(null, $errors, $statusCode);
    }

    protected function methodNotFound($message='Method not found'){
        return $this->error($message, null, 405);
    }

    protected function httpNotFound($message='Http Url not found'){
        return $this->error($message, null, 404);
    }

    protected function errorParseError($message,$file,$line,$statusCode=500)
    {
        $data = $file.":".$line;
        return $this->wrappedResponse($message,$data,$statusCode);
    }


    /* Scenario specific */

    protected function notFound($message = 'Resource not found') {
        return $this->error($message, null, 404);
    }

    protected function forbiddenRequest($message = 'You do not have permission to access this resource') {
        return $this->error($message, null, 403);

    }

    protected function badRequest($message = null) {
        return $this->error($message, null, 400);
    }



}
