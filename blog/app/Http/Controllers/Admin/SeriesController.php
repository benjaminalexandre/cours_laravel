<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Serie;

use Auth;

class SeriesController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('getEdit');
    }

    public function getEdit($serie_id){
        /*Pour Ajax, return json
        return [
            'cle' => 'valeur',
            'tab' => [1,2,3],
            'obj' => [
                'prop1' => 'valeur1',
                'prop2' => 'valeur2',
            ]
        ];*/

        $serie = Serie::findOrFail($serie_id);

        return view('admin.serie_edit', [
            'serie' => $serie
        ]);
    }

    public function postEdit(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'summary' => 'required|min:50'
        ]);

        $serie = Serie::findOrFail($request->input('serie_id'));
        $serie->title = $request->input('title');
        $serie->summary = $request->input('summary');

        $serie->save();

        return redirect()->route('serie_edit',['serie_id'=> $serie->id]);

    }
}
