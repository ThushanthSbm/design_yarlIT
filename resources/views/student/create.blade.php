@extends('layouts.master')
@section('content')
<h1 style="text-align: center">Student Create</h1>
<div class="container">
    <form action="{{route('students.store')}}" method="post" id="student-create">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="lname">Last Name</label>
        <input type="text" id="last_name" name="last_name"><br><br>
        {{-- <label for="grade_id">Grade ID</label>
        <input type="number" id="grade_id" name="grade_id"><br><br> --}}

        <label for="grade">Grade:</label>
            <select id="grade_id" name="grade_id">
                <!-- <option value disabled selected>--Select Grade--</option> -->
                    <option value="10">10A</option>
                    <option value="11">11B</option>
            </select><br><br>
        <input type="submit" class="btn btn-primary">
    </form><br>

</div>
    @push('scripts')
    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

           $('#student-create').submit(function(e){
               e.preventDefault();   //telling not to go to the form action or refresh
               
               $.ajax({
                   url:"{{route('students.store')}}",
                   data:{
                       first_name:$("#first_name").val(),
                       last_name:$("#last_name").val(),
                       grade_id:$("#grade_id").val(),
                    },
                   type:"POST",
                   success:function(data){
                       alert(data.success);
                    //    alert(data.mydata);
                   }
               })
           });
        });
    </script>
    @endpush
@endsection