<?php

declare(strict_types=1);

namespace App\Rules;

use App\Enums\EmployeeStatus;
use Illuminate\Contracts\Validation\InvokableRule;

class EmployeeStatusRule implements InvokableRule
{
    public function __invoke($attribute, $value, $fail): bool
    {
        if ($value !== EmployeeStatus::AT_WORK->value) {
            $fail('Некорректный статус нового сотрудника');
        }

        return true;
    }
}
