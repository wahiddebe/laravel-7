@extends('layouts.app',['title'=>'New Post'])
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    New Post
                </div>
                <div class="card-body">
                    <form action="/posts/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" type="text" name="body" id=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection