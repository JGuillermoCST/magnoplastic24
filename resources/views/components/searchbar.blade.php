{{-- Barra de busqueda en listado de productos --}}

<section id="search" class="mx-auto w-full my-4">
    <form class="flex items-center">
        <div class="w-10/12 md:w-1/3 lg:w-1/4 ml-auto md:ml-0">
            <select id="searchbox" data-te-select-init data-te-select-clear-button="true">
                <option value="0">@lang('page.all-products')</option>

                @foreach ($cats as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
            
            <label data-te-select-label-ref>@lang('page.srch-cat')</label>
        </div>
    </form>
</section>

