@extends('templateMilo::layouts.app')

@section('title', 'CW Church')

@section('content')
    <div class="row">
        <div class="col-md-4">

            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-10-26 20:00">26 october 2019</time>
                        </a> in <a href="page-category.html">Journey</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">How can we sing about love?</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/18.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->

            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-10-03 20:00">3 october 2019</time>
                        </a> in <a href="page-category.html">Lifestyle</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">Oh, I guess they have the blues</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/22.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->
        </div>
        <div class="col-md-4">
            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-07-16 20:00">16 july 2019</time>
                        </a> in <a href="page-category.html">Work</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">How can we, how can we sing about ourselves?</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/3.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->

            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-10-15 20:00">15 october 2019</time>
                        </a> in <a href="page-category.html">Lifestyle</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">The king is made of paper</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/20.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->
        </div>
        <div class="col-md-4">
            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-08-24 20:00">24 august 2019</time>
                        </a> in <a href="page-category.html">Work</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">Crying on the news</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/5.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->

            <article class="card mb-4">
                <header class="card-header">
                    <div class="card-meta">
                        <a href="#">
                            <time class="timeago" datetime="2019-05-08 20:00">8 may 2019</time>
                        </a> in <a href="page-category.html">Journey</a>
                    </div>
                    <a href="post-image.html">
                        <h4 class="card-title">How can you not sing about love?</h4>
                    </a>
                </header>
                <a href="post-image.html">
                    <img class="card-img" src="{{ asset('vendor/confrariaweb/template-milo/img/articles/1.jpg') }}" alt=""/>
                </a>
                <div class="card-body">
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                        sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                </div>
            </article><!-- /.card -->
        </div>
    </div>


@endsection