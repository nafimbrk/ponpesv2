<x-layouts2 title="Dashboard">
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold fs-3 mb-4">Dashboard Admin</h3>
            <div class="row">
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text mb-2">Atur dan Kelola Artikel</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Khutbah</h5>
                            <p class="card-text mb-2">Atur dan Kelola Khutbah</p>
                            <a href="{{ route('khutbah') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pidato</h5>
                            <p class="card-text mb-2">Atur dan Kelola Pidato</p>
                            <a href="{{ route('pidato') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Photo Kegiatan</h5>
                            <p class="card-text mb-2">Atur dan Kelola Photo</p>
                            <a href="{{ route('photo') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Video Kegiatan</h5>
                            <p class="card-text mb-2">Atur dan Kelola Video</p>
                            <a href="{{ route('video') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/dashboard.webp')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Data Register</h5>
                            <p class="card-text mb-2">Atur dan Kelola Data Pendaftaran</p>
                            <a href="{{ route('register.index') }}" class="btn btn-primary">Kelola</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts2>
