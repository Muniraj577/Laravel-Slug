@extends('layout')
@section('title', 'Trash-List')
@section('content')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Trash Student List
                    <a href="#" class="btn btn-danger btn-sm float-right">Permanently Delete all</a>
                    <a href="{{route('students.restore-all')}}" class="btn btn-primary btn-sm float-right mr-3">Restore all</a>
                </div>
            </div>
            <div class="card-body">
                <table id="trash-students" class="table table-striped table-bordered" style="width:100%">
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
                                <a href="{{route('students.restore', $student->id)}}" class="btn btn-danger btn-sm">Restore</a>
                                <a href="{{route('students.permanentDelete', $student->id)}}" class="btn btn-danger btn-sm">Delete Permanently</a>
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
            $('#trash-students').DataTable();
        });
    </script>
@endsection