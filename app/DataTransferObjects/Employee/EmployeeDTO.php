<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Employee;

use PHPUnit\Runner\readonly;

class EmployeeDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $secondName,
        public readonly string $status,
        public readonly null|array $services,
    )
    {}

    public function toArray()
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'secondName' => $this->secondName,
            'lastName' => $this->lastName,
            'status' => $this->status,
            'services' => $this->services
        ];
    }
}
