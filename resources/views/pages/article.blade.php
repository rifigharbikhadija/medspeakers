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
                            <p class="author-name">{{ $article->author_name }}</p>
                            <p class="article-date">{{ $article->created_at->format('M d, Y') }}· {{ $article->duration }} min read</p>
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
                    {{ $article->introduction }}
                </p>
                <h4>{{ $article->title }}</h4>
                <p class="article-text">
                    {{ $article->paragraphe_one }}
                </p>
            </div>
            <img class="banner-img" src="{{asset('storage/'. $article->image)}}" alt="">
            <p class="img-caption">
                {{ $article->caption }}
            </p>
            <div class="article-content">
                <p class="article-text">
                    {{ $article->paragraphe_three }}
                </p>
                <div class="share-btn-container">
                    <button class="share-btn xl-share-btn"><img class="share-img" src="{{asset('images/fb-icon.png')}}" alt=""><span> Share on Facebook</span></button>
                    <button class="share-btn xl-share-btn"><img class="share-img" src="{{asset('images/twitter-icon.png')}}" alt=""><span>Share on Twitter</span></button>
                </div>
                <div class="tags">
                    <p>
                        Tags: <span class="underline">{{ $article->tags }}</span>
                    </p>
                </div>
                <hr class="dotted-line">
                <div class="author-info">
                    <img class="author-img" src="{{asset('images/author-img.png')}}" alt="">
                    <div class="article-info">
                        <p class="author-desc"><span class="bold">{{ $article->author_name }}</span> is a Design Founder & Advisor, Berlin School of Creative Leadership Executive MBA participant, Zippie advisor, Wolt co-founder, and Nordic Rose stakeholder.</p>
                    </div>
                </div>
                <p class="author-desc autor-position">{{ $article->author_position }}</p>
            </div>
        </div>
        <div class="separator-container">
            <img class="separator-img" src="{{asset('images/yeux.png')}}" alt="">
            <div class="custom-separator"></div>
        </div>

    </div>
    <h2>What to read next</h2>

    <div class="related-articles">
        @foreach ($otherArticles as $otherArticle)
        <a class="article">
            <img class="article-img" src="{{asset('storage/'. $otherArticle->image)}}" alt="">
            <p class="article-desc">{{ $otherArticle->title }}</p>
</a>
        @endforeach

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