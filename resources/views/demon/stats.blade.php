@extends('layouts.app')
@section('title', 'Pagina de demonios- Estadísticas')
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">Demonios por Jerarquía</h5>
        </div>
        <div class="card-body">
          <ul class="list-group">
            @foreach ($viewData["stats"] as $stats)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong>{{ ucfirst($stats->hierarchy) }}</strong>
                <span class="badge bg-primary rounded-pill">{{ $stats->total }}</span>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header bg-danger text-white">
          <h5 class="mb-0">Nivel de Sangre Máximo</h5>
        </div>
        <div class="card-body text-center">
          <h1 class="display-3 text-danger">{{ $viewData["maxBloodLevel"] ?? 0 }}</h1>
          <p class="text-muted">Nivel de sangre más alto registrado</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection