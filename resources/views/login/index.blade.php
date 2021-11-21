@extends('layouts.main')

@section('container')

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>

                        @endif
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <h4 class="mt-3 text-uppercase tebel-sedang">Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email" class="mb-2">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" required
                                            autofocus>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="d-block">
                                            <label for="password" class="control-label mt-3 mb-2">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required>
                                    </div>

                                    <div class="form-group d-grid gap-2">
                                        <button type="submit" class="btn bg-ungu text-white btn-lg mt-3">
                                            Login
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3 text-kecil">
                                    Don't have an account? <a href="/register" class="text-decoration-none">Register
                                        now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
