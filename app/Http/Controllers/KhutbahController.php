<?php

namespace App\Http\Controllers;

use App\Models\Khutbah;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class KhutbahController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.khutbah.index', [
            'khutbahs' => Khutbah::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.khutbah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'judul' => 'required',
            'image' => 'mimes:jpg,jpeg,png,webp',
            'desc' => 'required'
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'gambar.required' => 'Gambar wajib diisi',
            'image.mimes:jpg,jpeg,png,webp' => 'Gambar wajib berupa jpg/jpeg/png/webp',
            'desc.required' => 'Deskripsi wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        $image = $request->file('image');
        $image->storeAs('public/khutbah', $image->hashName());

        Khutbah::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $image->hashName(),
            'desc' => $request->desc
        ]);

        return redirect(route('khutbah'))->with('success', 'data berhasil disimpan');
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
        $khutbah = Khutbah::find($id);
        return view('admin.khutbah.edit', ['khutbah' => $khutbah]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $khutbah = Khutbah::find($id);

        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png,webp';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20'
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi',
            'image.required' => 'image wajib diisi',
            'image.mimes:jpg,jpeg,png,webp' => 'Gambar wajib ber tipe jpg|jpeg|png|webp',
            'desc.required' => 'Deskripsi wajib diisi'
        ];

        $this->validate($request, $rules, $messages);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/khutbah', $image->hashName());

            //delete old image
            Storage::delete('public/khutbah/'.$khutbah->image);

            //update product with new image
            $khutbah->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $image->hashName(),
                'desc' => $request->desc
            ]);

        } else {

            //update product without image
            $khutbah->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'desc' => $request->desc
            ]);
        }

        return redirect(route('khutbah'))->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $khutbah = Khutbah::find($id);

        //delete image
        Storage::delete('public/khutbah/'. $khutbah->image);

        //delete khutbah
        $khutbah->delete();

        return redirect(route('khutbah'))->with('success', 'data berhasil dihapus');
    }
}
