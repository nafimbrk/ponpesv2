<x-layouts2 title="Dashboard Pidato">
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">

            <h4 class="fs-3 fw-bold mb-3">Pidato</h4>

            <a href="{{ route('pidato.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Buat Pidato</a>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive my-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pidatos as $pidato)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/pidato/' . $pidato->image) }}" alt=""
                                        height="100" width="200" class="rounded">
                                </td>
                                <td>
                                    {{ $pidato->judul }}
                                </td>
                                <td>
                                    {!! Str::limit($pidato->desc,50) !!}
                                </td>
                                <td>
                                    <a href="{{ route('pidato.edit', $pidato->id) }}"
                                        class="btn btn-warning me-1"><i class="bi bi-pencil"></i></a>
                                    <form action="{{ route('pidato.destroy', $pidato->id) }}" method="POST" class="d-inline">
                                        @csrf
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
                    {{ $pidatos->links() }}
                </div>
            </div>
        </div>

    </section>
</x-layouts2>
