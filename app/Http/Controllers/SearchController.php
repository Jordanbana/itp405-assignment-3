<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller {

      public function index(){
        return view('search');
      }

      public function results(){

        $search = request('dvd');

        // if(!$search){
        //   return redirect('/dvd/search');
        // }

        $dvds = DB::table('dvds')
            ->select('title')
            ->where('title', 'LIKE', "%$search%")
            ->get();

        return view('search-results', [
          'dvds' => $dvds,
          'search' => $search
        ]);
      }
}
