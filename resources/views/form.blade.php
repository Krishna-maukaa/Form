<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
        <h1 class="text-center">Employee Form</h1>
        <form action="{{url('/')}}/register" method="post">
            @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>  
        <div class="form-group">
          <label for="">Department</label>
          <input type="text" name="dept" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div> 
        <div class="form-group">
          <label for="">City</label>
          <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div> 
        <button btn btn-primary>
            Submit
        </button>
        </form>
        
</body>
</html>