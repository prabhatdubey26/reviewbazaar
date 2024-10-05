@extends('admin.partials.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Category</h4>
            <p class="card-description"> 
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
            </p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Parent Category</th>
                    <th> Slug </th>
                    <th> Logo </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                  <tr>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->parent->name ?? '' }} </td>

                    <td> {{ $category->slug }} </td>

                    <td class="py-1">
                     @if($category->image)
                         <img src="{{ asset('images/category') }}/{{$category->image}}" alt="image">
                      @endif
                    </td>
                    <td>
                        @if($category->status === 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                    </td>
                    <td>
                    {{-- <a href="{{ url($category->slug) }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-view"></a> --}}
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 </div>
@endsection