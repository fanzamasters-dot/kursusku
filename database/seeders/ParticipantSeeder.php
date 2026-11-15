<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Alya Rahma',   'alya@example.test',  '081200000001'],
            ['Bima Putra',   'bima@example.test',  '081200000002'],
            ['Citra Nabila', 'citra@example.test', null],
        ];

        foreach ($data as [$name, $email, $phone]) {
            Participant::firstOrCreate(
                ['email' => $email],
                ['name' => $name, 'phone' => $phone]
            );
        }
    }
}
