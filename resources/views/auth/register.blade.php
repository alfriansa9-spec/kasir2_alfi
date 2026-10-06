
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Kasir Alfi</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
</head>

<body class="hold-transition register-page">

    <div class="register-box">

        <div class="card card-outline card-primary">

            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <b>Kasir</b> Alfi
                </a>
            </div>

            <div class="card-body">

                <p class="login-box-msg">
                    Daftar akun baru
                </p>

                <form action="{{ route('register') }}" method="POST">

                    @csrf

                    {{-- Nama --}}
                    <div class="input-group mb-3">

                        <input type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            placeholder="Nama Lengkap"
                            autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>

                        @error('name')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    {{-- Email --}}
                    <div class="input-group mb-3">

                        <input type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            placeholder="Email">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                        @error('email')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    {{-- Password --}}
                    <div class="input-group mb-3">

                        <input type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    {{-- Konfirmasi Password --}}
                    <div class="input-group mb-3">

                        <input type="password"
                            name="password_confirmation"
                            class="form-control"
                            placeholder="Konfirmasi Password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>


                    {{-- Tombol --}}
                    <button type="submit"
                        class="btn btn-primary btn-block">

                        <i class="fas fa-user-plus"></i>
                        Daftar

                    </button>

                </form>


                {{-- Login --}}
                <p class="mt-3 mb-0 text-center">

                    <a href="{{ route('login') }}">
                        Sudah punya akun? Login
                    </a>

                </p>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>

</html>