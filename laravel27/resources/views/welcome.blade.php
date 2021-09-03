@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container">
    <br />
    @if($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hellow Sir!</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ route('save') }}" method="post" class="form-group">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <label for="">Name</label>
                <input type="text" class="form-control" name="listname" />
                <br />
                <button type="submit" class="btn btn-danger">Save</button>            
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($mylists as $mylist)
            <tr>
                <td>{{ $mylist->id }}</td>
                <td>{{ $mylist->name }}</td>
                <td>
                    <a href="{{ route('edit',$mylist->id) }}">
                       <button class="btn btn-danger">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('delete',$mylist->id) }}">
                        <button class="btn btn-warning">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection