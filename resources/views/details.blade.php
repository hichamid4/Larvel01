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

  <h4 class="display-4 text-center mt-2 mb-5">
    Product Details
  </h4>

  <table class="table w-25 mx-auto mt-2 border border-left-1">
    <tr>
      <td class="table-dark">id</td>
      <td>{{$prod->id}}</td>
    </tr>
    <tr>
      <td class="table-dark">Name</td>
      <td>{{$prod->name}}</td>
    </tr>
    <tr>
      <td class="table-dark">description</td>
      <td>{{$prod->descr}}</td>
    </tr>
    <tr>
      <td class="table-dark">Type</td>
      <td>@if ($prod->type == 'I')
        echo "Import"
        @else
        echo "Local"
        @endif</td>
    </tr>
    <tr>
      <td class="table-dark">Price</td>
      <td>{{number_format($prod->price,2,',',' ') }} Dh</td>
    </tr>
    <tr>
      <td class="table-dark">Date</td>
      <td>{{$prod->date}}</td>
    </tr>
    <tr>
      <td class="table-dark">Image</td>
      <td>@if ( $prod->path == "" || $prod->path == null)
        echo "There's No image for this Product"
        @else
        <img src="{{$prod->path}}" alt="" srcset="">
        @endif
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <a href="{{ route('index') }}" type="button" class="btn btn-info w-100">All Products</a>
      </td>
    </tr>
  </table>

</body>

</html>