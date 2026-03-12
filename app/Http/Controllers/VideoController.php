<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'video' => 'required'
        ];

        $messages = [
            'judul.required' => 'judul wajib diisi',
            'video.required' => 'video wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        $video = $request->video->hashName();
        $request->file('video')->storeAs('public/video', $video);

        Video::create([
            'judul' => $request->judul,
            'video' => $video
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $videos = Video::find($id);

        $rules = [
            'judul' => 'required'
        ];

        $messages = [
            'judul.required' => 'judul wajib diisi'
        ];

        $this->validate($request, $rules, $messages);



if ($request->hasFile('video')) {

    $video = $request->file('video');
    $video->storeAs('public/video', $video->hashName());

    Storage::delete('public/video/'.$videos->video);

    $videos->update([
        'judul' => $request->judul,
        'video' => $video->hashName()
    ]);

} else {

    $videos->update([
        'judul' => $request->judul
    ]);
}






        return redirect(route('video'))->with('success', 'data video berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::find($id);

        Storage::delete('public/video/'. $video->video);

        $video->delete();

        return redirect(route('video'))->with('success', 'data video berhasil dihapus');
    }
}
