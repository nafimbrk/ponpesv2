<x-layouts2 title="Create Pidato">
    <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4 class="fw-bold fs-3 mb-3">Buat Pidato</h4>

        <form action="{{ route('pidato.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="" class="form-label">Masukkan Judul Pidato</label>
            <input type="text" name="judul" id="" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Pilih Photo Pidato</label>
            <input type="file" name="image" id="" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="" class="form-label">Isi Pidato</label> <br>
            <div id="" class="mb-3" style="height: 300px;">
                <textarea name="desc" id="" class="form-control" cols="30" rows="10">{{ old('desc') }}</textarea>
            </div>
            @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    </section>
</x-layouts2>
