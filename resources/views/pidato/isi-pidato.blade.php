<x-layouts title="{{ $pidato->judul }}">
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="mb-3 link-pidato">
                <a href="/" class="text-primary">Home</a> /
                <a href="/pidato" class="text-primary">Khutbah</a> /
                <a href="{{ url('/pidato/' . $pidato->slug) }}" class="text-primary">{{ $pidato->judul }}</a>
            </div>
            <img src="{{ asset('storage/pidato/' . $pidato->image) }}"
            alt=""
            class="img-fluid mb-3 rounded-3 object-cover"
            style="width: 700px; height: 400px; object-fit: cover;">
                    <div class="konten-pidato">
                <p class="mb-3 text-secondary">{{ $pidato->created_at->format('d/m/Y') }}</p>
                <h4 class="fw-bold fs-3 mb-3">{{ $pidato->judul }}</h4>
                <p class="text-secondary">{!! $pidato->desc !!}</p>
            </div>
        </div>
    </section>
    <style>
        .link-pidato a:hover {
            text-decoration: underline;
        }
    </style>
</x-layouts>
