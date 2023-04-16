<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <h3>Add Category</h3>
    <form action="{{route('catUpdate',['id' => $cat->id])}}" method="post">
      @csrf
      <tr>
        <td>
          Name :
        </td>
        <td>
          <input type="text" name="name" value="{{$cat->nom}}">
        </td>
      </tr>
      <tr>
        <td><input type="submit" value="Update"></td>
        <td><input type="reset" value="Cancel"></td>
      </tr>
    </form>
  </table>
</body>

</html>