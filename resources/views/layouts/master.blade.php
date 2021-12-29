<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Home</title>
   
    <style>
        h1{
            color:blue;
        }
        .active{
            background:red;
        }
    </style>
</head>
<body>
    <table>
        <tr height="100" style="background:red">
            <td colspan="2">Header</td>
        </tr>
        <tr height="400" >
            <td width="20%" style="background:blue"><ul>
                <li class="{{Request::is('/')?'active':''}}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{Request::is('about')?'active':''}}"><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('student')}}">Student</a></li>
                <li><a href="{{url('/')}}">home</a></li>
            </ul></td>
        <td>
            @yield('content')
        </td></tr>
        <tr height="100" style="background:red">
    <td colspan="2">footer</td></tr>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<!-- <script>alert('hi');</script> -->
@stack('scripts')
</body>
</html>