@extends('layouts.app')
@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                
                <div class="card-header bg-primary text-light"></div>
                
                <div class="card-body">
                    
                    <infoforshipmentdhlenvelopeComponent></infoforshipmentdhlenvelopeComponent>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection