<nav id="mainNavbar" class="navbar navbar-expand-lg py-3 fixed-top
    {{ Request::segment(1) == '' ? 'navbar-dark' : 'bg-white shadow navbar-light' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/yoiki/logo.webp') }}" alt="" height="55" width="55">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link active" aria-current="page">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="/blog" class="nav-link active" aria-current="page">Blog</a>
                </li>
                <!-- Dropdown Manual -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownToggle">Menu</a>
                    <ul class="dropdown-menu" id="dropdownMenu">
                        <li><a class="dropdown-item" href="/khutbah">Khutbah</a></li>
                        <li><a class="dropdown-item" href="/pidato">Pidato</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/foto" class="nav-link active">Foto</a>
                </li>
                <li class="nav-item">
                    <a href="/videos" class="nav-link active">Video</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="{{ route('register.create') }}" class="nav-link active">Pendaftaran</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="{{ url('pendaftaran') }}" class="nav-link active">Pendaftaran</a>
                </li>
                @endguest
                <li class="nav-item">
                    <a href="/about" class="nav-link active">About</a>
                </li>
                <li class="nav-item">
                    <a href="/kontak" class="nav-link active">Kontak</a>
                </li>
            </ul>

            <div class="button-navbar d-flex">
                @auth
                <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link active">Dashboard</a>
                    </li>
                </ul>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger logout">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>


<style>
    .navbar-dark .nav-link {
    color: white;
    transition: color 0.3s;
}

.navbar-light .nav-link {
    color: black;
    transition: color 0.3s;
}
#mainNavbar {
    max-width: 100%; /* Batasi lebar navbar ke 100% viewport */
    overflow-x: hidden; /* Hilangkan scroll horizontal */
    box-sizing: border-box;
}
#mainNavbar .container-fluid {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
* {
    /* outline: 1px solid red; */
}
.navbar-collapse {
    display: flex;
    justify-content: space-between;
    flex-wrap: nowrap;
}

@media (max-width: 991px) { /* Berlaku untuk layar mobile */
    .navbar-collapse {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-nav {
        flex-grow: 1; /* Biar navbar menyesuaikan ukuran */
    }

    .d-flex {
        margin-left: auto; /* Supaya tetap di kanan */
        display: flex;
        align-items: center;
    }

    .d-flex .btn {
        white-space: nowrap; /* Mencegah tombol turun ke bawah */
    }

}

#mainNavbar {
    /* outline: 2px solid red; */
}

    @media (max-width: 991px) { /* Berlaku untuk layar mobile */
    .d-flex {
        flex-direction: column; /* Membalikkan urutan elemen */
        align-items: flex-start; /* Supaya rata kiri */
        gap: 5px; /* Beri jarak antara Dashboard dan Logout */
    }

    .d-flex form {
        width: 100%; /* Agar tombol logout tetap rapi */
    }

    .button-navbar {
        margin-bottom: 150px;
    }

    .logout {
        margin-left: 16px;
    }
}




/* Pastikan dropdown menu muncul sepenuhnya */
.dropdown-menu {
    position: absolute !important;
    top: 100% !important;
    left: 0;
    z-index: 1050;
    display: none; /* Default disembunyikan */
    min-width: 150px; /* Atur lebar minimal */
}

/* Tampilkan dropdown dengan klik */
.show > .dropdown-menu {
    display: block;
}

/* Perbaiki jika dropdown terlalu ke kiri */
@media (min-width: 992px) {
    .navbar .dropdown-menu {
        transform: translateX(-50%);
        left: 50%;
    }
}












/* Styling dropdown */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 10px;
    margin: 0;
    min-width: 150px;
    z-index: 1000;
}

.dropdown-menu li {
    padding: 8px 12px;
}

.dropdown-menu li a {
    text-decoration: none;
    color: black;
    display: block;
}

.dropdown-menu li:hover {
    background-color: #f8f9fa;
}

/* Agar dropdown tetap pada posisi relatif terhadap parent */
.nav-item.dropdown {
    position: relative;
}

/* Tampilkan dropdown jika aktif */
.dropdown-menu.show {
    display: block;
}

/* Responsif agar dropdown tidak terpotong */
@media (max-width: 991px) {
    .dropdown-menu {
        position: absolute !important; /* Pastikan dropdown tetap berada di bawah */
        left: 0 !important;  /* Posisikan dropdown agar tetap dekat dengan tombol */
        right: auto !important; /* Hindari terlalu ke kanan */
        width: max-content; /* Sesuaikan lebar dropdown dengan isinya */
        min-width: 150px; /* Beri batas minimum lebar */
        background-color: white; /* Pastikan tetap terlihat */
        border-radius: 5px; /* Agar lebih rapi */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan sedikit bayangan */
    }

    .dropdown-menu.show {
        display: block;
    }
}



/* Navbar harus berada di atas hero */
.navbar {
    z-index: 1050; /* Pastikan navbar di atas elemen lain */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
}

/* Pastikan hero section tidak menutupi navbar */
.hero-section {
    position: relative;
    z-index: 1; /* Pastikan lebih rendah dari navbar */
}

/* Dropdown styling */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 10px;
    margin: 0;
    min-width: 150px;
    z-index: 1100; /* Lebih tinggi dari navbar */
    overflow: visible; /* Pastikan dropdown tidak terpotong */
}

/* Jika dropdown terlalu panjang, tambahkan batasan tinggi */
.dropdown-menu.show {
    display: block;
    max-height: 200px; /* Bisa disesuaikan */
    overflow-y: auto;
}

/* Navbar tidak boleh bisa di-scroll */
.navbar.fixed-top {
    overflow: visible !important;
}


</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbar = document.getElementById("mainNavbar");

        // Cek apakah ini halaman utama
        const isHomePage = navbar.classList.contains("navbar-dark");

        if (isHomePage) {
            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    navbar.classList.add("bg-white", "shadow", "navbar-light");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("bg-white", "shadow", "navbar-light");
                    navbar.classList.add("navbar-dark");
                }
            });
        }
    });





document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggle = document.getElementById("dropdownToggle");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownToggle.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah link reload halaman
        dropdownMenu.classList.toggle("show");
    });

    // Menutup dropdown jika klik di luar dropdown
    document.addEventListener("click", function (event) {
        if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove("show");
        }
    });
});

</script>

