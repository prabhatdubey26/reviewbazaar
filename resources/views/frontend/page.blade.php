@extends('frontend.inc.layout')

@section('content')
 {{-- <h3>{{ $page->title }}</h3> --}}
 {!! html_entity_decode($page->description) !!}
@endsection