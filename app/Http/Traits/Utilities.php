<?php

namespace App\Http\Traits;


trait Utilities
{
    /**
     * @param $status
     * @param null $data
     * @param null $error
     * @param null $message
     * @return array
     */
    public function formatResponse($status, $data = null, $error = null, $message = null)
    {
        return [
            'status' => $status,
            'data' => $data,
            'error' => $error,
            'message' => $message
        ];
    }
}