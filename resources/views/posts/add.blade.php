@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="form-horizontal" action="/posts" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="title" id="">
                </div>
                <div class="form-group">
                    <textarea name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Save">
            </form>
        </div>
    </div>
@endsection