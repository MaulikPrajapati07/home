

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        background-color: gray;
        padding: 10px;
        font-size: 20px;;
        
    }
    a{
        text-decoration: none;
    }
    .nav-link1{

margin-left:100px;
    }
    .nav-link2{

margin-left:100px;
    }
    .nav-link{

margin-left:100px;
    }
</style>
<body>
    <div class="container" id="">
                <a class="nav-link" href="{{url('/')}}" style="color: black">home</a>
                <a class="nav-link1" href="{{url('/register')}}" style="color: black">register</a>
                 <a class="nav-link2" href="{{url('register/view')}}" style="color: black">customer</a>
    </div>
       
</body>
</html>
