@extends('layout')
@section('title', 'Post-Create')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Create Posts</div>
            </div>
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" class="form-control">
                        @if($errors->has('title'))
                            <span class="text-danger">{{$errors->first('title')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" style="width: 100%"></textarea>
                        @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection