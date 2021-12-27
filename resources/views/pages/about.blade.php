@extends('layouts.master')
@section('content')
<h1>Welcome about page</h1>
<form action="#" id="frm-create">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname">
    <br><br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname">
<br><br>
<label for ="gender">Gender:</label>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<br><br>
<label for="grade">Select Grade</label>

<select name="grade" id="grade">
  <option value="10A">10A</option>
  <option value="10B">10B</option>
  <option value="10C">10C</option>
  <option value="10D">10D</option>
</select>
<br><br>
<label for="address">Address</label>
<textarea name="address" id="address" cols="30" rows="5"></textarea>
<br><br>
<label for="birthday">Birthday:</label>
<input type="date" id="dob" name="birthday" >
<br><br>
<!-- <label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
<br><br> -->
<label for="phone">Enter your phone number:</label>
<input type="phone" id="pno" name="phone" >
<br><br>

<label for="subject">Subjects</label><br>
<input type="checkbox" id="Science" name="subject[]" value="Science">
<label for="Science"> Science</label>
<input type="checkbox" id="Tamil" name="subject[]" value="Tamil">
<label for="Tamil"> Tamil</label>
<input type="checkbox" id="English" name="subject[]" value="English">
<label for="English"> English</label>
<br><br>
    <input type="submit">
</form>
@push('scripts')
<script>
    $(document).ready(function(){
    alert('hi');
    });
</script>
@endpush
@endsection