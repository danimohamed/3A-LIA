<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groupNames = [
            'DEV101',
            'DEV102',
            'DEV103',
            'DEV201',
            'RH201',
            'RH202',
            'RH203',
            'GE101',
            'GE102',
            'GE103',
            'PIE101',
            'PIE102',
            'PIE103',
            'PIE201',
        ];
        foreach ($groupNames as $groupName) {
            DB::table('groups')->insert([
                'group_name' => $groupName,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
