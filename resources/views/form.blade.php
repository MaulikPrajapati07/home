<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #c4c4d5;
    }
    .container{
        
        margin :2px;
    }
    .text-container{
        margin:10px;
        margin-left: 364px;
        
    }
    .form-group{
    margin:22px;
    width: 80%;
    margin-left: 38px;
    }
    input[type="text"]{
        width: 80%;
    padding: 7px;
    margin: 1px;
    margin-top: 3px;
    border-block-color: green;
    }
    input[type="email"],[type="password"]{
        width: 80%;
    padding: 7px;
    margin: 1px;
    margin-top: 3px;
    border-block-color: green;

    }
    button{
        margin-left:10px;
        width:66%;
        padding: 7px;
    margin: 1px 38px 1px;
    border-block-color: red;
    color:darkblue;

    }
    .m{
        color:darkblue;

    }
       .con{
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
    .lable{
        margin-left:40px;
        font-size: 23px;

    }
    .m1{
       margin-left:35%;

    }
</style>
<body>
<div class="con" id="">
       
           
       <a class="nav-link" href="{{url('/')}}" style="color: black">home</a>
  
  
       <a class="nav-link1" href="{{url('/register')}}" style="color: black">register</a>
  
  
       <a class="nav-link2" href="{{url('register/view')}}" style="color: black">customer</a>
</div>
    <form action="{{url('register')}}" method="post">
    <h3 class="m1">register page</h3>
        @csrf
        <!-- <pre>
        @php
        print_r($errors->all()); 
        @endphp
        </pre> -->
    <div class="container">   
        <x-input type="text" name="name" lable="name"/>
        <x-input  type="email" name="email" lable="email"/>
        <x-input  type="password" name="password" lable="password"/>
        <x-input  type="text" name="country" lable="country"/>
        <x-input  type="text" name="state" lable="state"/>
        <x-input  type="text" name="address" lable="address"/>  

        <lable class="lable">gender.</lable>
        
        <x-input  type="radio" class="m1" name="gender" lable="male" dvalue="m"/>
        <x-input  type="radio" class="m1" name="gender" lable="female" dvalue="f"/>
        <x-input  type="radio" class="m1" name="gender" lable="other" dvalue="o"/>
        <x-input  type="date" name="dob" lable="country"/>
       

       
        

        <!-- <div class="form-group">
            <lable class="m">email</lable><br>
        <input  type="email" name="email" id="" placeholder="enter your email"  value="{{old('email')}}"/><br>
        <span class="text-denger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        </div>

        <div class="form-group">
            <lable class="m">password</lable><br>
        <input  type="password" name="password" id="" placeholder="enter your password" /><br>
        <span class="text-denger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        </div>

        <div class="form-group">
            <lable class="m">Confirm password</lable><br>
        <input  type="password" name="password_confirm" id="" placeholder="enter confirm password" /><br>
        
        <span class="text-denger">
            @error('password_confirm')
            {{$message}}
            @enderror
        </span>
        </div> -->
        <button class="btn btn-primary" type="submit" name="submit" value="submit">submit</button>
    </div>
    </form>
</body>
</html>