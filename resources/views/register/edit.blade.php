<x-layouts2 title="Edit Register">
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <h4 class="fs-3 fw-bold mb-3">Edit Pendaftaran</h4>
            <form action="{{ route('register.update', $register->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group mb-4">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id=""
                        class="form-control @error('nama_lengkap') is-invalid @enderror"
                        value="{{ $register->nama_lengkap }}">
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id=""
                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->jenis_kelamin }}</option>
                        @if ($register->jenis_kelamin == 'Laki-Laki')                            
                        <option value="Perempuan">Perempuan</option>
                        @else
                        <option value="Laki-Laki">Laki-Laki</option>
                        @endif
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tempat Lahir</label> <br>
                    <textarea name="tempat_lahir" id="summernote" class="form-control">{{ $register->tempat_lahir }}</textarea>
                    @error('tempat_lahir')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id=""
                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        value="{{ $register->tanggal_lahir }}">
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Alamat</label> <br>
                    <textarea name="alamat" id="summernote" class="form-control">{{ $register->alamat }}</textarea>
                    @error('alamat')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Domisili</label> <br>
                    <textarea name="domisili" id="summernote" class="form-control">{{ $register->domisili }}</textarea>
                    @error('domisili')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="text" name="kode_pos" id=""
                        class="form-control @error('kode_pos') is-invalid @enderror" value="{{ $register->kode_pos }}">
                    @error('kode_pos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Status Dalam Keluarga</label>
                    <select name="status_dalam_keluarga" id=""
                        class="form-control @error('status_dalam_keluarga') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->status_dalam_keluarga }}</option>
                        @if ($register->status_dalam_keluarga == 'Kandung')
                            <option value="Tiri">Tiri</option>
                            <option value="Angkat">Angkat</option>
                        @elseif ($register->status_dalam_keluarga == 'Tiri')
                            <option value="Kandung">Kandung</option>
                            <option value="Angkat">Angkat</option>
                        @else
                            <option value="Kandung">Kandung</option>
                            <option value="Tiri">Tiri</option>
                        @endif

                    </select>
                    @error('status_dalam_keluarga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Anak Ke</label>
                    <input type="number" name="anak_ke" id=""
                        class="form-control @error('anak_ke') is-invalid @enderror" value="{{ $register->anak_ke }}">
                    @error('anak_ke')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Jumlah Saudara Kandung</label>
                    <input type="number" name="jumlah_saudara_kandung" id=""
                        class="form-control @error('jumlah_saudara_kandung') is-invalid @enderror"
                        value="{{ $register->jumlah_saudara_kandung }}">
                    @error('jumlah_saudara_kandung')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" id=""
                        class="form-control @error('sekolah_asal') is-invalid @enderror"
                        value="{{ $register->sekolah_asal }}">
                    @error('sekolah_asal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Alamat Sekolah Asal</label> <br>
                    <textarea name="alamat_sekolah_asal" id="summernote" class="form-control">{{ $register->alamat_sekolah_asal }}</textarea>
                    @error('alamat_sekolah_asal')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Nik</label>
                    <input type="text" name="nik" id=""
                        class="form-control @error('nik') is-invalid @enderror" value="{{ $register->nik }}">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Nama Ayah</label>
                    <input type="text" name="nama_ayah" id=""
                        class="form-control @error('nama_ayah') is-invalid @enderror"
                        value="{{ $register->nama_ayah }}">
                    @error('nama_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tempat Lahir Ayah</label> <br>
                    <textarea name="tempat_lahir_ayah" id="summernote" class="form-control">{{ $register->tempat_lahir_ayah }}</textarea>
                    @error('tempat_lahir_ayah')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tanggal Lahir Ayah</label>
                    <input type="date" name="tanggal_lahir_ayah" id=""
                        class="form-control @error('tanggal_lahir_ayah') is-invalid @enderror"
                        value="{{ $register->tanggal_lahir_ayah }}">
                    @error('tanggal_lahir_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" id=""
                        class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                        value="{{ $register->pekerjaan_ayah }}">
                    @error('pekerjaan_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Pendidikan Ayah</label>
                    <select name="pendidikan_ayah" id=""
                        class="form-control @error('pendidikan_ayah') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->pendidikan_ayah }}</option>
                        @if ($register->pendidikan_ayah == 'SD')
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ayah == 'SMP')
                            <option value="SD">SD</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ayah == 'SMA')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ayah == 'S1')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ayah == 'S2')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S3">S3</option>
                        @else
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        @endif
                    </select>
                    @error('pendidikan_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Penghasilan Bulanan Ayah</label>
                    <select name="penghasilan_bulanan_ayah" id=""
                        class="form-control @error('penghasilan_bulanan_ayah') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->penghasilan_bulanan_ayah }}</option>
                        @if ($register->penghasilan_bulanan_ayah == 'Kurang dari Rp. 1.000.000')
                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                            <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
                        @elseif ($register->penghasilan_bulanan_ayah == 'Rp. 1.000.000 - Rp. 2.000.000')
                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                            <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
                        @else
                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                        @endif
                    </select>
                    @error('penghasilan_bulanan_ayah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id=""
                        class="form-control @error('nama_ibu') is-invalid @enderror"
                        value="{{ $register->nama_ibu }}">
                    @error('nama_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tempat Lahir Ibu</label> <br>
                    <textarea name="tempat_lahir_ibu" id="summernote" class="form-control">{{ $register->tempat_lahir_ibu }}</textarea>
                    @error('tempat_lahir_ibu')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Tanggal Lahir Ibu</label>
                    <input type="date" name="tanggal_lahir_ibu" id=""
                        class="form-control @error('tanggal_lahir_ibu') is-invalid @enderror"
                        value="{{ $register->tanggal_lahir_ibu }}">
                    @error('tanggal_lahir_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" id=""
                        class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                        value="{{ $register->pekerjaan_ibu }}">
                    @error('pekerjaan_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Pendidikan Ibu</label>
                    <select name="pendidikan_ibu" id=""
                        class="form-control @error('pendidikan_ibu') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->pendidikan_ibu }}</option>
                        @if ($register->pendidikan_ibu == 'SD')
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ibu == 'SMP')
                            <option value="SD">SD</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ibu == 'SMA')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ibu == 'S1')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        @elseif ($register->pendidikan_ibu == 'S2')
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S3">S3</option>
                        @else
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        @endif
                    </select>
                    @error('pendidikan_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Penghasilan Bulanan Ibu</label>
                    <select name="penghasilan_bulanan_ibu" id=""
                        class="form-control @error('penghasilan_bulanan_ibu') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->penghasilan_bulanan_ibu }}</option>
                        @if ($register->penghasilan_bulanan_ibu == 'Kurang dari Rp. 1.000.000')
                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                            <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
                        @elseif ($register->penghasilan_bulanan_ibu == 'Rp. 1.000.000 - Rp. 2.000.000')
                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                            <option value="Lebih dari 2. 000.000">Lebih dari 2. 000.000</option>
                        @else
                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                            <option value="Rp. 1.000.000 - Rp. 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                        @endif
                    </select>
                    @error('penghasilan_bulanan_ibu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Program Pesantren</label>
                    <select name="program_pesantren" id=""
                        class="form-control @error('program_pesantren') is-invalid @enderror">
                        <option value='{{ $register->id }}'>{{ $register->program_pesantren }}</option>
                        @if ($register->program_pesantren == 'Tahfidzul Qur\'an')
                            <option value="Madrasah Diniyah">Madrasah Diniyah</option>
                        @else
                            <option value="Tahfidzul Qur'an">Tahfidzul Qur'an</option>
                        @endif
                    </select>
                    @error('program_pesantren')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="form-label">Nomor Telepon Orang Tua</label>
                    <input type="text" name="no_telp_ortu" id=""
                        class="form-control @error('no_telp_ortu') is-invalid @enderror"
                        value="{{ $register->no_telp_ortu }}">
                    @error('no_telp_ortu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </section>
</x-layouts2>
