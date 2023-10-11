<section id="products-list" >

    <div class="mt-8 mb-14 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 gap-y-10">
        @foreach ($products as $p)
            @include('components.product-card', ['id' => $p->id, 'name' => $p->name, 'value' => $p->price, 'img' => $p->mainPhoto])
        @endforeach
    </div>
</section>
