<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface EmployeeRepositoryInterface
{
    public function findById(int $id): ?Model;
    public function findByIdWithServices(int $id): ?Model;
}
