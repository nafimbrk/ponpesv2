<x-layouts2 title="Dashboard Register">
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <h4 class="fs-3 fw-bold mb-3">Data Register Santri</h4>
            <div class="d-flex justify-content-between">
                <a href="{{ route('register.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Pendaftar</a>
                <a href="{{ route('register.export') }}" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i>
                    Export</a>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($registers as $register)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $register->nama_lengkap }}
                                </td>
                                <td>
                                    {{ $register->jenis_kelamin }}
                                </td>
                                <td>
                                    {{ $register->tempat_lahir }}
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($register->tanggal_lahir)) }}
                                </td>
                                <td>
                                    <a href="{{ route('register.show', $register->id) }}"><i class="bi bi-eye btn btn-success me-1"></i></a>
                                    <a href="{{ route('register.edit', $register->id) }}" class="btn btn-warning me-1"><i class="bi bi-pencil"></i></a>
                                    <form action="{{ route('register.destroy', $register->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            onclick="return confirm('Apakah yakin ingin menghapus data?')"
                                            class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-md-end justify-content-center mt-5">
                    {{ $registers->links() }}
                </div>
            </div>
        </div>
    </section>
</x-layouts2>
