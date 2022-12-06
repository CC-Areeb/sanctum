<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($data, $message = null, $code = 200)
    {
        $jsonArray = [
            'status' => 'Request was successful.',
            'message' => $message,
            'data' => $data
        ];
        return response()->json($jsonArray, $code);
    }


    protected function error($data, $code, $message = null)
    {
        $jsonArray = [
            'status' => 'There was an error.',
            'message' => $message,
            'data' => $data
        ];
        return response()->json($jsonArray, $code);
    }
}