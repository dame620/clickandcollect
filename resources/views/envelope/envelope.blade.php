@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                
                <div class="card-header bg-primary text-light">{{ __('Créer un nouveau envelope') }}</div>
                
                <div class="card-body">
                    <envelop-component></envelop-component>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection