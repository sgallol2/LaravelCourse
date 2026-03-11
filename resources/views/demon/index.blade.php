@extends('layouts.app')
@section('title', 'Pagina de demonios')
@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
    <div class="col-lg-6 col-md-8 col-sm-10">
      <div class="d-grid gap-4">
        <a href="{{ route('demon.create') }}" class="btn btn-deep-blue btn-lg py-4 fs-4 fw-bold">
          <i class="bi bi-plus-circle me-2"></i>Crear Demonio
        </a>
        <a href="{{ route('demon.list') }}" class="btn btn-mustard btn-lg py-4 fs-4 fw-bold">
          <i class="bi bi-list-ul me-2"></i>Listar demonios
        </a>
        <a href="{{ route('demon.stats') }}" class="btn btn-mustard btn-lg py-4 fs-4 fw-bold">
          <i class="bi bi-list-ul me-2"></i>Consultar Estadisticas de Demonios
        </a>
      </div>
    </div>
  </div>
</div>
@endsection