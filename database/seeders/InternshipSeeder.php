<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Internship;

class InternshipSeeder extends Seeder
{
    public function run()
    {
        Internship::create([
            'title' => 'Software Engineer Intern',
            'company' => 'Tech Corp',
            'description' => 'Internship for software development.',
            'start_date' => now(),
            'end_date' => now()->addMonths(3)
        ]);
    }
}