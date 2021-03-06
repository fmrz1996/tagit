<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demand;
use DB;

class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Demand::select('tag_id', 'tags.name', DB::raw('count(*) as count'))
                    ->join('tags', 'tags.id', '=', 'tag_id')
                    ->orderBy('count', 'desc')
                    ->groupBy('tag_id')->take(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Demand::create([
        'email' => $request['email'],
        'tag_id' => $request['tag_id'],
        'region_id' => $request['region_id'],
        'ip' => $request->ip()
      ]);

      return response()->json('ok');
    }

    public function showByMinistery($id)
    {
      $query = Demand::select('tag_id', 'tags.name', DB::raw('count(*) as count'))
                  ->where('ministeries.id', $id)
                  ->join('tags', 'tags.id', '=', 'tag_id')
                  ->join('ministeries', 'ministeries.id', '=', 'tags.ministery_id')
                  ->orderBy('count', 'desc')
                  ->groupBy('tag_id')->take(10)->get();

      return $query;
    }
}
