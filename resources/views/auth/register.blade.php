@extends('layouts.app')

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush

@section('content')
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

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
</div-->


<div class="wrapper">
    <div class="row">
      <div class="col-left background-2">
        <img class="logo" src="./assets/imgscomppages/Africa picture.png" alt="africa picture" />
        <h2>BIENVENUE!</h2>
      </div>
      <div class="col-right">
       
        <div class="connection-container connection-container-fluid">
          <div>
            <form method="POST" action="/register">
              <input type="hidden" name="_token" :value="csrf_token" >
              <h3>INSCRIPTION</h3>

              <div class="form-group">
                <label for="name">NOM COMPLET</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror 
              </div>
              
              <div class="form-group">
                <label for="email">Adresse email</label>
                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">
              </div>

              <div class="form-group">
                <label for="telephone">Telephone</label>
                <input id="telephone" type="tel" class="form-control" name="telephone" required autocomplete="telephone">
              </div>

              <div class="form-group">
                <label for="adresse">Adresse</label>
                <input id="adresse" type="text" class="form-control" name="adresse" required autocomplete="adresse" autofocus>
              </div>

              <div class="form-group">
                <label for="date">DATE DE NAISSANCE</label>
                <v-date-picker v-model="date">
                  <template v-slot="{ inputValue, inputEvents }">
                    <input
                      class="form-control bg-white border px-2 py-1 rounded"
                      :value="inputValue"
                      v-on="inputEvents"
                      id="date"
                      name="date"
                      type="text"
                      required autocomplete="date" autofocus
                    />
                  </template>
                </v-date-picker>
              </div>

              <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirmer le mot de passe</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <button type="submit" class="btn-connection">INSCRIPTION</button>
              
            </form>
          
            <div class="line-heading">
              <span>OU</span>
            </div>
            <div class="social-connection-container">
              <button class="btn-connection-google">INSCRIPTION GOOGLE</button>
              <button class="btn-connection-fb">INSCRIPTION FACEBOOK</button>
              <p class="forgot-password">Vous avez déjà un compte?</p>
              <a class="registration" href="{{ route('login') }}">CONNECTEZ VOUS</a>
            </div>
          </div>
          <div class="social-container">
            <div class="line-heading">
              <span>FOLLOW US</span>
            </div>

            <div class="social-icon-container">
              <a href="#" class="social-icn-fb"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="#" class="social-icn-twitter"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="#" class="social-icn-google"
                ><i class="fab fa-google-plus-g"></i
              ></a>
              <a href="#" class="social-icn-pinterest"
                ><i class="fab fa-pinterest-p"></i
              ></a>
              <a href="#" class="social-icn-linkedin"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <span>COLLECTANDCLICK.AFRICA</span>
      <span>ALL RIGHTS RESERVED.</span>
    </footer>
  </div>
  
@endsection
