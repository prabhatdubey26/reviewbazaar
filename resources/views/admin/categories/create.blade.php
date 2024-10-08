@extends('admin.partials.layout')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Category</h4>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Category List</a>
            <form class="forms-sample mt-3" action="{{ route('categories.store') }}" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="Status">Category</label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                            <option selected disabled>Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ old('category', $category) == 'active' ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
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
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"/>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="button" class="btn btn-light" onclick="window.history.back();">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
