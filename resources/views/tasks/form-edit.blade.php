@csrf
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">

  <title>Editar</title>
</head>

<body>

  <div>
    <h1 id="titulo">Editar {{ $task->name }}</h1>
    <p id="subtitulo">Edite as informações</p>
    <br>
  </div>

  <form>

    <fieldset class="grupo">
      <div class="campo">
        <label for="name"><strong>Nome da Tarefa</strong></label>
        <input type="text" name="name" id="name" value={{ $task->name }} required>
      </div>

      <div class="campo">
        <label for="cost"><strong>Custo (R$)</strong></label>
        <input type="text" name="cost" id="cost" value={{ $task->cost }} required>
      </div>

      <div class="campo">
        <label for="date_limit"><strong>Data Limite</strong></label>
        <input type="date-picker" name="date_limit" id="date_limit" value={{ $task->date_limit }} required>
      </div>
    </fieldset>

    <button class="botao" type="submit" onsubmit="">Concluído</button>

  </form>

</body>

</html>
