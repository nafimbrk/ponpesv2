<x-layouts title="{{ $artikel->judul }}">
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8 w-50">
            <div class="mb-3 link-blog">
                <a href="/" class="text-primary">Home</a> /
                <a href="/blog" class="text-primary">Blog</a> /
                <a href="{{ url('/blog/' . $artikel->slug) }}" class="text-primary">{{ $artikel->judul }}</a>
            </div>
            <img src="{{ asset('storage/artikel/' . $artikel->image) }}"
            alt=""
            class="img-fluid mb-3 rounded-3 object-cover"
            style="width: 700px; height: 400px; object-fit: cover;">
                    <div class="konten-blog">
                <p class="mb-3 text-secondary">{{ $artikel->created_at->format('d/m/Y') }}</p>
                <h4 class="fw-bold fs-3 mb-3">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
    <style>
        .link-blog a:hover {
            text-decoration: underline;
        }
    </style>
</x-layouts>
