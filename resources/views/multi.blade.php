<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="col-md-2">

            </div>
            <div class="col-md-8">

            <form action="{{url('store')}}" method="POST" enctype="multipart/form-data">
  @csrf

            <div class="mb-3">
            <label  class="form-label">Your Name</label>
            <input type="text" class="form-control"  placeholder="Your Name" name="name">
            </div>
            <div class="mb-3">
            <label  class="form-label">Your Email</label>
            <input type="email" class="form-control"  placeholder="Your Email" name="email">
            </div>
            <div class="mb-3">
            <label  class="form-label">Your Password</label>
            <input type="password" class="form-control"  placeholder="Your Password" name="passsword">
            </div>
            

  <!--  -->
    <div class="mb-3">
  <label  class="form-label">Upload Image</label>
  <input class="form-control" type="file" name="file[]" >
  @error('file')
 <span class="text-danger">{{$message}}</span>
  @enderror
    </div>

    <div class="mb-3">
   <label  class="form-label">Upload Image</label>
   <input class="form-control" type="file" name="file[]" >
   @error('file')
 <span class="text-danger">{{$message}}</span>
  @enderror
    </div>

    <div class="mb-3">
   <label  class="form-label">Upload Image</label>
   <input class="form-control" type="file" name="file[]" >
   @error('file')
 <span class="text-danger">{{$message}}</span>
  @enderror
    </div>

    <div class="mb-3">
   <label  class="form-label">Upload Image</label>
   <input class="form-control" type="file" name="file[]" >
   @error('file')
 <span class="text-danger">{{$message}}</span>
  @enderror
    </div>
  
    <input type="submit" value="save" class="btn btn-primary">
    </form>
                
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>