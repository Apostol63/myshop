<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function __construct(private string $model)
    {}

    public function findById(int $id): ?Model
    {
        return $this->model::find($id);
    }

    public function findByIdWithServices(int $id): ?Model
    {
        return $this->model::with('service')->find($id);
    }
}
