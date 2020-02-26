@extends('layout')
@section('title', 'Student-Create')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Create Students</div>
            </div>
            <div class="card-body">
                <form action="{{route('students.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Student Name</label>
                        <input type="text" name="name" class="form-control">
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Address</label>
                        <input name="address" class="form-control" type="text">
                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection