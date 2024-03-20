<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class datafoto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fotos')->insert([
            'judulfoto'  => 'foto 1',
            'deskripsifoto' => 'ini foto',
            'foto'=> 'jpg'
        ]);
    }
}
