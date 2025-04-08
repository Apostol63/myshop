<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\EmployeeStatus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->generateEmployees();

        Service::factory()->count(10)->create();

        $this->attachServicesToEmployees();
    }

    private function generateEmployees()
    {
        $statuses = EmployeeStatus::cases();

        foreach ($statuses as $status) {
            Employee::factory()
                ->count(2)
                ->create([
                'status' => $status->value,
            ]);
        }
    }

    private function attachServicesToEmployees()
    {
        $employees = Employee::all();
        $services = Service::all();

        foreach ($employees as $employee) {
            $randomServices = $services->random(rand(1, 3));

            $employee->service()->attach($randomServices);
        }
    }
}
