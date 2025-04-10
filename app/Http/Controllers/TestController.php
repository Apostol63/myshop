<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\GetEmployeeService;

class TestController
{
    public function __construct(private GetEmployeeService $employeeService)
    {}

    public function index()
    {
        $employee = $this->employeeService->getEmployeeById(1);


        return response()->json($employee->toArray(), 200);
    }

//    public function revertString($str)
//    {
//        $count = strlen($str) - 1;
//        $x = '';
//        for ($i = $count ; $i >= 0; $i--) {
//            $x = $x . $str[$i];
//        }
//    }
//
//    public function test($str)
//    {
//        try {
//            return $str / 2;
//        } catch (\Throwable $e) {
//            return 'catch';
//        } finally {
//            echo 'finaly';
//        }
//    }
}
