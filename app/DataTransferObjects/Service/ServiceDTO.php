<?php

declare(strict_types=1);

namespace App\DataTransferObjects\Service;

use PHPUnit\Runner\readonly;

class ServiceDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly int $cost,
    ){}

    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cost' => $this->cost,
        ];
    }
}
