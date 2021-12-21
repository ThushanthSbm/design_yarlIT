@extends('layouts.master')
@section('content')
<div>
<div class="col"> 
<h1>create student</h1>
{!! Form::open() !!}
<div class="row mb-3">
{!! Form::label('inputEmail4','Email',["class"=>"col-sm-2 col-form-label"]) !!}
<div class="col-sm-10">
{!! Form::label('inputEmail4','',["class"=>"form-control","placeholder"=>"enter your mail ID","readonly"=>true])!!}
</div>
</div>
{!! Form::close() !!}
</div>

</div>
@endsection