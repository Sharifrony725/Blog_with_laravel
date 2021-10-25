@extends('master')
@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post['title'] }}</h2>
    <p class="blog-post-meta">{{ $post['author'] }} <a href="#"></a></p>
    <p>{{ $post['description'] }}</p>
</div><!-- /.blog-main -->
@endsection
         