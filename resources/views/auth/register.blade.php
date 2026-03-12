<x-layouts2 title="Register">
    <section style="margin-top: 100px">
    <div class="container py-5 col-xxl-6">
        <h3 class="fw-bold fs-3 mb-3">Register Admin</h3>
        <form action="/registerr" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="" class="form-label">Masukkan Nama</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Masukkan Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Masukkan Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    </section>
</x-layouts2>
