@extends('layout')
@section('title', 'Post Page')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Posts
                    <a href="{{route('posts.create')}}" class="btn btn-success float-right">Add Posts</a>
                </div>
                <div class="mt-5">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table id="posts" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{++$id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>
                                <a href="{{route('posts.show', $post->slug)}}" class="btn btn-primary btn-sm">Show</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#posts').DataTable();
        });
    </script>
@endsection