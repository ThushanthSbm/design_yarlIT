<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
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
                <li><a href="{{url('/')}}">home</a></li>
            </ul></td>
        <td>
            @yield('content')
        </td></tr>
        <tr height="100" style="background:red">
    <td colspan="2">footer</td></tr>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('scripts')
</body>
</html>