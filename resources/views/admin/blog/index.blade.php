@extends('admin.partials.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Blog</h4>
            <p class="card-description"> 
                <a href="{{ route('blog.create') }}" class="btn btn-primary">Add Blog</a>
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
                    <th> Title </th>
                    <th> Slug </th>
                    <th> Image </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                  <tr>
                    <td> {{ $blog->title }} </td>
                    <td> {{ $blog->slug }} </td>

                    <td class="py-1">
                      @if($blog->image && file_exists(public_path('images/blog/' . $blog->image)))
                      <img src="{{ asset('images/blog/' . $blog->image) }}" alt="image">
                      @endif
                    </td>
                    <td>
                        @if($blog->status === 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                    </td>
                    <td>
                      <a href="{{ url('blog/  '.$blog->slug) }}" target="_blank" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
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