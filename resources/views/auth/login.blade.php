<x-layouts2 title="Login">
    <section style="margin-top: 100px">
    <div class="container py-5 col-xxl-6">
        <h3 class="fw-bold fs-3 mb-3">Login Admin</h3>
        @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <form action="/login" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="" class="form-label">Masukkan Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Masukkan Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    </section>
</x-layouts2>
