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
    
<table class="table table-dark table-striped">
<tr>
    <td>codigo</td>
    <td>serie</td>
    <td>Nume_corre</td>
    <td>fec_rec</td>
    <td>igv</td>
    <td>subtotal</td>
    <td>total</td>



</tr>
  @foreach($dato  as $value)
        <tr>
            <td>{{$value->idcompra}}</td>
            <td>{{$value->serie}}</td>
            <td>{{$value->num_corre}}</td>
            <td>{{$value->fec_rec}}</td>
            <td>{{$value->igv_tota}}</td>
            <td>{{$value->subtotal}}</td>
            <td>{{$value->total}}</td>



    </tr>
@endforeach
</table>
</body>
</html>