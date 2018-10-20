@extends('layouts.master')

@section('title', 'Edit a Student')

@section('content')
    <br>
    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit a student data</h3>
            </div>
            <div class="panel-body">

                <form action="{{ route('students.update', [ 'id' => $student->id ]) }}" method="POST" class="form-horizontal">

                    <!-- CSRF Token Field -->
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                <!-- Field Student name -->
                    <div class="form-group">
                        <label>Student name</label>
                        <input type="text" name="name" class="form-control" placeholder="Write your student name" value="{{ $student->name }}">
                    </div>

                    <!-- Field Student mobile -->
                    <div class="form-group">
                        <label>Student mobile</label>
                        <input type="text" name="mobile" class="form-control" value="{{ $student->mobile }}">
                    </div>

                    <!-- Submit button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection