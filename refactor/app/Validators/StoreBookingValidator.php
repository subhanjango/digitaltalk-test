<?php
namespace App\Validators;

class StoreBookingValidator {
    public static function validate($user) {
        $customerRoleId = Role::getRoleIdBySlug('customer');
        $errorFound = false;
        $message = $culpritField = null;
        if($user->type != $customerRoleId)
        {
            $errorFound = true;
            $message = "Translator can not create booking";
        } else if (!isset($data['from_language_id'])) {
            $errorFound = true;
            $message = "Du måste fylla in alla fält";
            $culpritField = "from_language_id";
        } else if($data['immediate'] == 'no') {
            if (isset($data['due_date']) &&  empty($data['due_date'])) {
                $errorFound = true;
                $message= "Du måste fylla in alla fält";
                $culpritField = "due_date";
            }else if (isset($data['due_time']) && empty($data['due_time'])) {
                $errorFound = true;
                $message= "Du måste fylla in alla fält";
                $culpritField = "due_time";
            }else if (!isset($data['customer_phone_type']) && !isset($data['customer_physical_type'])) {
                $errorFound = true;
                $message= "Du måste göra ett val här";
                $culpritField = "customer_phone_type";
            }else if (isset($data['duration']) && empty($data['duration'])) {
                $errorFound = true;
                $message= "Du måste fylla in alla fält";
                $culpritField = "duration";
            } else if (Carbon::createFromFormat('m/d/Y H:i', $data['due_date'] . " " . $data['due_time'])->isPast()) {
                $errorFound = true;
                $message = "Can't create booking in past";
            }
        } else {
            if (isset($data['duration']) && empty($data['duration'])) {
                $errorFound = true;
                $message = 'Du måste fylla in alla fält';
                $culpritField = 'duration';
            }
        }

        return compact('errorFound' , 'message' , 'culpritField');
    }
}