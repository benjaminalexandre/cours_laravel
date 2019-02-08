<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;
use App\Season;
use App\Episode;


class SeriesController extends Controller
{
    public function getSerie($serie_id){

        $serie = Serie::with('seasons.episodes.actors')->findOrFail($serie_id);

        $data = [
            'serie' => $serie,
            'page_title' => $serie->title
        ];

        return view('serie', $data);
    }

    public function getSeason($season_id){

        $season = Season::findOrFail($season_id);

        $data = [
            'season' => $season,
            'page_title' => 'Saison ' . $season->season_number . ' de la série...'
        ];

        return view('season', $data);
    }

    public function getEpisode($episode_id){

        $episode = Episode::findOrFail($episode_id);


        $data = [
            'episode' => $episode,
            'page_title' => 'Episode ' . $episode->episode_number . ' de la saison...'
        ];

        return view('episode', $data);
    }

}
