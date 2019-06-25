@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-homepage-buttons')
    @include('partials.content-homepage-quotes')
    @include('partials.content-homepage-video')
    @include('partials.content-homepage-what-why-where-when')
  @endwhile
@endsection

