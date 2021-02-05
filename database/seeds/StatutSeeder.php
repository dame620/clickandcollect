<?php

use App\Statu;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = ['EN ATTENTE ENLEVEMENT', 'ENLEVEMENT DHL'];

        foreach($statuses as $status){
            Statu::create(['libelles' => $status]);
        }
    }
}
