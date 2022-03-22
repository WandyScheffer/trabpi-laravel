@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/task/list.css') }}" rel="stylesheet">
@endpush

@section('content')

  <h1 class='title'> Listagem de tarefas </h1>
  
  <table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>IMAGEM</th>
      <th>TITULO</th>
      <th>DESCRIÇÃO</th>
      <th>PRIORIDADE</th>

      @auth
      <th style="text-align: center" >AÇÕES</th>
      @endauth

    </tr>
    @for($i = 0; $i < count($tasks); $i++)
      <tr>
        <td> {{$tasks[$i]->id}} </td>
        <td> 
          @if(isset($tasks[$i]->file))
            <img src='{{ url("uploads/{$tasks[$i]->file}") }}'  height="42" width="50"> 
          @else
            <i>
              {{ __('Sem imagem') }}
            </i>
          @endif
        </td>
        <td> {{$tasks[$i]->title}} </td>
        <td> {{$tasks[$i]->description}} </td>
        <td> {{$tasks[$i]->priority}} </td>

        @auth
        <td style="text-align: center">
          {!! Form::open(['route' => ['remove', $tasks[$i]->id], 'class' => 'form', 'method' => 'delete']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger', 'style' => 'color: white']) !!}
            <button class="btn btn-primary" >
              <a
                style="color: white"
                href="{{ route('edit', $tasks[$i]->id) }}"
              > 
                {{ __('Editar') }} 
              </a>
            </button>
          {!! Form::close() !!}
          
          
        </td>
        @endauth
      </tr>
    @endfor
  </table>

  {{ $tasks->links() }}

@endsection