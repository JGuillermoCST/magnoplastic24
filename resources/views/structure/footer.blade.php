<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('assets/img/logos/master-logo-white.webp') }}" class="h-12 md:h-16 mr-3 hidden dark:block" alt="Magno Logo" />
                    <img src="{{ asset('assets/img/logos/master-logo-black.webp') }}" class="h-12 md:h-16 mr-3 block dark:hidden" alt="Magno Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white md:hidden lg:block">Magnoplastic</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">@lang('page.products')</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="{{ url('/productos') }}" class="hover:underline">Todos</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">@lang('page.follow-us')</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://www.facebook.com/Magnoplstic">Facebook</a>
                        </li>
                        <li>
                            <a href="https://mx.linkedin.com/company/magnoplastic?trk=public_profile_topcard-current-company" class="hover:underline">LinkedIn</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">@lang('page.contact')</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://wa.link/3l3jrh" class="hover:underline">Whatsapp</a>
                        </li>
                        <br>
                        <li>Tel #1: 3336062792</li>
                        <li>Tel #2: 3333369484</li>
                        <br>
                        <li>
                            <a href="mailto: info@magnoplastic.com">info@magnoplastic.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                Magnoplastic™ © 2022-2024 Hacker's rooftop. Todos los derechos reservados.
            </span>
        </div>
    </div>
</footer>
