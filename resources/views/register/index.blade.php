@extends('layouts.main')

@section('container')

    <div id="app">
        <section class="section">
            <div class="container mt-2 mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <h4 class="mt-2 text-uppercase tebel-sedang">Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="post" action="/register">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Nama Lengkap</label>
                                            <input name="name" type="text"
                                                class="form-control mb-3 @error('name') is-invalid @enderror" id="name"
                                                value="{{ old('name') }}" required autofocus>
                                            @error('name')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="npm" class="mb-2">NPM</label>
                                            <input id="npm" type="text"
                                                class="form-control mb-3 @error('npm') is-invalid @enderror" name="npm"
                                                value="{{ old('npm') }}" required>
                                            @error('npm')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="email" class="mb-2">Email</label>
                                            <input id="email" type="email"
                                                class="form-control mb-3 @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="password" class="d-block mb-2">Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required>
                                            @error('password')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="dropdown-divider mt-3 mb-3"></div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="mb-2">Asal Kampus</label>
                                            <select class="form-control mb-3 selected @error('campus') is-invalid @enderror"
                                                name="campus">
                                                <option value="Politeknik Pos Indonesia">Politeknik Pos Indonesia</option>
                                                <option value="Telkom">Telkom University</option>
                                            </select>
                                            @error('campus')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="mb-2">Semester</label>
                                            <select
                                                class="form-control mb-3 selected @error('semester') is-invalid @enderror"
                                                name="semester">
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                            </select>
                                            @error('semester')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group d-grid gap-2">
                                        <button type="submit" class="btn bg-ungu text-white btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="text-center mt-4 mb-3 text-kecil">
                                        Already registered? <a href="/login" class="text-decoration-none">Please Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
