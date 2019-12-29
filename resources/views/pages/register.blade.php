{{-- Parent --}}
@extends('templates.auth-master')

{{-- Content --}}
@section('title', 'Register')
@section('auth-content')
    <div class="main-content bg-default">
        {{-- Header --}}
        @header
            @slot('title', 'Create a New Account!')
            @slot('content', 'Use this awesome form to create a new account for free.')
        @endheader
        {{-- Form --}}
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form
                                role="form"
                                action="{{ route('register.user') }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf
                                <div
                                    class="
                                        form-group mb-3
                                        {{ $errors->has('name') ? 'placeholder-error ' : '' }}
                                    "
                                >
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input
                                            class="form-control"
                                            placeholder="Name"
                                            type="text"
                                            name="name"
                                            value="{{ old('name') }}"
                                        >
                                    </div>
                                    @if ($errors->has('name'))
                                        <small class="form-text text-danger">
                                            {{ $errors->first('name') }}
                                        </small>
                                    @endif
                                </div>
                                <div
                                    class="
                                        form-group mb-3
                                        {{ $errors->has('email') ? 'placeholder-error ' : '' }}
                                    "
                                >
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input
                                            class="form-control"
                                            placeholder="Email"
                                            type="text"
                                            name="email"
                                            value="{{ old('email') }}"
                                        >
                                    </div>
                                    @if ($errors->has('email'))
                                        <small class="form-text text-danger">
                                            {{ $errors->first('email') }}
                                        </small>
                                    @endif
                                </div>
                                <div
                                    class="
                                        form-group mb-3
                                        {{ $errors->has('password') ? 'placeholder-error ' : '' }}
                                    "
                                >
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-unlock-alt"></i>
                                            </span>
                                        </div>
                                        <input
                                            class="form-control display-5"
                                            placeholder="Password"
                                            type="password"
                                            name="password"
                                            value="{{ old('password') }}"
                                        >
                                    </div>
                                    @if ($errors->has('password'))
                                        <small class="form-text text-danger">
                                            {{ $errors->first('password') }}
                                        </small>
                                    @endif
                                </div>
                                <div class="input-group input-group-alternative">
                                    <input
                                        id="cover"
                                        class="custom-file-input cursor-pointer"
                                        type="file"
                                        name="cover"
                                    >
                                    <label
                                        class="custom-file-label border-0 font-size-17"
                                        for="cover"
                                    >
                                        <i class="fas fa-camera mr-1"></i>
                                        <small class="color-gray">No file selected</small>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">
                                        Register
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
                                href="{{ route('login') }}"
                                class="text-light"
                            >
                                <small>Sign in</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Footer --}}
        @include('includes.footer')
    </div>
@endsection

{{-- Scripts --}}
@section('scripts')
    <script>
        $('input[type="file"]').change(function() {
            $(this)
                .siblings('.custom-file-label')
                .addClass('selected')
                .find('small')
                .text('File selected')
                .addClass('text-success')
                .siblings('i')
                .addClass('color-success')
        })
    </script>
@endsection
