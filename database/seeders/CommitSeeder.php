<?php

namespace Database\Seeders;

use App\Models\Commit;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitSeeder extends Seeder
{
    use TruncateTable,DisableForeignKeys; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('Commits'); //اقتطاع من عمود المستخدمين 
        Commit::factory(3)->create();
        $this->enableForeignKeys();
    }
}
