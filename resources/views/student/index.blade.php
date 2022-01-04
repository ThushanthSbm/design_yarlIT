@extends('layouts.master')
@section('content')

 <div class="container">
    <div class="row">
       
        <div class="col-md-6">
        <h1 style="margin-top: 20px;">All Students</h1>
        @if(Session::has('message'))
            <p style="color: green">{{ Session::get('message') }}</p>
        @endif
        </div>
        
        <div class="col-md-4">
            <a href="{{ route('students.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing" style="margin-top: 20px;">Create Student</a>
            <hr>
        </div>       
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Grade ID</th>
                    <th>Actions</th>
                    <th></th>
                    
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <th>{{ $student->id }}</th>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>                           
                            <td>{{ $student->grade_id }}</td>                          
                            <td>      
                                <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure want to delete this record?')){ return false; }">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection