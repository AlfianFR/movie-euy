<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function allMovie()
    {
        $movies = Movie::all();
        $response = [
            'success' => 'true',
            'message' => 'berhasil',
            'data'=> $movies,
            'status'=>200,
        ];
         return response()->json($response);
    }


    public function singleMovie()
    {
        $movies = Movie::find($id);
       if($movies){
        $response =[
            'success' => 'true',
            'message' => 'data berhasil ditemukan',
            'data'=> $movies,
            'status'=>200,
        ];
       } else {
        $response = [
            'success' => 'false',
            'message' => 'data tidak berhasil ditemukan',
            'status'=>404,
        ];
       }
         return response()->json($response);
    }
}
