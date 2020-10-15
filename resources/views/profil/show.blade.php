@extends('layouts.app')
@section('content')
@foreach ($user->packageorenvelops as $package)
<table class="table table-dark">
  <thead>
    <tr>
      <th>NUMERO PAQUET</th>
      <th>longueur</th>
      <th>poids</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $package->id }}</td>
      <td>{{ $package->height }}</td>
      <td>{{ $package->weight }}</td>
    </tr>
  </tbody>
</table>
@endforeach
@endsection
