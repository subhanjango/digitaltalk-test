<?php
namespace App\Enums;

enum JobStatus : string {
    case PENDING = 'pending';
    case ASSIGNED = 'assigned';
    case STARTED = 'started';
    case COMPLETED = 'completed';
    case WITHDRAW_BEFORE_DAY = 'withdrawbefore24';
    case WITHDRAW_AFTER_DAY = 'withdrawafter24';
    case TIMED_OUT = 'timedout';
}