<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap-css-link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <h1>Image CRUD: in Laravel</h1><br>
        <form action="/employee" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Post</label>
                <input type="text" name="post" class="form-control" placeholder="enter post">
            </div>
            <label>Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <Input type="file" name="image" class="custom-file-input">
                    <!--<label class="custom-file-label">Choose file</label>-->
                </div>
            </div>
            <br> 
            <button type="submit" name= "submit" class="btn btn-primary">Save Data</button>
            
        </form>
    </div>
    </div>
</body>
</html>