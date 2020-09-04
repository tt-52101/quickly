@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-info">
                <img src="/storage/{{ setting('site.logo_dark') }}" class="card-img-top" alt="logo">
                <div class="dropdown-divider"></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="form-group">
                        @csrf

                        <div class="form-group">
                            <label for="role">{{ __('Registrarme como') }}</label>
                            <select name="role_id" id="role" class="form-control">
                                <option value="0"></option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{ $role->display_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Nombre:') }}</label>
                            
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Correo Eléctronio:') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Contraseña:') }}</label>
                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirme su contraseña:') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <div class="is-untouched is-pristine av-invalid custom-checkbox custom-control">
                                <input type="checkbox" name="customCheckbox" required id="customCheckbox" class="custom-control-input" value="false">
                                <label class="custom-control-label" for="customCheckbox">Acepto los términos y condiciones</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col">
                                {{ __('Registrar') }}
                            </button>

                            <button onclick="history.back();" class="btn btn-secondary col mt-2">
                                {{ __('Volver') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
