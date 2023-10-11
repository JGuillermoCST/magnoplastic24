<section class="mb-8">
    <!-- Jumbotron -->
    <div class="px-6 text-center md:px-12 lg:my-6 lg:text-left">
      <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        <div class="grid items-center gap-12 lg:grid-cols-2">
          <div class="mt-12 lg:mt-0">
            <h1 class="mt-0 mb-12 text-4xl font-bold text-blue-950 dark:text-blue-400 tracking-tight md:text-5xl xl:text-6xl">
              {{ $title }}
            </h1>
          </div>
          <div class="mb-12 lg:mb-0">
            <div
              class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
              style="padding-top: 56.25%">
              <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full"
                src="https://www.youtube.com/embed/{{ $ytid }}"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
