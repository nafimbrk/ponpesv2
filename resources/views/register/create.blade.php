<x-layouts2 title="Create Register">
    <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4 class="fs-3 fw-bold mb-3">Pendaftaran</h4>

        <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-group mb-4">
            <label for="" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="" class="form-control @error('nama_lengkap') is-invalid @enderror" value="{{ old('nama_lengkap') }}">
            @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tempat Lahir</label> <br>
            <textarea name="tempat_lahir" id="summernote" class="form-control">{{ old('tempat_lahir') }}</textarea>
            @error('tempat_lahir')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Alamat</label> <br>
            <textarea name="alamat" id="summernote" class="form-control">{{ old('alamat') }}</textarea>
            @error('alamat')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Domisili</label> <br>
            <textarea name="domisili" id="summernote" class="form-control">{{ old('domisili') }}</textarea>
            @error('domisili')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Kode Pos</label>
            <input type="text" name="kode_pos" id="" class="form-control @error('kode_pos') is-invalid @enderror" value="{{ old('kode_pos') }}">
            @error('kode_pos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Status Dalam Keluarga</label>
            <select name="status_dalam_keluarga" id="" class="form-control @error('status_dalam_keluarga') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="Kandung">Kandung</option>
                <option value="Tiri">Tiri</option>
                <option value="Angkat">Angkat</option>
            </select>
            @error('status_dalam_keluarga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Anak Ke</label>
            <input type="number" name="anak_ke" id="" class="form-control @error('anak_ke') is-invalid @enderror" value="{{ old('anak_ke') }}">
            @error('anak_ke')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Jumlah Saudara Kandung</label>
            <input type="number" name="jumlah_saudara_kandung" id="" class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror" value="{{ old('jumlah_saudara_kandung') }}">
            @error('jumlah_saudara_kandung')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" id="" class="form-control @error('sekolah_asal') is-invalid @enderror" value="{{ old('sekolah_asal') }}">
            @error('sekolah_asal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Alamat Sekolah Asal</label> <br>
            <textarea name="alamat_sekolah_asal" id="summernote" class="form-control">{{ old('alamat_sekolah_asal') }}</textarea>
            @error('alamat_sekolah_asal')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Nik</label>
            <input type="text" name="nik" id="" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
            @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Nama Ayah</label>
            <input type="text" name="nama_ayah" id="" class="form-control @error('nama_ayah') is-invalid @enderror" value="{{ old('nama_ayah') }}">
            @error('nama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tempat Lahir Ayah</label> <br>
            <textarea name="tempat_lahir_ayah" id="summernote" class="form-control">{{ old('tempat_lahir_ayah') }}</textarea>
            @error('tempat_lahir_ayah')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tanggal Lahir Ayah</label>
            <input type="date" name="tanggal_lahir_ayah" id="" class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror" value="{{ old('tanggal_lahir_ayah') }}">
            @error('tanggal_lahir_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Pekerjaan Ayah</label>
            <input type="text" name="pekerjaan_ayah" id="" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" value="{{ old('pekerjaan_ayah') }}">
            @error('pekerjaan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Pendidikan Ayah</label>
            <select name="pendidikan_ayah" id="" class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            @error('pendidikan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Penghasilan Bulanan Ayah</label>
            <select name="penghasilan_bulanan_ayah" id="" class="form-control @error('penghasilan_bulanan_ayah') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
            </select>
            @error('penghasilan_bulanan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Nama Ibu</label>
            <input type="text" name="nama_ibu" id="" class="form-control @error('nama_ibu') is-invalid @enderror" value="{{ old('nama_ibu') }}">
            @error('nama_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tempat Lahir Ibu</label> <br>
            <textarea name="tempat_lahir_ibu" id="summernote" class="form-control">{{ old('tempat_lahir_ibu') }}</textarea>
            @error('tempat_lahir_ibu')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Tanggal Lahir Ibu</label>
            <input type="date" name="tanggal_lahir_ibu" id="" class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror" value="{{ old('tanggal_lahir_ibu') }}">
            @error('tanggal_lahir_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu" id="" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" value="{{ old('pekerjaan_ibu') }}">
            @error('pekerjaan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Pendidikan Ibu</label>
            <select name="pendidikan_ibu" id="" class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            @error('pendidikan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Penghasilan Bulanan Ibu</label>
            <select name="penghasilan_bulanan_ibu" id="" class="form-control @error('penghasilan_bulanan_ibu') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
            </select>
            @error('penghasilan_bulanan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Program Pesantren</label>
            <select name="program_pesantren" id="" class="form-control @error('program_pesantren') is-invalid @enderror">
                <option value="" disabled selected>Pilih Satu</option>
                <option value="Tahfidzul Qur'an">Tahfidzul Qur'an</option>
                <option value="Madrasah Diniyah">Madrasah Diniyah</option>
            </select>
            @error('program_pesantren')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Nomor Telepon Orang Tua</label>
            <input type="text" name="no_telp_ortu" id="" class="form-control @error('no_telp_ortu') is-invalid @enderror" value="{{ old('no_telp_ortu') }}">
            @error('no_telp_ortu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    </section>
</x-layouts2>
