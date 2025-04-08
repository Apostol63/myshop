<?php

declare(strict_types=1);

namespace App\Enums;

enum EmployeeStatus: string
{
    case AT_WORK = 'AT_WORK';
    case VACATION = 'VACATION';
    case DISMISSED = 'DISMISSED';
}
