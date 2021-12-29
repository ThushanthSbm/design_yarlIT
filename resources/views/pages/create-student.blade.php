@extends('layouts.master')
@section('content')
{{-- <div class="row">
    <div class="col">

    </div>
    <div class="col">
        <h1>Create Student</h1>
        
        {!! Form::open() !!}
        <div class="row mb-3">
           {!! Form::label('name','Name:') !!}
        </div>
        <div class="col-sm-10">
           {!! Form::text('name',null,['class' => 'form-control','required' => '']) !!}  
        </div>
    </div>
</div> --}}

<div class="container">
    <p class="h2 mb-3 mt-2 text-center">Create Student Profile</p>

{!! Form::open(['id' => 'frm-create']) !!}
              
{{ Form::label('name','Name:') }}
{{ Form::text('name',null,['class' => 'form-control','required' => '']) }}

{{ Form::label('email','Email:') }}
{{ Form::text('email',null,['class' => 'form-control','required' => '']) }}

{{ Form::label('age','Age:') }}
{{ Form::text('age',null,['class' => 'form-control','required' => '']) }}<br>

{{ Form::label('grade','Grade:') }}
{{ Form::select('grade', ['10A' => '10A', '10B' => '10B','10C' => '10C'], '10A',['class'=>'form-control']) }} <br>

{{ Form::label('gender','Gender: ') }}
{{ Form::label('gender','Male') }}
{{ Form::radio('gender', 'Male', true) }}
{{ Form::label('gender','Female') }}
{{ Form::radio('gender', 'Female') }}<br>

{{ Form::label('subject','Subject:  ') }}
{{ Form::label('subject','Tamil') }}
{{ Form::checkbox('subject','Tamil') }}
{{ Form::label('subject','Maths') }}
{{ Form::checkbox('subject','Maths') }}

{{ Form::submit('Submit',['class' => 'btn btn-success btn-lg btn-block ','style'=> 'margin-top:20px;']) }}
{!! Form::close() !!}
</div><br>

@push('scripts')
    <script>
        $(document).ready(function(){
           $('#frm-create').submit(function(e){
               e.preventDefault();
               let name=$('#name').val();
               let email = $("#email").val();
               let age = $("#age").val();
               let gender = $('input[name="gender"]:checked').val();
               let grade =  $('#grade option:selected').text();
               let subject = $('#subject:checked').map(function(){
                return $(this).val();
                }).get();

               alert(   'Name: '+name+
                        '\nEmail: ' + email+
                        '\nAge: '+ age    +
                        '\nGender is: '+ gender+
                        '\nGrade: '+grade+
                        '\nSubject : '+subject);
           });
        });
    </script>
@endpush
@endsection