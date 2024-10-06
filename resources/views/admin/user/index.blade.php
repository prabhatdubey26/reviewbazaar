@extends('admin.partials.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">User</h4>
            {{-- <p class="card-description"> 
                <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
            </p> --}}
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
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Profile </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td>
                      {{$user->phone}}
                    </td>
                    <td class="py-1">
                        @if($user->profile)
                         <img src="{{ asset('images/profile') }}/{{$user->profile}}" alt="image">
                      @endif
                    </td>
                    <td>
                    {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
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
      <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
      </div>
 </div>
@endsection