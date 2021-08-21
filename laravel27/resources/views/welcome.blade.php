@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="container">
    <br />
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
</div>
@endsection