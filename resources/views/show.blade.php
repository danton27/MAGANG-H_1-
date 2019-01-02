@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @foreach($posts as $post)
                        <div class="panel-heading">
                            {{$post->title}} | <small>{{$post->category->name}}</small> | {{$post->created_at->diffForHumans()}}
                        </div>
                        <div class="panel-body">
                            {{$post->post}}
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection