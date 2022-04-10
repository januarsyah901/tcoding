@extends('layouts.main')

@section('container')
<article class="m-5"> 
    <h2>{{ $post["title"] }}</h2>    
    <h5>BY: {{ $post["author"] }}</h5>    
    <p>{{ $post["image"] }}</p>    
    <a href="/blog" class="fs-5  "> back &#x21a0;</a>
</article>
@endsection