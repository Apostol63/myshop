<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\GetEmployeeService;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    public function __construct(
        private GetEmployeeService $employeeService
    )
    {}

    public function getEmployee()
    {
        $employee = $this->employeeService->getEmployeeByIdWithService(1);

        return response()->json($employee->toArray(), 200);
    }

    public function saveNewEmployee(EmployeeRequest $request)
    {
        dd($request);
    }
}
