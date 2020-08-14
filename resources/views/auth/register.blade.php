@extends('layouts.main')

@section('content')
<div class="mt-20 ml-20">
    <body class="bg-grey-lighter h-screen font-sans" >
        <div class="container mx-auto h-full flex justify-center items-center">
             <div class="w-1/3">
                 <div class="col-md-8">
                     <div class="card">
                        <div class="card-header ml-20 text-lg font-bold mb-8">Register</div>

                             <div class="card-body">
                             <form method="POST" action="{{ route('register') }}">
                              @csrf

                                 <div class="form-group row">
                                 <label for="name" class="col-md-4 col-form-label text-md-right text-lg font-bold mb-2">{{ __('Name') }}</label>

                                 <div class="col-md-6">
                                 <input id="name" type="text" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-lg font-bold mb-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-lg font-bold mb-2">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-lg font-bold mb-2">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-20 offset-md-40">
                                <button type="submit" class="btn btn-secondary btn-lg shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-non">
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
    </body>
</div>
@endsection
