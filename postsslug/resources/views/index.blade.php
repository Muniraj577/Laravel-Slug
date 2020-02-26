@extends('layout')
@section('title', 'Home Page')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Posts</div>
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
                <a href="{{route('posts.index')}}" class="btn btn-sm btn-primary float-right">View all</a>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <div class="card-title">Students</div>
            </div>
            <div class="card-body">
                <table id="students" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{++$id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Show</a>
                                {{--{{route('students.show', $student->slug)}}--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="#" class="btn btn-sm btn-primary float-right">View all</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#posts').DataTable();
            $('#students').DataTable();
        });
    </script>
@endsection