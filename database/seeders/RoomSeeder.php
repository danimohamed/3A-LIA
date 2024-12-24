<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            'salle 1',
            'salle 2',
            'salle 3',
            'salle 4',
            'salle 5',
            'salle 6',
            'salle 7',
            'salle info',
            'salle dom',
            'salle elec',
            'salle mech',
        ];

        foreach ($rooms as $room) {
            DB::table('rooms')->insert([
                'room_name' => $room,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
