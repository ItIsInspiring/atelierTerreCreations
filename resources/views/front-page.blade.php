@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <hr>
    @include('partials.content-page')
  @endwhile
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 card"><a href="/stages/">Forfait découverte enfant</a></div>
      <div class="col-md-4 card"><a href="/stages/">Forfait découverte adulte</a></div>
      <div class="col-md-4 card"><a href="/stages/">Forfait découverte entreprise</a></div>
    </div>
  </div>
@endsection
