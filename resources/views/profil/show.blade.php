@extends('layouts.app')
@section('content')
<h2>BIENVENUE {!!  $user->name !!} dans ton espace Client</h2>
<!--$userconnected=Auth::user()-->
@foreach( $user->packageorenvelops as $pack)
  <div class="container">
  <table class="table table-dark">
  <thead>
    <tr>
        <th>
        id
        </th>
        
        <th>
        width
        </th>
        <th>
        weight
        </th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>{{ $pack->id }}</td>
    <td>{{ $pack->width }}</td>
    <th>{{ $pack->weight }}</th>
    </tr>
  </tbody>
  </table>
  </div>
@endforeach
@endsection
