<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('structure.head')

        <style>

            .fps-svg-title, .as-svg-title {
            font   : bold 70px Century Gothic, Arial;
            width  : 100%;
            height : 110px;
            }

            text {
            fill            : none;
            stroke          : white;
            stroke-linejoin : round;
            }

            .fpc-description {
                transition: opacity 0.3s ease-in-out;
                opacity: 0;
            }

            .featured-product-card:hover .fpc-description {
                opacity: 1;
            }
        </style>
    </head>
    <body class="antialiased bg-white dark:bg-gray-900">

        @include('structure.header')

        {{-- <div class="mx-4 lg:mx-8 mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-800" role="alert">
            Última actualización: Junio 15, 15:00 CST
        </div>

        <div class="mx-4 lg:mx-8 mb-4 rounded-lg bg-warning-100 px-6 py-5 text-base text-warning-800" role="alert">
            Sitio en términos de desarrollo, pronto estará disponible para el público.
        </div> --}}

        <main class="flex flex-col">

            @include('components.main-title-pres')
            @include('components.featured-products')
            @include('components.about')
            @include('components.why-us')
            @include('components.hero-yt', ['title' => __('focus transport'),'ytid' => 'JDH7NgcN5hs'])
            @include('components.contact-card')

        </main>

        @include('structure.footer')
    </body>

    @vite('resources/js/app.js')
    @vite('resources/js/UIMode.js')
</html>
