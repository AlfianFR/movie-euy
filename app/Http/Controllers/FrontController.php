<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\Reviewer;
use App\Models\genre_film;
use Alert;

class FrontController extends Controller
{
    public function index() {

        $movies = movie::orderBy('id','desc')->take(3)->get();
        // dd($movies);
        $allMovies = movie::orderBy('id','desc')->limit(4)->get();
        $genres = genre_film::all();
        return view('front.index', compact('movies','genres','allMovies'));
    }

    public function about() {
        return view('front.about');
    }

    public function profile() {
        return view('front.profile');
    }

    public function movies()
    {
        $genres = genre_film::all();
        $movies = movie::orderBy('id','desc')->limit(8)->get();
        return view('front.movies', compact('movies', 'genres'));
    }

    public function singleMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $review = Reviewer::select('reviewers.nama','reviewers.email','reviewers.komentar')
                    ->join('movies','movies.id','=','reviewers.id_movie')
                    ->where('reviewers.id_movie',$id)
                    ->get();
        return view('front.movie_detail', compact('movie','review'));
    }

    public function sendReview(Request $request)
    {
        $review = new Reviewer();
        $review->nama = $request->nama;
        $review->email = $request->email;
        $review->komentar = $request->komentar;
        $review->id_movie = $request->id_movie;
        $review->save();
        Alert::success('Terima Kasih', 'Tanggapan anda sudah kami terima')->autoClose(3000);
        return redirect()->back();
    }
}
