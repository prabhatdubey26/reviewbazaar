@extends('frontend.inc.layout')

@section('content')
<section class="post-details">
 @if($page->image && file_exists(public_path('images/pages/' . $page->image)))
 <img  class="img-fluid" src="{{ asset('images/pages/' . $page->image) }}" alt="image" width="100%">
 @endif
 <div class="container py-5">
   <div class="row align-items-center justify-content-center">
       <div class="col-md-9">
         {!! html_entity_decode($page->description) !!}
       </div> 
   </div>
 </div>
</section>
@endsection