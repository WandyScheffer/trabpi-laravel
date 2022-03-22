@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
@endpush

@section('content')

  <div class="homeContent">
    <h1 class='title'>Bem vindo ao app "Your Tasks"!</h1>
    <p>Este app é um gerenciador genérico de tarefas, escolha no menu a ação que deseja realizar referente a sua tarefa :)</p>
  </div>



@endsection