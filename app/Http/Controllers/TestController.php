<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\InterpreterService;

class TestController
{
    public function index()
    {
        $str = 6;
        $result = $this->test($str);
        dd($result);
    }

    public function revertString($str)
    {
        $count = strlen($str) - 1;
        $x = '';
        for ($i = $count ; $i >= 0; $i--) {
            $x = $x . $str[$i];
        }
    }

    public function test($str)
    {
        try {
            return $str / 2;
        } catch (\Throwable $e) {
            return 'catch';
        } finally {
            echo 'finaly';
        }
    }
}
