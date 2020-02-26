@extends('layout')
@section('title', 'Student-Page')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Students
                    <a href="{{route('students.create')}}" class="btn btn-success float-right">Add Students</a>
                    <a href="{{route('students.trash')}}" class="btn btn-primary float-right mr-3">Trash</a>
                </div>
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
                                <a href="{{route('students.delete', $student->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
            $('#students').DataTable();
        });
    </script>
@endsection