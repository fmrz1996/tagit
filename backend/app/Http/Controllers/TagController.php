<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tag::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $tag = Tag::where('name', $request['name'])->first();
      if(!$tag) {
        return Tag::create([
          'name' => $request['name'],
          'ministery_id' => $request['ministery_id'],
        ]);
      } else {
        return $tag;
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByMinistery($id)
    {
        return Tag::where('ministery_id', $id)->get();
    }
}
