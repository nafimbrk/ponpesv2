<x-layouts title="Pendaftaran">
    <div>
        <section class="px-0 d-flex align-items-center" style="min-height: 100vh; margin-top: 50px;">
            <div class="container text-center text-black" style="margin: 100px;">
                <div class="d-flex flex-column align-items-center gap-4">
                    <img src="{{ asset('assets/brosur/1.jpg') }}" alt="Brosur 1" class="img-fluid" style="width: 60%">
                    <img src="{{ asset('assets/brosur/2.jpg') }}" alt="Brosur 2" class="img-fluid" style="width: 60%">
                    <img src="{{ asset('assets/brosur/3.jpg') }}" alt="Brosur 3" class="img-fluid" style="width: 60%">
                </div>

                <!-- Tombol Download dan Daftar dengan posisi kiri & kanan -->
                <div class="d-flex justify-content-end mt-4 gap-3" style="margin-right: 225px">
                    <a href="{{ route('download.pdf') }}" class="btn btn-primary">
                         Download Brosur
                    </a>
                    <a href="{{ route('register.create.user') }}" class="btn btn-success">
                        Daftar Sekarang
                    </a>
                </div>

            </div>
        </section>
    </div>
</x-layouts>
