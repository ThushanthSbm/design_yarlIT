<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        h1{
            color:blue;
        }
        .active{
            background: red;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr height="100" style="background: red">
            <td colspan="2">Header</td>
        </tr>
        <tr height="400">
            <td width="20%" style="background: yellow">
                <ul>
                    <li class="{{ Request::is('/')?'active':''}}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('/about')?'active':''}}"><a href="{{ url('/about')}}">About</a></li>
                    <li class="{{ route('home') }}"><a href="{{ url('/')}}">Home</a></li>
                    <li class="{{ route('about') }}"><a href="{{ url('/about')}}">About</a></li>
                    <li class="{{ route('student') }}"><a href="{{ url('/student')}}">Create Student</a></li>
                    <li class="{{ route('students.index') }}"><a href="{{ url('/students')}}">Student</a></li>
                    <li class="{{ url('/') }}"><a href="{{ url('/')}}">Home</a></li>
                </ul>
            </td>
            <td>
                @yield('content')
            </td>
        </tr>
        <tr height="100" style="background: #ccc">
            <td colspan="2">footer</td>
        </tr>
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@stack('scripts')

</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @yield('content')
    </body>
    <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            alert('test');
        });
    </script>

@stack('scripts')
</html> -->