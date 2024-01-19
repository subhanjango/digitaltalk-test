<?php
namespace App\Enums;

enum UserRole : string {
    case CUSTOMER = 'customer';
    case TRANSLATOR = 'translator';
}