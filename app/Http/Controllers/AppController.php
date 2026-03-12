<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Khutbah;
use App\Models\Photo;
use App\Models\Pidato;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'videos' => Video::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(4)->get()
        ]);
    }

    public function blog()
    {
        return view('blog.blog', [
            'artikels' => Blog::orderBy('id', 'desc')->paginate(6)
        ]);
    }

    public function isiBlog($slug)
    {
        $artikel = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.isi-blog', [
            'artikel' => $artikel
        ]);
    }

    public function khutbah()
    {
        return view('khutbah.khutbah', [
            'khutbahs' => Khutbah::orderBy('id', 'desc')->paginate(6)
        ]);
    }

    public function isiKhutbah($slug)
    {
        $khutbah = Khutbah::where('slug', $slug)->firstOrFail();
        return view('khutbah.isi-khutbah', [
            'khutbah' => $khutbah
        ]);
    }

    public function pidato()
    {
        return view('pidato.pidato', [
            'pidatos' => Pidato::orderBy('id', 'desc')->paginate(6)
        ]);
    }

    public function isiPidato($slug)
    {
        $pidato = Pidato::where('slug', $slug)->firstOrFail();
        return view('pidato.isi-pidato', [
            'pidato' => $pidato
        ]);
    }

    public function foto()
    {
        $photos = Photo::paginate(8);
        return view('foto.foto', compact('photos'));
    }

    public function videos()
    {
        $videos = Video::paginate(3);
        return view('videos.videos', compact('videos'));
    }
}
