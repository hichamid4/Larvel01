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

  <a class="btn btn-primary m-2" href="{{ route('formcreate') }}" role="button">Add Product</a>


  <table class="table table-dark table-striped">
    <tr>
      <th width="50">#</th>
      <th>Name</th>
      <th>Description</th>
      <th>Type</th>
      <th>Category</th>
      <th width="100">Price</th>
      <th width="100">Date</th>
      <th>Actions</th>
    </tr>

    @foreach($products as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->name}}</td>
      <td>{{$p->descr}}</td>
      <td>@if ($p->type == 'L')
        Local
        @else
        Import
        @endif</td>
      <td>{{$p->Category->nom}}</td>
      <td>{{$p->price}}</td>
      <td>{{$p->date}}</td>
      <td>
        <a href="{{ route('del',['id'=>$p->id]) }}"> <button>Delete</button> </a>
        <a href="{{ route('detail',['id'=>$p->id]) }}"> <button>Details</button> </a>
        <a href="{{ route('edit',['id'=>$p->id]) }}"> <button>Edit</button> </a>
      </td>
    </tr>
    @endforeach

  </table>
</body>

</html>