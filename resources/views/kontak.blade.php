<x-layouts title="Kontak">

    <section id="hero" class="px-0 d-flex align-items-center" style="height: 100vh; background-color: #282c34;">
        <div class="container text-center text-white" style="transform: translateY(-10%);">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Hubungi Kami</div>
                <h4 class="fw-semibold fs-5">Pesantren Al Hijrah</h4>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5">
        <div class="container py-5">
            <div class="header-kontak text-center">
                <h2 class="fw-bold fs-4 mb-2">Kontak Kami</h2>
                <p class="text-muted">Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, silakan hubungi kami melalui formulir di bawah ini.</p>
            </div>

            <div class="row py-5">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <h5 class="fw-bold mb-3">Informasi Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            Dsn Gendong, Desa Watugaluh, Kec Diwek, Kab Jombang
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>
                            Telepon: +62 812-3456-7890
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2"></i>
                            Email: info@pesantrenalihijrah.id
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    {{-- <h5 class="fw-bold mb-3">Formulir Kontak</h5>
                    <form action="/kontak/kirim" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-danger">Kirim</button>
                    </form> --}}
                    <div class="container">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Lokasi Kami</h3>
                        </div>
                        <div class="d-flex justify-content-center" data-aos="fade-left">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.1234567890123!2d107.1234567!3d-6.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1234567abcd!2sPesantren%20Al%20Hijrah!5e0!3m2!1sen!2sid!4v1691234567890!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="lokasi" class="py-5">
        
    </section> --}}

</x-layouts>
