<?php

namespace Database\Seeders;

use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Traits\TruncateTable;

class UserSeeder extends Seeder
{
    use TruncateTable,DisableForeignKeys;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('users'); //اقتطاع من عمود المستخدمين 
        $users = \App\Models\User::factory(10)->create();
        $this->enableForeignKeys();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
