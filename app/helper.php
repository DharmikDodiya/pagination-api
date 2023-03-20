<?php

if(!function_exists('ok')){
    function ok($message = null, $data = [], $status = 200,)
    {
        $response = [
            'status'    =>  $status,
            'message'   =>  $message ?? 'Process is successfully completed',
            'data'      =>  $data
        ];

        return response()->json($response,$status);
    }
}

?>