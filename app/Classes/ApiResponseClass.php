<?php

namespace App\Classes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;
class ApiResponseClass
{
    /**
     * Roll back the database transaction and throw an exception with a message.
     *
     * @param \Exception $e
     * @param string $message
     * @return void
     */
    public static function rollback($e, $message = "Something went wrong! Process not completed")
    {
        DB::rollBack(); // Roll back the transaction
        self::throwException($e, $message); // Use a more descriptive method name
    }

    /**
     * Log the exception and throw an HTTP response exception.
     *
     * @param \Exception $e
     * @param string $message
     * @return void
     */
    public static function throwException($e, $message = "Something went wrong! Process not completed")
    {
        Log::error($e); // Change to error log for exceptions
        throw new HttpResponseException(response()->json(["message" => $message], 500));
    }

    /**
     * Send a JSON response.
     *
     * @param mixed $result
     * @param string|null $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendResponse($result, $message = null, $code = 200)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message ?? null,
        ];

        if (is_null($response['message'])) {
            unset($response['message']);
        }

        return response()->json($response, $code);
    }

}
