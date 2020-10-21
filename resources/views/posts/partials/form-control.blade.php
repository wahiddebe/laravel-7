<div class="form-group">
    <input class="form-control" type="file" name="thumbnail" id="thumbnail">
    @error('thumbnail')
    <div class="mt-2 text-danger">
        {{$message}}
    </div>
    @enderror
</div>
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
    <label for="category">Category</label>
    <select class="form-control" value="" type="text" name="category" id="">
        <option disabled selected>Choose One!</option>
        @foreach ($categories as $category)
        <option {{$category->id == $post->category_id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}
        </option>
        @endforeach
    </select>
    @error('category')
    <div class="mt-2 text-danger">
        {{$message}}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="tags">Tag</label>
    <select class="form-control js-example-basic-multiple" type="text" name="tags[]" id="tags" multiple>
        @foreach ($post->tags as $tag)
        <option selected value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
        @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    @error('tags')
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