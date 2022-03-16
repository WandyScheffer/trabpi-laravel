<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  @stack('styles')
  <title>Your Tasks</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="{{ asset('/') }}">Home</a></li>
      <li><a href="{{ asset('list') }}">Listar</a></li>
      <li><a href="{{ asset('insert') }}">Inserir</a></li>
      <li><a href="{{ asset('edit') }}">Editar</a></li>
      <li><a href="{{ asset('remove') }}">Excluir</a></li>
    </ul>
    <a href="{{ asset('login') }}">Login</a>
  </nav>
  <div class="baseContent">
    @yield('content')
  </div>
</body>
</html>