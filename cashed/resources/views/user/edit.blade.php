<x-layout>
    <x-slot:title>Edit User</x-slot:title>
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Buat Akun</h2>

                            <form>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="name" class="form-control form-control-lg" />
                                    <label class="form-label" for="name">Nama Anda</label>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email Anda</label>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Ulangi Password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value=""
                                        id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g" required>
                                        Saya setuju dengan <a href="#!" class="text-body"><u>Syarat dan
                                                Ketentuan</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-dark btn-block btn-lg">Simpan</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Sudah memiliki akun? <a href="/login"
                                        class="fw-bold text-body"><u>Login disini</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
