{{--
  Template Name: Brands Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-brands-button')
    @include('partials.content-what-why-where-when')
    @include('partials.content-form-be-apart')
  @endwhile
@endsection
