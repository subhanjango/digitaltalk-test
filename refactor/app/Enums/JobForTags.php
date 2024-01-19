<?php
namespace App\Enums;

enum JobForTags : string {
    case NORMAL = 'normal';
    case CERTIFIED = 'certified';
    case CERTIFIED_IN_LAW = 'certified_in_law';
    case CERTIFIED_IN_HEALTH = 'certified_in_health';
}