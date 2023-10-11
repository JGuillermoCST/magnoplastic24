<section id="contact-card" class="contact-card w-full flex flex-col">

    <section class="mb-32 text-gray-800 text-center">
        <style>
          .map-container {
            height: 700px;
            z-index: -1;
          }
        </style>
        <div class="px-6 py-12 md:px-12">
          <div class="container mx-auto xl:px-32">
            <div class="grid lg:grid-cols-2 flex items-center">
              <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                <div class="rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14 bg-gray-300/40 dark:bg-gray-800/40 backdrop-blur-xl">
                  <h2 class="text-3xl font-bold mb-12 dark:text-white">
                    @lang('page.contact-us')
                </h2>
                  <form method="POST" action="{{ url('/mail/contact') }}">
                    @csrf

                    <div class="form-group mb-6">
                      <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder=" @lang('page.name') " />
                    </div>

                    <div class="form-group mb-6">
                      <input name="phone" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder=" @lang('page.phone') " />
                    </div>
                    <div class="form-group mb-6">
                      <textarea name="comments" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" rows="3" placeholder=" @lang('page.comments') "></textarea>
                    </div>
                    {{-- <div class="form-group form-check text-center mb-6">
                      <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer" id="exampleCheck87" checked />
                      <label class="form-check-label inline-block text-gray-800 dark:text-white" for="exampleCheck87">Enviarme una copia de este mensaje</label>
                    </div> --}}
                    <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                      @lang('page.send-btn')
                    </button>
                  </form>
                </div>
              </div>
              <div class="md:mb-12 lg:mb-0">
                <div class="map-container relative shadow-lg rounded-lg">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.560932619439!2d-103.33403412468361!3d20.565138103540658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f4dcfaa1459e1%3A0x8d023468a63b7417!2sMagnoplastic!5e0!3m2!1ses-419!2smx!4v1683999656423!5m2!1ses-419!2smx" class="left-0 top-0 h-full w-full absolute rounded-lg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
</section>
