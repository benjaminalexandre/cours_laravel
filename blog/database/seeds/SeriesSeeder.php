<?php

use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $twd_id = DB::table('series')->insertGetId([
           'title' => 'The Walking Dead',
            'summary' => 'Des gens marchent.'
        ]);

        $twd_s2_id = DB::table('seasons')->insertGetId([
            'serie_id' => $twd_id,
            'season_number' => 2
        ]);
        DB::table('episodes')->insert([
            'season_id' => $twd_s2_id,
            'episode_number' => 1,
            'title' => 'La fille de Carole a disparu.'
        ]);
        DB::table('episodes')->insert([
            'season_id' => $twd_s2_id,
            'episode_number' => 2,
            'title' => 'Les gens glandent à la ferme.'
        ]);
        $twd_s3_id = DB::table('seasons')->insertGetId([
            'serie_id' => $twd_id,
            'season_number' => 3,
        ]);
        DB::table('episodes')->insert([
            'season_id' => $twd_s3_id,
            'episode_number' => 1,
            'title' => 'Les gens arrivent à la prison.'
        ]);
        DB::table('episodes')->insert([
            'season_id' => $twd_s3_id,
            'episode_number' => 2,
            'title' => 'Les gens ont un bébé et une mère qui meure.'
        ]);

        $soa_id = DB::table('series')->insertGetId([
            'title' => 'Sons of Anarchy',
            'summary' => 'Des gens roulent à moto.'
        ]);

        $soa_s1_id = DB::table('seasons')->insertGetId([
            'serie_id' => $soa_id,
            'season_number' => 1,
        ]);
        DB::table('episodes')->insert([
            'season_id' => $soa_s1_id,
            'episode_number' => 1,
            'title' => 'Pilot de la série.'
        ]);
        DB::table('episodes')->insert([
            'season_id' => $soa_s1_id,
            'episode_number' => 2,
            'title' => 'Ca se met sur la gueule.'
        ]);
        $soa_s2_id = DB::table('seasons')->insertGetId([
            'serie_id' => $soa_id,
            'season_number' => 2,
        ]);
        DB::table('episodes')->insert([
            'season_id' => $soa_s2_id,
            'episode_number' => 1,
            'title' => 'Le Vice Président veut être Président.'
        ]);
        DB::table('episodes')->insert([
            'season_id' => $soa_s2_id,
            'episode_number' => 2,
            'title' => 'Ca se met sur la gueule à coup de AKA47.'
        ]);
    }
}
