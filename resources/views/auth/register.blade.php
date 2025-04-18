@extends("front-office.layouts.main")
@section("body")
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 text-white mb-3">S’enregistrer</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">S’enregistrer</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col mt-n19">
                    <div class="card shadow-lg">
                        <div class="row gx-0 text-center">
                            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/tm3.jpg">
                            </div>
                            <!--/column -->
                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <h2 class="mb-3 text-start">S’inscrire à Mon rendez-vous</h2>
                                    <p class="lead mb-6 text-start">L’inscription prend moins d’une minute..</p>
                                    <!-- Formulaire d'inscription -->
                                    <form class="text-start mb-3" method="POST" action="{{ route('register') }}">
                                        <input type="hidden" name="role" value="{{ $role }}">
                                        @csrf
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" placeholder="Name" id="loginName" name="name" value="{{ old('name') }}">
                                            <label for="loginName">{{ __('Name') }}</label>
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="email" value="{{ old('email') }}">
                                            <label for="loginEmail">Email</label>
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="password">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPassword">Mot de passe</label>
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm" name="password_confirmation">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPasswordConfirm">Confirmer le mot de passe</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">S'enregistrer</button>
                                    </form>
                                    <!-- /form -->
                                    <p class="mb-0">Vous avez déjà un compte? <a href="{{ route('login') }}" class="hover">Connexion</a></p>
                                    <div class="divider-icon my-4">ou</div>
                                    <nav class="nav social justify-content-center text-center">
                                        <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                                        <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                                    </nav>
                                    <!--/.social -->
                                </div>
                                <!--/div -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

@endsection
