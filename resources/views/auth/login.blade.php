@extends('layouts.app')

@push('scripts.header')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush

@section('content')
<div class="wrapper">
    <div class="row">
    <div class="col-left">
        <img class="logo" src="/images/Africa picture.png" alt="" />
        <h2>BIENVENUE!</h2>
    </div>
    <div class="col-right">
       
        <div class="connection-container">
        <div>
            <form method="POST" action="/login">
            <input type="hidden" name="_token" :value="csrf_token">
            <h3>CONNECTION</h3>

            <div class="form-group">

                <label for="email" >Adresse email</label>

                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                <span class="invalid-feedback" role="alert">
                <strong></strong>
                </span>
            
            </div>

            <div class="form-group">
                <label for="password" >Mot de passe</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>

            <div id="formcheck" class="form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                <label class="form-check-label" for="remember">
                    Garder ma session active
                </label>
            </div>

            <button type="submit" class="btn-connection">CONNECTION</button>
            <div class="forgot-password">
                <a href="password/reset">Mot de Passe Oublie</a>
            </div>
            </form>
            <div class="line-heading">
            <span>OU</span>
            </div>
            <div class="social-connection-container">
            <button class="btn-connection-google">CONNECTION GOOGLE</button>
            <button class="btn-connection-fb">CONNECTION FACEBOOK</button>
            <p class="forgot-password">Pas encore de compte?</p>
            <a class="registration" href="{{ route('register') }}">INSCRIPTION</a>
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
