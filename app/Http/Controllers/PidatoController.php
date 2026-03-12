<?php

namespace App\Http\Controllers;

use App\Models\Pidato;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PidatoController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pidato.index', [
            'pidatos' => Pidato::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pidato.create');
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
        $image->storeAs('public/pidato', $image->hashName());

        Pidato::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $image->hashName(),
            'desc' => $request->desc
        ]);

        return redirect(route('pidato'))->with('success', 'data berhasil disimpan');
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
        $pidato = Pidato::find($id);
        return view('admin.pidato.edit', ['pidato' => $pidato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pidato = Pidato::find($id);

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
            $image->storeAs('public/pidato', $image->hashName());

            //delete old image
            Storage::delete('public/pidato/'.$pidato->image);

            //update product with new image
            $pidato->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'image' => $image->hashName(),
                'desc' => $request->desc
            ]);

        } else {

            //update product without image
            $pidato->update([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul, '-'),
                'desc' => $request->desc
            ]);
        }

        return redirect(route('pidato'))->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pidato = Pidato::find($id);

        //delete image
        Storage::delete('public/pidato/'. $pidato->image);

        //delete pidato
        $pidato->delete();

        return redirect(route('pidato'))->with('success', 'data berhasil dihapus');
    }
}
