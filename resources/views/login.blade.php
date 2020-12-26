@extends('master')
@section('content')
<div class="bg-white">
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4">
                    <div class="text-center mb-4">
                        <a href="index-2.html"><img src="images/fav.svg" alt=""></a>
                        <h5 class="font-weight-bold mt-3">Bienvenido de Vuelta</h5>
                        <p class="text-muted">No pierda su próxima oportunidad. Inicie sesión para mantenerse actualizado sobre su
                             mundo profesional.</p>
                    </div>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="mb-1">Email o Teléfono</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-account position-absolute"></i>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">Contraseña</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-key-variant position-absolute"></i>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Recuperar Contraseña</label>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit"> Ingresar </button>
                        <div class="text-center mt-3 border-bottom pb-3">
                            <p class="small text-muted">O iniciar sesión por:</p>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-instagram btn-block"><i
                                            class="mdi mdi-instagram"></i> Instagram</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-facebook btn-block"><i
                                            class="mdi mdi-facebook"></i> Facebook</button>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 d-flex align-item-center">
                            <a href="forgot-password.html">Olvidaste tu Contraseña?</a>
                            <span class="ml-auto"> Nuevo en Coffe&Lima? <a href="register.html">Únetenos</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
