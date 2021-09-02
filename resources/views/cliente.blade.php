<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body> 
<center>
<table class="table table-dark table-striped">
<tr>
    <td>codigo</td>
    <td>Apellido</td>
    <td>Nombre</td>
    <td>idDocumento</td>
    <td>sexo</td>

</tr>
  @foreach($dato  as $value)
        <tr>
            <td>{{$value->idcliente}}</td>
            <td>{{$value->apellido}}</td>
            <td>{{$value->nombre}}</td>
            <td>{{$value->iddocumento}}</td>
            <td>{{$value->sexo}}</td>

    </tr>
@endforeach
</table>

</center>
</body>
</html>