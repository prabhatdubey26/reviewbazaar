@extends('admin.partials.layout')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Page</h4>
            <a href="{{ route('pages.index') }}" class="btn btn-primary">Page List</a>
            <form class="forms-sample mt-3" action="{{ route('pages.update', $page->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $page->title) }}" placeholder="Title" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select class="form-select" name="status">
                        <option value="active" {{ $page->status === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $page->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image"/>
                    <img class="mt-2" src="{{ asset('images/pages') }}/{{$page->image}}" alt="Current Image" style="width: 100px; height: auto;" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="editor1" name="description" rows="10">{{ old('description', $page->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{ route('pages.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
