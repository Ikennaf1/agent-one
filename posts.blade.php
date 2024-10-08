<?php
// exportAssets();
$defaults = getThemeDefaults();
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="{{ settings('r', 'general.theme_color')}}" >
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css') }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js') }}" defer></script>
        <title>{{ settings('r', "general.name", "Nidavel") }} | Home</title>
        {!!customizedStyles()!!}
        {!! getHead() !!}
    </head>

    <body>
        <div class="">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-24">
                {{-- Hero --}}
                <div class="body-margin hero-section" id="hero_section">
                    <div class="hero-flex-1 hero-texts bg-content">
                        <span class="noto-sans-display-font text-4xl dark-white">{{settings('r', 'general.name')}}</span>
                        <span class="noto-sans-display-font font-bold dark-white">{{$defaults['tag-line']}}</span>
                        <span class="text">{{$defaults['user-bio']}}</span>
                    </div>
                    <div class="hero-flex-1 hero-pic">
                        <div class="hero-profile-picture">
                            <img
                             src="{{homeUrl('/assets/img/profile-picture.jpg', 0)}}"
                             alt="{{Auth::user()->name}}"
                             srcset=""
                             style="width: 100%; height: 100%; object-position: center; object-fit: cover;">
                        </div>
                    </div>
                </div>
                {{-- Main section --}}
                <div class="body-margin">
                    <div class="flex flex-wrap gap-16 justify-between w-full">
                        {{-- Post content --}}
                        <div class="posts-list">
                            @foreach ($posts as $post)
                                <div class="post-container">
                                    {{-- Featured image --}}
                                    <div class="post-list-img">
                                        <img src="<?= $post->featured_image != null
                                            ? asset('/uploads/' . $post->featured_image)
                                            : asset('/uploads/images/post_default_image.png') ?>"
                                            style="width: 100%; height: 100%; object-position: center; object-fit: cover;" />
                                    </div>
                                    <div class="post-list-body">
                                        <div class="post-title">
                                            <h4>{{ $post->title}}</h4>
                                        </div>
                                        <span class="text-center">
                                            <span class="post-category">{{ !empty($post->category) ? $post->category : 'No category' }}</span>
                                        </span>
                                        <div class="post-desc">
                                            <p><?= $post->description != null
                                                ? substr($post->description, 0, 75)
                                                : substr($post->content, 0, 75) ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="post-list-footer">
                                        <a href="{{ exportLink("/posts/$post->link") }}"><span class="read-link">Read</span></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Sidebar --}}
                        <div class="sidebar">
                            @include('front.parts.sidebar')
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
