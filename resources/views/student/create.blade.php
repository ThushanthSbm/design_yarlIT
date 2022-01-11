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
                
                    <option value="10">10A</option>
                    <option value="11">11B</option>
            </select><br><br>
        <input type="submit" class="btn btn-primary">
    </form><br>

</div>
    @push('scripts')
    <script>
        $(document).ready(function(){
           
           $('#student-create').submit(function(e){
               e.preventDefault();   //telling not to go to the form action or refresh
               let urls = $('#student-create').attr('action');
                // alert(url);

               var fname=$("#first_name").val();
               var lname=$("#last_name").val();
               var grade=$("#grade_id").val();
               $.ajax({
                   url:urls,
                   data:{
                       first_name:fname,
                       last_name:lname,
                       grade_id:grade,
                    },
                   type:"POST",
                   success:function(data){
                       alert(data.success);
                   }
               })
           });
        });
    </script>
    @endpush
@endsection