@extends('layouts.app')
@section('title','Pagina de demonios - Listado')
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Nivel de Sangre</th>
          <th>Jerarquía</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["demons"] as $demon)
        <tr>
          <td>{{ $demon->getId() }}</td>
          <td>{{ $demon->getDisplayName() }}</td>
          <td>{{ $demon->getDisplayBloodLevel() }}</td>
          <td>{{ $demon->getHierarchy() }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection