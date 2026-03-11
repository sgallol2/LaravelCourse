@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="text-center">
    
  <div class="mt-4">
    <a href="{{ route('demon.index') }}" class="btn btn-primary btn-lg">VER PARCIAL DEMONIOS</a>
</div>
@endsection
