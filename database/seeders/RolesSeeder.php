<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Roles::truncate();
        Schema::enableForeignKeyConstraints();

        $data   = [
            ['name' => 'Admin'],
            ['name' => 'Pegawai']
        ];

        foreach ($data as $roles) {
            Roles::insert([
                'name' => $roles['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
