@extends('layouts.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        @if($posts->count())
        <div>
            @isset($category)
            <h4>Category : {{$category->name}}</h4>
            @endisset
            @isset($tag)
            <h4>Tag : {{$tag->name}}</h4>
            @endisset
            @if (!isset($tag)&&!isset($category))
            <h4>All Post</h4>
            @endif
            <hr>
        </div>
        <div>
            <a href="/posts/create" class="btn btn-primary">New Post</a>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    {{Str::limit($post->title, 25,)}}
                </div>
                <div class="card-body">
                    <div>
                        {{ Str::limit($post->body, 100, '') }}
                    </div>
                    <a href="/posts/{{$post->slug}}">Read More</a>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    Published on {{$post->created_at->diffForHumans()}}
                    <a href="/posts/{{$post->slug}}/edit" class="btn btn-sm btn-success">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{$posts->links()}}
        </div>
    </div>
    @else
    <div class="alert alert-info">
        There are no posts.
    </div>
    <div>
        <a href="/posts/create" class="btn btn-primary">New Post</a>
    </div>
    @endif
</div>
@endsection