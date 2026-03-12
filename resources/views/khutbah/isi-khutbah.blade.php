<x-layouts title="{{ $khutbah->judul }}">
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="mb-3 link-khutbah">
                <a href="/" class="text-primary">Home</a> /
                <a href="/khutbah" class="text-primary">Khutbah</a> /
                <a href="{{ url('/khutbah/' . $khutbah->slug) }}" class="text-primary">{{ $khutbah->judul }}</a>
            </div>
            <img src="{{ asset('storage/khutbah/' . $khutbah->image) }}"
            alt=""
            class="img-fluid mb-3 rounded-3 object-cover"
            style="width: 700px; height: 400px; object-fit: cover;">
                    <div class="konten-khutbah">
                <p class="mb-3 text-secondary">{{ $khutbah->created_at->format('d/m/Y') }}</p>
                <h4 class="fw-bold fs-3 mb-3">{{ $khutbah->judul }}</h4>
                <p class="text-secondary">{!! $khutbah->desc !!}</p>
            </div>
        </div>
    </section>
    <style>
        .link-khutbah a:hover {
            text-decoration: underline;
        }
    </style>
</x-layouts>
