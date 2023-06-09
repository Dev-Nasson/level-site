@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-center mt-2">
                        <h4>Altere a sua senha</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="post">@csrf


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    Email
                                </label>
                                <div class="col-md-6">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ request('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Nova senha
                                </label>
                                <div class="col-md-6">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">
                                    Confirmar senha
                                </label>
                                <div class="col-md-6">
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror">
                                    @error('password_confirmation')

                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="token" value="{{ request()->route('token') }}" >
                            
                            <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Criar nova senha</button>

                            </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
