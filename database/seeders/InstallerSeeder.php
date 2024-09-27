<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Installer;

class InstallerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Installer::factory(10)->create(); // Create 10 installer records
    }
}
