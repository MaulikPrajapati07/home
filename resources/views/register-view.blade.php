<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  tr,th,td{
    border: 1px solid black;

   }
   th{
    padding:15px;
    border: 2px solid black;
   }
   td{
    padding:7px;
   }
   table{
    margin:10px;
   }
   .con{
        background-color: gray;
        padding: 10px;
        font-size: 20px;
        
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
    .hover.a{
        color:red;
    }
    .button{
        background-color: darkslategray;
        color:white;
    }
    a{
        margin-left:59%;
        
    }
    .btn-primary{
    background-color: #f44336;
    border: none;
    color: white;
    padding: 5px -25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 9px;
    cursor: pointer;
    border-radius: 2px;
}
.btn-primary1{
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 5px -25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px -1px;
    cursor: pointer;
    border-radius: 2px;
}
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

    </style>
<body>
  
<div class="con" id="">
       
           
       <a class="nav-link" href="{{url('/')}}" style="color: black">home</a>
  
  
       <a class="nav-link1" href="{{url('/register')}}" style="color: black">register</a>
  
  
       <a class="nav-link2" href="{{url('register/view')}}" style="color: black">customer</a>
</div>
  
    <div class="container">
      
    <table class="table" style="border: 1px solid black;">
        
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
                <th>dob</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
               
                <td>@if($customer->gender == "m")
                    Male
                    @elseif($customer->gender == "f")
                    female
                    @else
                    other
                    @endif
                </td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->country}}</td>
                <td>{{$customer->dob}}</td>
               
                <td>
                    @if($customer->status == "1")
                    active
                    @else
                    inactive
                    @endif
                </td>
                <td>
                    <!-- <a href="{{'/register/delete'}}/{{$customer->customer_id}}"><button class="btn btn-primary1">delete</button></a> -->
                    <a href="{{route('register.delete', ['id' => $customer->customer_id])}}"><button class="btn btn-primary1">delete</button></a>
                    <a href="{{route('register.edit', ['id' => $customer->customer_id])}}"><button class="btn btn-primary">Edit</button></a>
                </td>
            </tr>
            @endforeach
           
        </tbody>
        
    </table>
    <a href="{{route('register.user')}}">
    <button class="button" >add customer</button>
    </a>
    </div>
    </form>
</body>
</html>