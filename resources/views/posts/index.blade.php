@extends('layouts.app');

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Posts</h1>
        </div>
    </div>

    @if (Auth::user())
        <div class="row">
            <div class="col-xs-12">
                <a class="btn btn-primary" href="/posts/create">Add</a>
            </div>
            <div class="col-xs-12">&nbsp;</div>
        </div>
    @endif

    <div class="row">
        @foreach($posts as $p)
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 0 15px;border-bottom: none;">
                    <p class="text-success text-right" style="margin: 0 0 0;">
                        {{$p->created_at->format('d M Y')}}
                    </p>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12">
                        <h3 style="margin: 5px 0 15px 0;">
                            <a href="/posts/{{ $p->id }}">{{$p->title}}</a>
                        </h3>
                    </div>
                    <div class="col-xs-12">
                        <p>
                            {{$p->content}}
                        </p>
                    </div>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-info" href="/posts/{{$p->id}}">Read more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection