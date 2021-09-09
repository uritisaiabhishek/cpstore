<section class="text-gray-600 body-font">
  
  <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper"
    >
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <!-- text on image -->
          <div class="bg-red-200 text-green-900 relative">
            <div class="min-h-screen hero-image bg-right-bottom bg-cover flex" style="background-image: url(https://images.unsplash.com/photo-1457131760772-7017c6180f05?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);">
              <div class="relative container mx-auto p-4 flex items-end z-10">
                <div class="absolute top-1/2 transform -translate-y-1/2">
                  <div class="content float-left py-4 px-5 my-5">
                    <div class="heading mb-3 text-2xl md:text-4xl">Affordable year-round care. No insurance required!</div>
                    <div class="text leading-normal">Helping Women Meet All of their Health Care Needs</div>
                  </div>
                  <div class="clear-left px-5">
                    <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded md:text-lg text-sm">
                      Add to Cart
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <!-- half screen image half screen text -->
          <div class="container bg-blue-50 mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                <br class="hidden lg:inline-block">readymade gluten
              </h1>
              <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
              <div class="flex justify-center">
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
              </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
              <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <!-- ONly image full screen -->
          <!-- Required swiper-lazy class and image source specified in data-src attribute -->
          <!-- <img
            data-src="assets/images/heroslider/white-shoes.jpg"
            alt=""
            class="md:h-screen w-screen swiper-lazy"
          /> -->
          <img
            src="<?php echo SITE_PATH ?>assets/images/heroslider/white-shoes.jpg"
            alt=""
            class="md:h-screen w-screen"
          />
          <!-- Preloader image -->
          <!-- <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div> -->
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
</div>
</section>