@extends('base')

@section('title', 'Article')

@section('content')
<div class="article-page">
    <div class="full-width-container">
        <div class="banner">
            <div class="banner-top">
                <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
                <p class="banner-desc">
                    Why Ghost (& Figma) instead of Medium, WordPress or other options?
                </p>
            </div>
            <img class="banner-img" src="{{asset('images/banner.png')}}" alt="">


        </div>
        <div class="boxed-container">
            <div class="article-content">
                <div class="custom-separator"></div>
                <div class="article-top">
                    <div class="article-top-left">
                        <img class="author-img" src="{{asset('images/author-img.png')}}" alt="">
                        <div class="article-info">
                            <p class="author-name">Mika MAtikainen</p>
                            <p class="article-date">Apr 15, 2020 · 4 min read</p>
                        </div>
                    </div>
                    <div class="article-top-right">
                        <button class="share-btn">
                            <img class="share-img" src="{{asset('images/fb-icon.png')}}" alt="">
                        </button>
                        <button class="share-btn">
                            <img class="share-img" src="{{asset('images/twitter-icon.png')}}" alt="">
                        </button>
                    </div>
                </div>
                <p class="article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra.
                </p>
                <p class="article-text">
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula. In eu dui molestie, molestie lectus eu, semper lectus.
                </p>
                <h4>Next on the pipeline</h4>
                <p class="article-text">
                    Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
                <p class="article-text">
                    Morbi efficitur auctor metus, id mollis lorem pellentesque id. Nullam posuere maximus dui et fringilla.
                </p>
            </div>
            <img class="banner-img" src="{{asset('images/article-img.png')}}" alt="">
            <p class="img-caption">
                Image caption centered this way and I’ll make this a bit longer to indicate the amount of line-height.
            </p>
            <div class="article-content">
                <p class="article-text">
                    Aenean pharetra quis lacus at viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula.
                </p>
                <p class="article-text">
                    In eu dui molestie, molestie lectus eu, semper lectus. Proin at justo lacinia, auctor nisl et, consequat ante. Donec sit amet nisi arcu. Morbi efficitur auctor metus, id mollis lorem pellentesque id. Nullam posuere maximus dui et fringilla. Nulla non volutpat leo.
                </p>
                <p class="article-text">
                    A list looks like this:
                </p>
                <ul class="article-text">
                    <li>First item in the list</li>
                    <li>Second item in the list lorem ipsum dolor sit amet nunc felis dolor lorem ipsum sit amet</li>
                    <li>Third item in the list</li>
                </ul>
                <p class="article-text">
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula.
                </p>
                <p class="article-text">
                    Thanks for reading,
                </p>
                <p class="article-text">
                    Mika
                </p>
                <div class="share-btn-container">
                    <button class="share-btn xl-share-btn"><img class="share-img" src="{{asset('images/fb-icon.png')}}" alt=""><span> Share on Facebook</span></button>
                    <button class="share-btn xl-share-btn"><img class="share-img" src="{{asset('images/twitter-icon.png')}}" alt=""><span>Share on Twitter</span></button>
                </div>
                <div class="tags">
                    <p>
                        Tags: <span class="underline">product design, culture</span>
                    </p>
                </div>
                <hr class="dotted-line">
                <div class="author-info">
                    <img class="author-img" src="{{asset('images/author-img.png')}}" alt="">
                    <div class="article-info">
                        <p class="author-desc"><span class="bold">Mika Matikainen</span> is a Design Founder & Advisor, Berlin School of Creative Leadership Executive MBA participant, Zippie advisor, Wolt co-founder, and Nordic Rose stakeholder.</p>
                    </div>
                </div>
                <p class="author-desc autor-position">co-founder, and Nordic Rose stakeholder.</p>
            </div>
        </div>
        <div class="separator-container">
            <img class="separator-img" src="{{asset('images/yeux.png')}}" alt="">
            <div class="custom-separator"></div>
        </div>

    </div>
    <h2>What to read next</h2>

    <div class="related-articles">
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
    <div class="news-letter-container">
        <h3>Sign up for the newsletter</h3>
        <p>If you want relevant updates occasionally, sign up for the private newsletter. Your email is never shared. </p>
        <div class="input-container">
            <input type="email" placeholder="" Enter your email...>
            <button>Sign up</button>
        </div>
    </div>
</div>
@endsection