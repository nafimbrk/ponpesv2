<x-layouts2 title="Detail Register">
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <h4 class="fs-3 fw-bold mb-3">Detail Data Register Santri</h4>
            <ol class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nama Lengkap</div>
                        {{ $registers->nama_lengkap }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Jenis Kelamin</div>
                        {{ $registers->jenis_kelamin }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tempat Lahir</div>
                        {{ $registers->tempat_lahir }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tanggal Lahir</div>
                        {{ date("d-m-Y", strtotime($registers->tanggal_lahir)); }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Alamat</div>
                        {{ $registers->alamat }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Domisili</div>
                        {{ $registers->domisili }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kode Pos</div>
                        {{ $registers->kode_pos }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Status Dalam Keluarga</div>
                        {{ $registers->status_dalam_keluarga }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Anak Ke</div>
                        {{ $registers->anak_ke }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Jumlah Saudara Kandung</div>
                        {{ $registers->jumlah_saudara_kandung }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Sekolah Asal</div>
                        {{ $registers->sekolah_asal }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Alamat Sekolah Asal</div>
                        {{ $registers->alamat_sekolah_asal }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">NIK</div>
                        {{ $registers->nik }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nama Ayah</div>
                        {{ $registers->nama_ayah }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tempat Lahir Ayah</div>
                        {{ $registers->tempat_lahir_ayah }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tanggal Lahir Ayah</div>
                        {{ date("d-m-Y", strtotime($registers->tanggal_lahir_ayah)); }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pekerjaan Ayah</div>
                        {{ $registers->pekerjaan_ayah }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pendidikan Ayah</div>
                        {{ $registers->pendidikan_ayah }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Penghasilan Bulanan Ayah</div>
                        {{ $registers->penghasilan_bulanan_ayah }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nama Ibu</div>
                        {{ $registers->nama_ibu }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tempat Lahir Ibu</div>
                        {{ $registers->tempat_lahir_ibu }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Tanggal Lahir Ibu</div>
                        {{ date("d-m-Y", strtotime($registers->tanggal_lahir_ibu)); }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pekerjaan Ibu</div>
                        {{ $registers->pekerjaan_ibu }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pendidikan Ibu</div>
                        {{ $registers->pendidikan_ibu }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Penghasilan Bulanan Ibu</div>
                        {{ $registers->penghasilan_bulanan_ibu }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Program Pesantren</div>
                        {{ $registers->program_pesantren }}
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nomor Telepon Ortu</div>
                        {{ $registers->no_telp_ortu }}
                    </div>
                </li>
            </ol>
        </div>
    </section>
</x-layouts2>
