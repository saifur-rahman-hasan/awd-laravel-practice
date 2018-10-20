@extends('layouts.master')

@section('title', 'All students')

@section('content')
    <br>
    <div class="container">

        <ul class="list-unstyled">
            <li><a href="{{ route('students.create') }}" class="btn btn-sm btn-success">Create a new student</a></li>
        </ul>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Students</h3>
            </div>
            <div class="panel-body">

                <ul class="list-group">
                    @foreach($students as $student)
                        <li class="list-group-item">
                            <a href="{{ route('students.show', [ 'id' => $student->id ]) }}">{{ $student->name }} ({{ $student->mobile }})</a>
                            |
                            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                            |
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('want to delete?');">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection