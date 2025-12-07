<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = User::where('role', 'client')->get()->toArray();
        $technicians = User::where('role', 'technician')->get()->toArray();

        $pairs = min(\count($clients), \count($technicians));

        for ($i = 0; $i < $pairs; $i++) {
            Ticket::factory()->create([
                'client_id' => $clients[$i]['id'],
                'technician_id' => $technicians[$i]['id'],
            ]);
        }
    }
}
