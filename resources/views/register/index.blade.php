@extends('layouts.main')

@section('container')

    <div id="app">
        <section class="section">
            <div class="container mt-4 mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <h4 class="mt-2 text-uppercase tebel-sedang">Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="#">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Nama Lengkap</label>
                                            <input id="name" type="text" class="form-control mb-3" name="name" required
                                                autofocus>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="npm" class="mb-2">NPM</label>
                                            <input id="npm" type="text" class="form-control mb-3" name="npm" required
                                                autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="mb-2">Email</label>
                                        <input id="email" type="email" class="form-control mb-3" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block mb-2">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block mb-2">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control"
                                                name="password-confirm">
                                        </div>
                                    </div>

                                    <div class="dropdown-divider mt-3 mb-3"></div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label class="mb-2">Asal Kampus</label>
                                            <select class="form-control mb-3 selected">
                                                <option>Politeknik Pos Indonesia</option>
                                                <option>Telkom University</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label class="mb-2">Semester</label>
                                            <select class="form-control mb-3 selected">
                                                <option>3</option>
                                                <option>5</option>
                                            </select>
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
