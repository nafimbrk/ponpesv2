<x-layouts title="Video">
    <section id="video_youtube" style="margin-top:200px;" data-aos="zoom-in">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-bold fs-4">Video Kegiatan</h2>
            </div>

            <div class="row py-5">
                @foreach ($videos as $item)
                <div class="col-lg-4 mb-4">
                    <video src="{{ url('/stream/video/' . $item->video) }}" width="100%" height="215" class="rounded" controls></video>
                    <p class="mt-1 text-dark">{{ $item->judul }}</p>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-md-center justify-content-center" style="margin-bottom: 80px">
                {{ $videos->links() }}
            </div>
        </div>
    </section>
</x-layouts>
