<x-layouts title="Foto">
    <section id="foto" style="margin-top: 100px;" data-aos="zoom-in-up" class="py-5">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center mt-4">
                    <h5 class="fw-bold fs-4 text-dark">Foto Kegiatan</h5>
                </div>
            </div>
            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" alt="" class="img-fluid rounded-2" style="height: 200px; object-fit: cover; width: 100%;">
                    <p class="mt-1 text-dark">{{ $photo->judul }}</p>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-md-center justify-content-center mt-5">
                {{ $photos->links() }}
            </div>
        </div>
    </section>
</x-layouts>
