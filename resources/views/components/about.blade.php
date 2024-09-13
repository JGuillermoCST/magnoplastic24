{{-- Sección "Sobre nosotros" --}}
<section  class="featured-products w-full py-12 bg-white dark:bg-gray-900 flex flex-col relative">
    <h2 class="fps-title w-full dark:text-white text-5xl font-bold text-center mt-10 mb-12 text-blue-900">@lang('page.we-are')</h2>
    
    <svg class="as-svg-title absolute top-14" viewBox="0 0 450 70">
        <text class="stroke-black/40 dark:stroke-white" y="55" x="0">@lang('page.magno')</text>
    </svg>

    <div class="w-full flex flex-col lg:flex-row-reverse">
        <video class="mt-6 lg:my-0 xl:my-8 w-11/12 lg:w-6/12 mx-auto rounded-lg lg:relative lg:right-6" src="{{ asset('assets/video/MagnoPlastic2Normal.mp4') }}" autoplay controls muted loop></video>

        <div class="boxed-list w-11/12 mx-auto bg-gray-800/40 dark:bg-gray-800/70 rounded-lg lg:w-8/12 lg:relative lg:-right-6">
            <ul class="ml-6 mr-2 md:ml-8 md:mr-4 text-base lg:text-lg text-white list-disc my-8">
                <li>@lang('page.point-one')</li> <br>
                <li>@lang('page.point-two')</li> <br>
                <li>@lang('page.point-three')</li> <br>
                <li>@lang('page.point-four')</li> <br>
                <li>@lang('page.point-five')</li>
            </ul>
        </div>
    </div>
</section>
