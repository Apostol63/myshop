<?php

declare(strict_types=1);

namespace App\Services;

use App\DataTransferObjects\Service\ServiceDTO;
use App\DataTransferObjects\Employee\EmployeeDTO;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class GetEmployeeService
{
    public function __construct(
        private EmployeeRepositoryInterface $employeeRepository
    )
    {}

    public function getEmployeeById(int $id): EmployeeDTO
    {
        $employee = $this->employeeRepository->findById($id);
        return $this->prepareEmployeeData($employee->toArray());
    }

    public function getEmployeeByIdWithService(int $id): EmployeeDTO
    {
        $employee = $this->employeeRepository->findByIdWithServices($id);
        return $this->prepareEmployeeData($employee->toArray());
    }

    private function prepareEmployeeData(array $employee): EmployeeDTO
    {
        $services = $this->prepareServicesEmployeer($employee['service']);

        $dto = new EmployeeDTO(
            $employee['id'],
            $employee['firstName'],
            $employee['secondName'],
            $employee['lastName'],
            $employee['status'],
            $services,
        );

        return $dto;
    }

    private function prepareServicesEmployeer($services): null|array
    {
        if (empty($services)) {
            return null;
        }

        $result = [];
        foreach ($services as $service) {
            array_push($result, new ServiceDTO(
                $service['id'],
                $service['name'],
                $service['cost'],
            ));
        }

        return $result;
    }
}
