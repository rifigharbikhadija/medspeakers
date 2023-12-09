@extends('base')

@section('title', 'Blog')

@section('content')
<div class="blog">
<div class="boxed-container">
<div class="banner">
    <img class="banner-img" src="{{asset('images/banner.png')}}" alt="">
    <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
    <p class="banner-desc">
    Why Ghost (& Figma) instead of Medium, WordPress or other options?
    </p>
    <div class="custom-separator"></div>
</div>
<div class="article-section">
    <h2>All articles</h2>
    <div class="article-container">
        <div class="article">
            <img class="article-img" src="{{asset('images/banner.png')}}" alt="">
            <p class="article-desc">Here are some things you should know regarding how we work </p>
        </div>
        <div class="article">
            <img class="article-img" src="{{asset('images/banner.png')}}" alt="">
            <p class="article-desc">Here are some things you should know regarding how we work </p>
        </div>
        <div class="article">
            <img class="article-img" src="{{asset('images/banner.png')}}" alt="">
            <p class="article-desc">Here are some things you should know regarding how we work </p>
        </div>
        <div class="article">
            <img class="article-img" src="{{asset('images/banner.png')}}" alt="">
            <p class="article-desc">Here are some things you should know regarding how we work </p>
        </div>
    </div>
</div>
</div>
</div>
@endsection