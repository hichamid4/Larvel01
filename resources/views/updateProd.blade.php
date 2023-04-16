<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <h2>Update Product</h2>
  <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{$prod->id}}" name="id">
    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{$prod->name}}" /></td>
      </tr>
      <tr>
        <td>Description</td>
        <td>
          <textarea name="descr" id="" cols="30" rows="10">{{$prod->descr}}</textarea>
        </td>
      </tr>
      <tr>
        <td>Type</td>
        <td>
          @if ($prod->type == "I")
          Importe : <input type="radio" name="type" value="I" checked />
          Local : <input type="radio" name="type" value="L" />
          @else
          Importe : <input type="radio" name="type" value="I" />
          Local : <input type="radio" name="type" value="L" checked />
          @endif

        </td>
      </tr>
      <tr>
        <td>Category</td>
        <td>
          <select name="category">
            @foreach ($cat as $c)
            <option value="{{$c->id}}" @if ($c->id == $prod->categorie_id)
              selected
              @endif
              >{{$c->nom}}</option>
            @endforeach
          </select>
        </td>
      </tr>
      <tr>
        <td>Price</td>
        <td><input type="number" name="price" value="{{$prod->price}}" /></td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input type="date" name="date" value="{{$prod->date}}" /></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Update" />
          <input type="reset" value="Cancel" />
        </td>
        <td></td>
      </tr>
    </table>
  </form>
</body>

</html>