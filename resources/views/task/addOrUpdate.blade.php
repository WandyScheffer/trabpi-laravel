@extends('layouts.app')

@push('styles')
  <link href="{{ asset('css/task/addOrUpdate.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="addOrUpdateContent">
    <h1 class='title'> Criar tarefas </h1>
  
    @if(isset($errors) && count($errors) > 0)
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p> {{$error}} </p>
          @endforeach
      </div>
    @endif
  
    @if (isset($task))
        {!! Form::model($task, ['route' => ['update', $task->id], 'class' => 'form', 'method' => 'put']) !!}
    @else
        {!! Form::open(['route' => 'insert', 'class' => 'form', 'enctype'=>'multipart/form-data']) !!}
    @endif
  
    <div class="form-group">
      {!! Form::label('title', 'Titulo: ') !!}
      {!! Form::text('title', null, ['class' => 'form']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('priority', 'Prioridade: ') !!}
      {!! Form::select('priority', ['high' => 'high', 'medium' => 'medium', 'low' => 'low'], null, ['class' => 'form']) !!}
    </div>
    {!! Form::label('description', 'Descrição: ') !!}
    <div class="form-group">
      {!! Form::textarea('description', null, ['class' => 'form']) !!}
    </div>
    <div class="form-group">
      {!! Form::file('file', ['class' => 'form']) !!}
    </div>
    {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
  
         
          
    {!! Form::close() !!}

  </div>

@endsection