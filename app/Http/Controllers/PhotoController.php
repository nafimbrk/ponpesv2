<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->paginate(5)
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
            'image' => 'required'
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'image.required' => 'Gambar wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName
        ]);

        return redirect(route('photo'))->with('success', 'data photo berhasil disimpan');
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
        $photo = Photo::find($id);

        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png,webp';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'image.required' => 'Gambar wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if (Storage::exists('public/photo/' . $request->old_image)) {
                Storage::delete('public/photo/' . $request->old_image);
            }

            // Simpan gambar baru
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        } else {
            $fileName = $request->old_image;
        }

        $photo->update([
            'judul' => $request->judul,
            'image' => $fileName
        ]);

        return redirect(route('photo'))->with('success', 'data photo berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo = Photo::find($id);

        if (Storage::exists('public/photo/' . $photo->image)) {
            Storage::delete('public/photo/' . $photo->image);
        }

        $photo->delete();

        return redirect(route('photo'))->with('success', 'data photo berhasil dihapus');
    }
}
