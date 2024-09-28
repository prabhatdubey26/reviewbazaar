@extends('admin.partials.layout')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Blog</h4>
            <a href="{{ route('blog.index') }}" class="btn btn-primary">Blog List</a>
            <form class="forms-sample mt-3" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" placeholder="Title" required>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="Status">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="Status" name="status">
                                <option selected disabled>Select status</option>
                                <option value="active" {{ old('status', $blog->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $blog->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="category">Category</label>
                            <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                                <option selected disabled>Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image"/>

                    @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
                    <img class="mt-2" src="{{ asset('images/blog/' . $blog->image) }}" alt="Current Image" style="width: 100px; height: auto;" />
                @endif
                

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="editor1" name="description" rows="10">{{ old('description', $blog->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{ route('blog.index') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
