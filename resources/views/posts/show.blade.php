@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <a href="/posts">Back</a>
        </div>
        <div class="row">
            <div class="page-header">
                <h1>{{$post->title}}</h1>
            </div>
            <div class="col-xs-12">
                <p>
                    {{$post->content}}
                </p>
            </div>
        </div>
    </div>
@endsection