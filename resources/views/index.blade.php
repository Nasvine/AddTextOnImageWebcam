<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</head>

<body>


    <div class="container">
        <h1 class="text-center">Mes photos</h1>


        <table class="table table-success table-striped">
            <thead>
    
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom de l'image</th>
                    <th scope="col">Emplacement</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            @foreach ($photo as $k=>$pho )
            <tbody>
                <tr>
                    <th scope="row">{{$k + 1}}</th>
                    <td>{{$pho->name}}</td>
                    <td>{{$pho->path}}</td>
                    <td><img src="image/{{$pho->name}}" width="200px" height="200px" alt="Image"></td>
                    
                  </tr>
                </tbody>  
                @endforeach
        </table>

        <img src="storage/image/image.png" alt="">
 <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>