@extends('layout')
@section('title', 'Posts-Show')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Create Posts</div>
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <h4>{{$post->title}}</h4>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" style="width: 100%">{{$post->description}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection