<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h2>Add Product</h2>
  <form action="{{ route('addProd') }}" method="post">
    @csrf
    <table>
      <tr>.2
        <td>Name</td>
        <td><input type="text" name="name" /></td>
      </tr>
      <tr>
        <td>Category</td>
        <td>
          <select name="category">
            @foreach ($cat as $c)
            <option value="{{$c->id}}">{{$c->nom}}</option>
            @endforeach
          </select>
        </td>
      </tr>
      <tr>
        <td>Description</td>
        <td>
          <textarea name="descr" id="" cols="30" rows="10"></textarea>
        </td>
      </tr>
      <tr>
        <td>Type</td>
        <td>
          Importe : <input type="radio" name="type" value="I" /> Local :
          <input type="radio" name="type" value="L" />
        </td>
      </tr>
      <tr>
        <td>Price</td>
        <td><input type="number" name="price" /></td>
      </tr>
      <tr>
        <td>Date</td>
        <td><input type="date" name="date" /></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Add" />
          <input type="reset" value="Cancel" />
        </td>
        <td></td>
      </tr>
    </table>
  </form>
</body>

</html>