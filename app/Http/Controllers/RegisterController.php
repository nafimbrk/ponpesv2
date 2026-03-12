<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Exports\RegisterExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registers = Register::paginate(5);
        return view('register.index', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.create');
    }
    public function createUser()
    {
        return view('register.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'domisili' => 'required',
            'kode_pos' => 'required',
            'status_dalam_keluarga' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'sekolah_asal' => 'required',
            'alamat_sekolah_asal' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_bulanan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_bulanan_ibu' => 'required',
            'program_pesantren' => 'required',
            'no_telp_ortu' => 'required'
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'domisili.required' => 'Domisili wajib diisi',
            'kode_pos.required' => 'Kode Pos wajib diisi',
            'status_dalam_keluarga.required' => 'Status dalam Keluarga wajib diisi',
            'anak_ke.required' => 'Anak ke wajib diisi',
            'jumlah_saudara_kandung.required' => 'Jumlah Saudara Kandung wajib diisi',
            'sekolah_asal.required' => 'Sekolah Asal wajib diisi',
            'alamat_sekolah_asal.required' => 'Alamat Sekolah Asal wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'nama_ayah.required' => 'Nama Ayah wajib diisi',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah wajib diisi',
            'tanggal_lahir_ayah.required' => 'Tanggal Lahir Ayah wajib diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah wajib diisi',
            'pendidikan_ayah.required' => 'Pendidikan Ayah wajib diisi',
            'penghasilan_bulanan_ayah.required' => 'Penghasilan Ayah wajib diisi',
            'nama_ibu.required' => 'Nama Ibu wajib diisi',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu wajib diisi',
            'tanggal_lahir_ibu.required' => 'Tanggal Lahir Ibu wajib diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu wajib diisi',
            'pendidikan_ibu.required' => 'Pendidikan Ibu wajib diisi',
            'penghasilan_bulanan_ibu.required' => 'Penghasilan Ibu wajib diisi',
            'program_pesantren.required' => 'Program Pesantren wajib diisi',
            'no_telp_ortu.required' => 'Nomor Telepon Ortu wajib diisi'
        ]);

        Register::create($request->all());
        return redirect()->route('register.index')->with('success', 'Berhasil Register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'domisili' => 'required',
            'kode_pos' => 'required',
            'status_dalam_keluarga' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'sekolah_asal' => 'required',
            'alamat_sekolah_asal' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_bulanan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_bulanan_ibu' => 'required',
            'program_pesantren' => 'required',
            'no_telp_ortu' => 'required'
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'domisili.required' => 'Domisili wajib diisi',
            'kode_pos.required' => 'Kode Pos wajib diisi',
            'status_dalam_keluarga.required' => 'Status dalam Keluarga wajib diisi',
            'anak_ke.required' => 'Anak ke wajib diisi',
            'jumlah_saudara_kandung.required' => 'Jumlah Saudara Kandung wajib diisi',
            'sekolah_asal.required' => 'Sekolah Asal wajib diisi',
            'alamat_sekolah_asal.required' => 'Alamat Sekolah Asal wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'nama_ayah.required' => 'Nama Ayah wajib diisi',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah wajib diisi',
            'tanggal_lahir_ayah.required' => 'Tanggal Lahir Ayah wajib diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah wajib diisi',
            'pendidikan_ayah.required' => 'Pendidikan Ayah wajib diisi',
            'penghasilan_bulanan_ayah.required' => 'Penghasilan Ayah wajib diisi',
            'nama_ibu.required' => 'Nama Ibu wajib diisi',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu wajib diisi',
            'tanggal_lahir_ibu.required' => 'Tanggal Lahir Ibu wajib diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu wajib diisi',
            'pendidikan_ibu.required' => 'Pendidikan Ibu wajib diisi',
            'penghasilan_bulanan_ibu.required' => 'Penghasilan Ibu wajib diisi',
            'program_pesantren.required' => 'Program Pesantren wajib diisi',
            'no_telp_ortu.required' => 'Nomor Telepon Ortu wajib diisi'
        ]);

        Register::create($request->all());
        Alert::success('Success!', 'Berhasil Melakukan Registrasi');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $registers = Register::findOrFail($id);
        return view('register.show', compact('registers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $register = Register::findOrFail($id);
        return view('register.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $register = Register::findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'domisili' => 'required',
            'kode_pos' => 'required',
            'status_dalam_keluarga' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'sekolah_asal' => 'required',
            'alamat_sekolah_asal' => 'required',
            'nik' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir_ayah' => 'required',
            'tanggal_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'penghasilan_bulanan_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir_ibu' => 'required',
            'tanggal_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'penghasilan_bulanan_ibu' => 'required',
            'program_pesantren' => 'required',
            'no_telp_ortu' => 'required'
        ], [
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'domisili.required' => 'Domisili wajib diisi',
            'kode_pos.required' => 'Kode Pos wajib diisi',
            'status_dalam_keluarga.required' => 'Status dalam Keluarga wajib diisi',
            'anak_ke.required' => 'Anak ke wajib diisi',
            'jumlah_saudara_kandung.required' => 'Jumlah Saudara Kandung wajib diisi',
            'sekolah_asal.required' => 'Sekolah Asal wajib diisi',
            'alamat_sekolah_asal.required' => 'Alamat Sekolah Asal wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'nama_ayah.required' => 'Nama Ayah wajib diisi',
            'tempat_lahir_ayah.required' => 'Tempat Lahir Ayah wajib diisi',
            'tanggal_lahir_ayah.required' => 'Tanggal Lahir Ayah wajib diisi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah wajib diisi',
            'pendidikan_ayah.required' => 'Pendidikan Ayah wajib diisi',
            'penghasilan_bulanan_ayah.required' => 'Penghasilan Ayah wajib diisi',
            'nama_ibu.required' => 'Nama Ibu wajib diisi',
            'tempat_lahir_ibu.required' => 'Tempat Lahir Ibu wajib diisi',
            'tanggal_lahir_ibu.required' => 'Tanggal Lahir Ibu wajib diisi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu wajib diisi',
            'pendidikan_ibu.required' => 'Pendidikan Ibu wajib diisi',
            'penghasilan_bulanan_ibu.required' => 'Penghasilan Ibu wajib diisi',
            'program_pesantren.required' => 'Program Pesantren wajib diisi',
            'no_telp_ortu.required' => 'Nomor Telepon Ortu wajib diisi'
        ]);

        // $flight = Register::find($id);

        // $flight->nama_lengkap = $request->nama_lengkap;
        // $flight->jenis_kelamin = $request->jenis_kelamin;
        // $flight->tempat_lahir = $request->tempat_lahir;
        // $flight->tanggal_lahir = $request->tanggal_lahir;
        // $flight->alamat = $request->alamat;
        // $flight->domisili = $request->domisili;
        // $flight->kode_pos = $request->kode_pos;
        // $flight->status_dalam_keluarga = $request->status_dalam_keluarga;
        // $flight->anak_ke = $request->anak_ke;
        // $flight->jumlah_saudara_kandung = $request->jumlah_saudara_kandung;
        // $flight->sekolah_asal = $request->sekolah_asal;
        // $flight->alamat_sekolah_asal = $request->alamat_sekolah_asal;
        // $flight->nik = $request->nik;
        // $flight->nama_ayah = $request->nama_ayah;
        // $flight->tempat_lahir_ayah = $request->tempat_lahir_ayah;
        // $flight->tanggal_lahir_ayah = $request->tanggal_lahir_ayah;
        // $flight->pekerjaan_ayah = $request->pekerjaan_ayah;
        // $flight->pendidikan_ayah = $request->pendidikan_ayah;
        // $flight->penghasilan_bulanan_ayah = $request->penghasilan_bulanan_ayah;
        // $flight->nama_ibu = $request->nama_ibu;
        // $flight->tempat_lahir_ibu = $request->tempat_lahir_ibu;
        // $flight->tanggal_lahir_ibu = $request->tanggal_lahir_ibu;
        // $flight->pekerjaan_ibu = $request->pekerjaan_ibu;
        // $flight->pendidikan_ibu = $request->pendidikan_ibu;
        // $flight->penghasilan_bulanan_ibu = $request->penghasilan_bulanan_ibu;
        // $flight->program_pesantren = $request->program_pesantren;
        // $flight->no_telp_ortu = $request->no_telp_ortu;

        // $flight->save();

        $register->update($request->all());

        return redirect()->route('register.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $register = Register::findOrFail($id);

        $register->delete();

        return redirect()->route('register.index')->with('success', 'Data berhasil dihapus');
    }

    public function registerSuccess()
    {
        return view('register.success');
    }

    public function export()
    {
        return Excel::download(new RegisterExport, 'register.xlsx');
    }

    public function download()
    {
        $filePath = storage_path('app/public/pdf/brosur.pdf');

        return response()->download($filePath);
    }
}
