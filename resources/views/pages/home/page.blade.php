@extends('template')
@section('title')
  Welcome Home
@endsection
@section('content')
  @include('pages.home.partials.banner')
  @include('pages.home.partials.about')
  @include('pages.home.partials.atheletes')
  @include('pages.home.partials.callout')
  @include('pages.home.partials.mission')
  @include('pages.home.partials.value')
  @include('pages.home.partials.event')
@endsection
@section('styles')
@endsection
@section('scripts')

@endsection
