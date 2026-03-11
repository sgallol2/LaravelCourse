@extends('layouts.app')
@section("title", 'Pagina de demonios - Crear')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Crea un demonio</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('demon.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Ingresa nombre" name="name" value="{{ old('name') }}" />
              <input type="number" class="form-control mb-2" placeholder="Ingresa nivel de sangre" name="blood_level" value="{{ old('blood_level') }}" />
              <select class="form-control mb-2" name="hierarchy">
                <option value="">Selecciona jerarquía</option>
                <option value="rey" {{ old('hierarchy') == 'rey' ? 'selected' : '' }}>Rey</option>
                <option value="luna" {{ old('hierarchy') == 'luna' ? 'selected' : '' }}>Luna</option>
                <option value="común" {{ old('hierarchy') == 'común' ? 'selected' : '' }}>Común</option>
              </select>
              <input type="submit" class="btn btn-primary" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endSection