@extends('admin.partials.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Page</h4>
            <p class="card-description"> 
                <a href="{{ route('pages.create') }}" class="btn btn-primary">Add Page</a>
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
                    @foreach($pages as $page)
                  <tr>
                    <td> {{ $page->title }} </td>
                    <td> {{ $page->slug }} </td>

                    <td class="py-1">
                      <img src="{{ asset('images/pages') }}/{{$page->image}}" alt="image">
                    </td>
                    <td>
                        @if($page->status === 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                    </td>
                    <td>
                      <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline;">
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