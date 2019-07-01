<label for="">Status</label>
<select class = "form-control" name="published" id="">
    @if(isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if ($category->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Title" valur="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input class = "from-control" type="text" name="slug" placeholder="Auto generation" value="{{$category->slug or ""}}">

<label for="">Parent category</label>
<select class="form-control" name="parint_id">
    <option value="0">without parent category</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Save">