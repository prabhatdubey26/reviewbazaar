@extends('admin.partials.layout')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Page</h4>
            <a href="{{ route('pages.index') }}" class="btn btn-primary">Page List</a>
            <form class="forms-sample mt-3" action="{{ route('pages.store') }}" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-select @error('status') is-invalid @enderror" id="Status" name="status">
                        <option selected disabled>Select status</option>
                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"/>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="editor1" name="description" rows="10" cols="80">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="button" class="btn btn-light" onclick="window.history.back();">Cancel</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
