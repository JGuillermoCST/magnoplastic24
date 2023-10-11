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

        {{-- <button type="submit" class="mr-auto md:mr-0 p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button> --}}
    </form>
</section>

