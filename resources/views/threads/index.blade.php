@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Threads</div>
                    <div class="panel-body">
                        @foreach ($threads as $thread)
                            <div class="article">
                                <a href="/threads/{{$thread->id}}">
                                    {{ $thread->title }}
                                </a>
                                <hr/>
                                {{ $thread->body }}
                            </div>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
