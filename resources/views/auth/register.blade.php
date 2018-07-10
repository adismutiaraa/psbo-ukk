@extends('layouts.atas')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Register') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nrp" class="col-md-4 col-form-label text-md-right">{{ __('NRP') }}</label>

                            <div class="col-md-6">
                                <input id="nrp" type="text" class="form-control{{ $errors->has('nrp') ? ' is-invalid' : '' }}" name="nrp" value="{{ old('nrp') }}" required autofocus>

                                @if ($errors->has('nrp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nrp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departemen" class="col-md-4 col-form-label text-md-right">{{ __('Departemen') }}</label>

                            <div class="col-md-6">
                                <input id="departemen" type="text" class="form-control{{ $errors->has('departemen') ? ' is-invalid' : '' }}" name="departemen" value="{{ old('departemen') }}" required autofocus>

                                @if ($errors->has('departemen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('departemen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fakultas" class="col-md-4 col-form-label text-md-right">{{ __('Fakultas') }}</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text" class="form-control{{ $errors->has('fakultas') ? ' is-invalid' : '' }}" name="fakultas" value="{{ old('fakultas') }}" required autofocus>

                                @if ($errors->has('fakultas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fakultas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" required autofocus>

                                @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telepon" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control{{ $errors->has('telepon') ? ' is-invalid' : '' }}" name="telepon" value="{{ old('telepon') }}" required autofocus>

                                @if ($errors->has('telepon'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <p></p>
                        <p></p>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
