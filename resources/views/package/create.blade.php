
@extends('layouts.app')

@section('content')
@csrf
<!--packageorenvelop-form--><!--/packageorenvelop-form-->
<div class="container">
    <form action="/package" enctype='multipart/form-data' method="post">
      @csrf
      <h4>AJOUTER UN PACKET OU ENVELOP</h4>
        <div class="form-row">

            <div class="form-group col-md-6">

                <div class="form-group">
                    <label for="length" class="col-md-4 col-form-label text-md-right">LENGTH</label>

                    <input id="length" type="text" class="form-control @error('length') is-invalid @enderror" name="length" value="{{ old('length') }}" required autocomplete="length" autofocus>

                    @error('length')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

            </div>

            <div class="form-group col-md-6">

                <div class="form-group">
                    <label for="width" class="col-md-4 col-form-label text-md-right">WIDTH</label>

                    <input id="width" type="text" class="form-control @error('width') is-invalid @enderror" name="width" value="{{ old('width') }}" required autocomplete="width" autofocus>

                    @error('width')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                
            </div>
   
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">

                <div class="form-group">
                    <label for="length" class="col-md-4 col-form-label text-md-right">HEIGHT</label>

                    <input id="length" type="text" class="form-control @error('length') is-invalid @enderror" name="length" value="{{ old('length') }}" required autocomplete="length" autofocus>

                    @error('length')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

            </div>

            <div class="form-group col-md-6">

                <div class="form-group">
                    <label for="width" class="col-md-4 col-form-label text-md-right">WEIGHT</label>

                    <input id="width" type="text" class="form-control @error('width') is-invalid @enderror" name="width" value="{{ old('width') }}" required autocomplete="width" autofocus>

                    @error('width')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                
            </div>

            
            
        </div>
        
     <button type="submit" class="btn btn-primary btn-block" style= "width: 300px;"> Enregistrer </button>   
    </form>

</div>



@endsection  

