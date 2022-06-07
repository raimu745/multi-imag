<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
  <table class="table table-bordered border-primary">
    <tr>
        <th>#id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Images</th>
    </tr>
    @php
        $i= 1;
        @endphp 
    @foreach($user as $item )
    <tr>
        <td>{{$i++}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>
        @foreach($item->images as $list )
            <span><img src="{{asset('uploads/'.$list->file)}}" width="70px" height="70px" alt="image"></span>
            @endforeach
        </td>
    </tr>
    @endforeach
 </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>