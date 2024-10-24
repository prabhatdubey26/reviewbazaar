@extends('admin.partials.layout')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Company</h4>
            <a href="{{ route('company.index') }}" class="btn btn-primary">Company List</a>
            <form class="forms-sample mt-3" action="{{ route('company.update', $company->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT') <!-- Use PUT for updating -->

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter company name" value="{{ old('name', $company->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" placeholder="Tell us about the company">{{ old('about', $company->about) }}</textarea>
                    @error('about')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="website_url">Website URL</label>
                    <input type="text" class="form-control @error('website_url') is-invalid @enderror" id="website_url" name="website_url" placeholder="Enter website URL" value="{{ old('website_url', $company->website_url) }}">
                    @error('website_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter company email" value="{{ old('email', $company->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone number" value="{{ old('phone', $company->phone) }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter address" value="{{ old('address', $company->address) }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="map">Map</label>
                    <input type="text" class="form-control @error('map') is-invalid @enderror" id="map" name="map" placeholder="Enter map" value="{{ old('map', $company->map) }}">
                    @error('map')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Enter country" value="{{ old('country', $company->country) }}">
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Enter city" value="{{ old('city', $company->city) }}">
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-6">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" placeholder="Enter zip code" value="{{ old('zip', $company->zip) }}">
                        @error('zip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="status">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="active" {{ old('status', $company->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $company->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Logo</label>
                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"/>
                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <select class="form-select mb-4 @error('category') is-invalid @enderror" id="category" name="categories[]" multiple style="height:
                    100px">
                    <option disabled>Select category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            {{ (is_array(old('categories')) && in_array($category->id, old('categories'))) || (isset($company) && in_array($category->id, explode(',', $company->category))) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <button type="button" class="btn btn-light" onclick="window.history.back();">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection
