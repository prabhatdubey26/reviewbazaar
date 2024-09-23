@extends('admin.partials.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Company</h4>
            <p class="card-description"> 
                <a href="{{ route('company.create') }}" class="btn btn-primary">Add Company</a>
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
                    <th> Website </th>
                    <th> Image </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                  <tr>
                    <td> {{ $company->name }} </td>
                    <td> {{ $company->website_url }} </td>

                    <td class="py-1">
                      @if($company->logo)
                      <img src="{{ asset('logos') }}/{{$company->logo}}" alt="logo">
                      @endif
                    </td>
                    <td>
                        @if($company->status === 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                    </td>
                    <td>
                    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('company.destroy', $company->id) }}" method="POST" style="display:inline;">
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