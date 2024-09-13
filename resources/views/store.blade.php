<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('structure.head')

        <style>
            .fps-svg-title, .as-svg-title { font: bold 70px Century Gothic, Arial; width: 100%; height: 110px; }
            text { fill: none; stroke: white; stroke-linejoin : round; }
            .fpc-description { transition: opacity 0.3s ease-in-out; opacity: 0; }
            .featured-product-card:hover .fpc-description { opacity: 1; }
        </style>
    </head>
    <body class="antialiased bg-white dark:bg-gray-900 flex flex-col">

        @include('structure.header')

        <main class="w-full lg:w-11/12 xl:w-10/12 flex flex-col mx-auto px-4 md:px-8 xl:px-0">
            @include('components.hero-yt', ['title' => __('know more'), 'ytid' => '6T0j5c4QodM'])
            @include('components.searchbar')
            @include('components.products-list')
        </main>

        @include('structure.footer')
    </body>

    @vite('resources/js/app.js')
    @vite('resources/js/UIMode.js')
</html>
