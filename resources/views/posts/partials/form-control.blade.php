<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" value="{{old('title') ?? $post->title}}" type="text" name="title" id="">
    @error('title')
    <div class="mt-2 text-danger">
        {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" type="text" name="body" id="">{{old('body') ?? $post->body}}</textarea>
    @error('body')
    <div class="mt-2 text-danger">
        {{$message}}
    </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{$submit ?? 'Update'}}</button>