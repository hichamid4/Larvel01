<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <a class="btn btn-primary m-2" href="{{ route('categoryForm') }}" role="button">Add Category</a>


  <table class="table table-dark table-striped">
    <tr>
      <th width="50">#</th>
      <th>Name</th>
      <th>Actions</th>
    </tr>

    @foreach ($cat as $c )
    <tr>
      <td>{{$c->id}}</td>
      <td>{{$c->nom}}</td>
      <td>
        <a href="{{ route('editForm',['id'=>$c->id] ) }}"> <button>Edit</button> </a>
        <a href="{{ route('detail',['id'=>$c->id]) }}"> <button>Details</button> </a>
        <a href="{{ route('edit',['id'=>$c->id]) }}"> <button>Delete</button> </a>
      </td>
    </tr>
    @endforeach

  </table>
</body>

</html>