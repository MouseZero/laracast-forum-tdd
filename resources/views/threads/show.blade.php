@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="artical">
                            <h1>{{ $thread->title }}</h1>
                            <hr/>
                            {{ $thread->body }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Replies</h2>
                @foreach ($replies as $reply)
                    <div class="panel panel-default replies">
                        {{$reply->body}}
                        <p>&nbsp;</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
