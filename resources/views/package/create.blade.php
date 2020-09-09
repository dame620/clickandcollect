
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                
                <div class="card-header bg-primary text-light">{{ __('Créer un nouveau paquet') }}</div>
                
                <div class="card-body">
                    <package-form path="{{ route('package.store') }}"/>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

