<x-layouts title="About">
    <section id="hero" class="px-0 d-flex align-items-center" style="height: 100vh; background-color: #282c34;">
        <div class="container text-center text-white" style="transform: translateY(-10%);">
            <div class="hero-title" data-aos="fade-up">
                <h1 class="hero-text">Tentang Kami</h1>
                <p class="fw-semibold fs-5">Pondok Pesantren Modern Al Hijrah dengan Konsep Pendidikan Kaffah</p>
            </div>
        </div>  
    </section>
    
    

    <section id="about-intro" class="py-5" style="margin-top: 60px">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 mb-3" data-aos="fade-right">
                    <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="Tentang Kami" class="img-fluid rounded">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="fw-bold mb-3">Misi Kami</h2>
                    <p class="text-secondary">Pesantren Al Hijrah bertujuan untuk mencetak generasi Robbani yang tidak hanya unggul dalam ilmu agama, tetapi juga memiliki keterampilan duniawi untuk menghadapi tantangan zaman.</p>
                    <p class="text-secondary">Kami mengintegrasikan pendidikan modern dengan nilai-nilai Islam yang holistik, menciptakan lingkungan yang mendukung pertumbuhan spiritual, intelektual, dan emosional santri.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about-values" class="py-5">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="fw-bold mb-5">Nilai-Nilai Kami</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 p-4">
                        <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="Berakhlak" class="mb-3" height="60">
                        <h5 class="fw-bold">Berakhlak Mulia</h5>
                        <p class="text-secondary">Membentuk karakter mulia dengan menanamkan akhlak Islami dalam setiap aspek kehidupan.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 p-4">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" alt="Ilmu Pengetahuan" class="mb-3" height="60">
                        <h5 class="fw-bold">Ilmu Pengetahuan</h5>
                        <p class="text-secondary">Mengembangkan ilmu agama dan dunia untuk keseimbangan kehidupan duniawi dan ukhrawi.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 p-4">
                        <img src="{{ asset('assets/images/il-photo-03.png') }}" alt="Teknologi" class="mb-3" height="60">
                        <h5 class="fw-bold">Teknologi Modern</h5>
                        <p class="text-secondary">Memanfaatkan teknologi modern sebagai sarana untuk meningkatkan kualitas pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-team" class="py-5">
        <div class="container" data-aos="zoom-in">
            <h2 class="fw-bold text-center mb-5">Tim Kami</h2>
            <div class="row">
                <div class="col-lg-4 text-center mb-4">
                    <img src="{{ asset('assets/images/il-photo-01.png') }}" alt="Kyai Pesantren" class="rounded-circle mb-3 center" width="150">
                    <h5 class="fw-bold">Kyai Pesantren</h5>
                    <p class="text-secondary">Pendiri dan pembimbing utama yang memimpin pesantren dengan bijaksana.</p>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <img src="{{ asset('assets/images/il-photo-02.png') }}" alt="Ustadzah" class="rounded-circle mb-3 center" width="150">
                    <h5 class="fw-bold">Ustadzah</h5>
                    <p class="text-secondary">Pengajar yang berdedikasi dalam mendidik santri dengan penuh kasih.</p>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <img src="{{ asset('assets/images/il-photo-03.png') }}" alt="Admin Pesantren" class="rounded-circle mb-3 center" width="150">
                    <h5 class="fw-bold">Admin Pesantren</h5>
                    <p class="text-secondary">Bertanggung jawab atas administrasi dan operasional harian pesantren.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts>
