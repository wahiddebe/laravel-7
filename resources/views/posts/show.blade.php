@extends('layouts.app')
@section('title',$post->title)
@section('content')
<div class="container">
    <h1>
        {{$post->title}}
    </h1>
    <p>
        {{$post->body}}
    </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-link text-danger btn-sm p-0" data-toggle="modal" data-target="#exampleModal">
        Delete
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apa Anda Yakin Menghapusnya ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-2">{{$post->title}}</div>
                        <div class="text-secondary">
                            <small>
                                Published: {{$post->created_at->format('d M,y')}}
                            </small>
                        </div>
                    </div>
                    <form action="/posts/{{$post->slug}}/delete" method="post">
                        @csrf
                        @method('delete')

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Yes</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection