<section id="featured-products" class="featured-products w-full py-12 bg-white dark:bg-gray-900 flex flex-col relative">

    <h2 class="fps-title w-full dark:text-white text-4xl font-bold text-center mt-12 mb-12 text-blue-900">@lang('page.know-products')</h2>
    <svg class="fps-svg-title absolute top-14 stroke-cyan-500 fill-cyan-500" viewBox="0 0 450 70">
        <text class="stroke-black/40 dark:stroke-white" y="55" x="50">Productos</text>
    </svg>

    <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-6 md:gap-8 lg:gap-6 xl:gap-16 px-8 lg:px-16">

        @foreach($fprods as $p)
            @include('components.fd-prod-card',['id' => $p->id, 'name' => $p->name, 'img' => $p->mainPhoto])
        @endforeach

    </div>
</section>
