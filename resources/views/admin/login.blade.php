{{-- Parent --}}
@extends('admin.templates.login-master')

{{-- Content --}}
@section('title', 'Login')
@section('login-content')
    <div class="main-content bg-default">
        <!-- Header -->
        <div class="header bg-gradient-primary py-6 py-lg-6">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-light">
                                Use these awesome forms to login or create new account in your project for free.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3">
                                <small>Sign in with</small>
                            </div>
                            <div class="btn-wrapper text-center">
                                <a href="#" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon">
                                        <i class="fab fa-facebook-square"></i>
                                    </span>
                                    <span class="btn-inner--text">Facebook</span>
                                </a>
                                <a href="#" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon">
                                        <i class="fab fa-google"></i>
                                    </span>
                                    <span class="btn-inner--text">Google</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign in with credentials</small>
                            </div>
                            <form role="form">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input
                                            class="form-control"
                                            placeholder="Email"
                                            type="email"
                                            name="email"
                                        >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-unlock-alt"></i>
                                            </span>
                                        </div>
                                        <input
                                            class="form-control"
                                            placeholder="Password"
                                            type="password"
                                            name="password"
                                        >
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input
                                        class="custom-control-input"
                                        id="customCheckLogin"
                                        type="checkbox"
                                        name="remeber"
                                    >
                                    <label class="custom-control-label" for="customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary my-4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a
                                href="#"
                                class="text-light"
                            >
                                <small>Forgot password?</small>
                            </a>
                        </div>
                        <div class="col-6 text-right">
                            <a
                                href="#"
                                class="text-light"
                            >
                                <small>Create new account</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="copyright text-muted">
                        &copy; {{ date('Y') }}
                        <a
                            href="https://github.com/Victor-Fiamoncini"
                            class="font-weight-bold ml-1"
                            target="_blank"
                        >
                            Victor B. Fiamoncini
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
