@extends('layouts.default')

@section('content')
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="{{ url('home') }}">
                                <span><img src="{{ asset('storage/'.setting('site.logo')) }}" alt="" height="18"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">
                            <div class="text-center">
                                <h1 class="text-error">4<i class="fa fa-frown-o"></i></i>4</h1>
                                <h4 class="text-uppercase text-danger mt-3">Página no encontrada</h4>
                                <p class="text-muted mt-3">Parece que te has equivocado de rumbo. No te preocupes ... nos pasa a los mejores. Aquí tienes un pequeño consejo que podría ayudarte a retomar el rumbo.</p>

                                <a class="btn btn-info mt-3" href="{{ url('home') }}"><i class="fa fa-reply"></i> Voler al inicio</a>
                            </div>
                        </div> <!-- end card-body-->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2019 - 2021 Technovations B&C S.A.S - technovations.com
    </footer>
@endsection