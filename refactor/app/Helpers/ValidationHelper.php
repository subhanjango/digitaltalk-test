<?php
namespace App\Helpers;

class ValidationHelper {
    public static function handleMessage($message , $culpritField = null) {
        return [
            'status' => 'fail',
            ...compact('message' , 'culpritField')
        ];
    }
}