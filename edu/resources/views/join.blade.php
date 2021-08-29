@extends('layouts.app')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>spersonal</th>
                <th>seducational</th>
            </tr>
        </thead>
        @foreach($educationals as $item)
        <tr>
        <td>{{ $item->educationals_fullname}}</td>
        <td>{{ $item->posts_firstname}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection