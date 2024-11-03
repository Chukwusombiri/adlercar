<x-app-layout>      
  {{-- landing --}}                
    <div class="bg-cover bg-center relative" style="background-image: url('/images/landing3.jpg');">        
        <div class="bg-gray-900 bg-opacity-50 px-6 py-4 lg:px-8">
          <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
            <div>
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative overflow-hidden rounded-full py-1.5 px-4 text-sm 
                    bg-slate-200 leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        <span class="text-slate-600">
                          Shipping modifications and support for customers affected by the Russian-Ukrainian invasion <a href="{{route('ukrain')}}" 
                        class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true">
                            </span>Learn more <span aria-hidden="true">&rarr;</span></a>
                        </span>
                    </div>
                </div>               
                <div>
                    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-center sm:text-6xl">
                        Delivery Made Easy And Fast With ADLERCARGO.</h1>                    
                    <div class="mt-8 flex gap-x-4 sm:justify-center">
                        <a href="{{route('user.ship')}}" class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                        Ship now
                        <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                        </a>
                        <a href="{{route('quote')}}" class="inline-block rounded-lg px-4 py-1.5 text-base font-semibold leading-7 text-white bg-slate-700 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Get quote
                        <span class="text-gray-400" aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>  
                <div class="mt-6">
                    <div class="mb-4 w-10/12 mx-auto uppercase font-bold text-2xl text-white">
                        <p>Track shipment</p>
                    </div>
                    @livewire('tracker')
                </div> 
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                        <defs>
                        <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC"></stop>
                            <stop offset="1" stop-color="#FF80B5"></stop>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>            
            </div>
          </div>
        </div>
    </div>  
    <!-- ====== worldwide delivery Section starts -->
    <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] bg-gray-300" style="overflow-x: hidden">
        <div class="mycontainer">
          <div id="flexRow">
            <div>
              <div>
                <div>
                  <div class="py-3 sm:py-4">
                    <img
                      src="{{url('images/carousel_4.jpg')}}"
                      alt=""
                      class="w-full object-cover"
                    />
                  </div>              
                </div>           
              </div>
            </div>
            <div class="px-4">
              <div class="mt-10 lg:mt-0">           
                <h2 class="text-dark mb-8 text-3xl font-bold sm:text-4xl">
                  World Wide Delivery and Economic Advancement
                </h2>
                <p class="text-body-color mb-8 text-base">
                ADLERCARGO Logistics extends and delivers to all cities in the world, at a very affordable rate. Your goods are promptly delivered
                and further endeavours deliveries are fulfilled while the package is still in  a good shape.
                </p>
                <p class="text-body-color mb-12 text-base">
                  We are very dedicated and facilitates economical advancement through transportation of our services to every path of the world
                  thereby facilitating intra-cultural socializations.
                </p>
                <div class="flex item-center justify-start">
                    <a href="{{route('about')}}"
                    class="mx-3 px-4 bg-indigo-500 rounded-full py-4 text-center
                    shadow-md text-base text-white hover:bg-indigo-800
                    hover:text-dark lg:px-8 xl:px-10">
                    Learn more
                    <span aria-hidden="true">&rarr;</span>
                    </a>     
                    <a href="{{route('user.ship')}}"
                    class="mx-3 px-4 bg-white rounded-full py-4 text-center
                    shadow-md text-base text-dark hover:bg-gray-100 lg:px-8 xl:px-10">
                    Start Shipment
                    <span aria-hidden="true">&rarr;</span>
                    </a>            
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- ====== explore Section starts -->
    <section class="relative flex flex-nowrap"  id="explore">
        <div id="explore-content" class="sm:w-full lg:w-1/2 relative">
            <div id="explore-content-inner"  class="p-8">
              <div class="mt-10 lg:mt-0">           
                <h2 class="text-dark mb-8 text-3xl font-bold sm:text-4xl">
                  Experience more today. 24/7 Services.
                </h2>
                <p class="text-body-color mb-8 text-base">
                    ADLERCARGGO connects people in over 220 countries and territories worldwide. 
                    Driven by the power of more than 380,000 employees, we deliver integrated 
                    services and tailored solutions for managing and transporting letters, goods and information
                    with 24 hours of shipment order. 
                </p>
                <p class="text-body-color mb-12 text-base">
                    Sustainable business begins with sustainable supply chains. As the pioneer of 24/7 logistics, 
                    we have an unmatched portfolio of active 24/7 logistics.
                </p>
                <div class="flex item-center justify-start">
                    <a href="{{route('schedule')}}"
                    class="mx-3 px-4 bg-transparent border-2 border-indigo-500 rounded-full py-4 text-center
                    shadow-md text-base text-dark hover:bg-indigo-600 hover:border-transparent hover:text-white lg:px-8 xl:px-10">
                    Schedule Pickup
                    <span aria-hidden="true">&rarr;</span>
                    </a>            
                </div>
              </div>
            </div>           
        </div>
    </section>
   <!-- ====== Services Section Start -->
   <section class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="mycontainer">
      <div class="mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mb-12 max-w-[510px] lg:mb-20">
            <span class="text-indigo-600 mb-2 block text-lg font-semibold">
              Shipping Services
            </span>
            <h2
              class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
            >
             With ADLERCARGGO, all your shipping needs are fulfilled.
            </h2>
            <p class="text-body-color text-base">
              Our shipping services spans through various variety which certfifies we are able to meet all your shipping needs.
            </p>
          </div>
        </div>
      </div>
      <div class="mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M496 124.608L96 524.576V1024h832V556.576z" fill="#EAEAEA"></path><path d="M256 672h224v352H256z" fill="#434854"></path><path d="M544 640h96v96h-96zM672 640h96v96h-96zM672 512h96v96h-96zM544 512h96v96h-96z" fill="#469FCC"></path><path d="M544 512h96v32h-96zM672 512h96v32h-96zM544 640h96v32h-96zM672 640h96v32h-96z" fill=""></path><path d="M496 64L96 480v96L496 176 928 608v-96z" fill=""></path><path d="M1012.576 505.376L541.248 34.048l-22.624-22.624a31.968 31.968 0 0 0-45.248 0l-22.624 22.624L11.424 473.376a31.968 31.968 0 0 0 0 45.248l22.624 22.624a31.968 31.968 0 0 0 45.248 0L496 124.608l448.672 448.672a31.968 31.968 0 0 0 45.248 0l22.624-22.624a32.032 32.032 0 0 0 0.032-45.28z" fill="#6875f5"></path><path d="M238.24 1024A126.656 126.656 0 0 0 256 960a128 128 0 0 0-256 0c0 23.424 6.752 45.088 17.76 64h220.48zM896 832a127.744 127.744 0 0 0-116.224 75.04A94.848 94.848 0 0 0 736 896a96 96 0 0 0-96 96c0 11.296 2.304 21.952 5.888 32h360.384A126.944 126.944 0 0 0 1024 960a128 128 0 0 0-128-128z" fill="#3AAD73"></path><path d="M779.776 907.04A94.848 94.848 0 0 0 736 896a96 96 0 0 0-96 96c0 11.296 2.304 21.952 5.888 32h139.872A126.656 126.656 0 0 1 768 960c0-18.944 4.384-36.768 11.776-52.96z" fill=""></path></g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold">
                <a href="{{route('warehouse')}}" class="text-indigo-500 underline">Warehouse Solutions</a>
            </h4>
            <p class="text-body-color">
                Let us simplify and connect your supply chain from end to end. We are giving you a fast, reliable and regular connection to all corners of the globe.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg viewBox="0 0 32 32" enable-background="new 0 0 32 32" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="0.128"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2"></g> <g id="Layer_3"></g> <g id="Layer_4"></g> <g id="Layer_5"></g> <g id="Layer_6"></g> <g id="Layer_7"></g> <g id="Layer_8"></g> <g id="Layer_9"></g> <g id="Layer_10"></g> <g id="Layer_11"></g> <g id="Layer_12"></g> <g id="Layer_13"></g> <g id="Layer_14"></g> <g id="Layer_15"></g> <g id="Layer_16"></g> <g id="Layer_17"></g> <g id="Layer_18"></g> <g id="Layer_19"> <g> <g> <polygon fill="#11A9F3" points="10.11,26.7284 10,26.787 10,26.6918 "></polygon> </g> <path d="M30.45,9.0999c-0.34-0.1245-0.75-0.1026-1.05,0.066L22,13.2323l-0.11,0.0586l-11.44-4.191 c-0.14-0.0513-0.3-0.0806-0.45-0.0806H9.99c-0.05,0-0.09,0-0.13,0.0073C9.81,9.034,9.77,9.034,9.73,9.0486 C9.68,9.056,9.64,9.0706,9.59,9.0852c-0.04,0.0147-0.07,0.0293-0.11,0.044H9.47C9.44,9.1439,9.42,9.1512,9.4,9.1659l-8,4.3961 C1.15,13.7012,1,13.921,1,14.1482v16.1192c0,0.2784,0.21,0.5348,0.55,0.6521C1.69,30.978,1.85,31,2,31 c0.21,0,0.42-0.0513,0.6-0.1465L10,26.787v-0.0953l0.11,0.0366l11.44,4.191C21.69,30.978,21.85,31,22,31 c0.09,0,0.18-0.0073,0.27-0.0293c0.02,0,0.03-0.0073,0.04-0.0073c0.07-0.0147,0.14-0.0367,0.2-0.066 c0.01,0,0.01-0.0073,0.02-0.0073c0.03-0.0147,0.05-0.022,0.0699-0.0366l8-4.3961c0.25-0.1392,0.4-0.359,0.4-0.5861V9.752 C31,9.4736,30.79,9.2171,30.45,9.0999z" fill="#16BCD4"></path> <path d="M22,13.3349V31c-0.15,0-0.31-0.0293-0.45-0.0806l-11.44-4.191L10,26.6918V9.0193 c0.15,0,0.31,0.0293,0.45,0.0806l11.44,4.191L22,13.3349z" fill="#2197F3"></path> </g> <path d="M22,1c-3.86,0-7,3.09-7,6.89c0,3.58,5.66,9.2,6.3,9.83C21.5,17.91,21.75,18,22,18s0.5-0.09,0.7-0.28 c0.64-0.63,6.3-6.25,6.3-9.83C29,4.09,25.86,1,22,1z" fill="#6875f5"></path> <path d="M24,7.89c0,1.11-0.9,2-2,2s-2-0.89-2-2c0-1.1,0.9-2,2-2S24,6.79,24,7.89z" fill="#2197F3"></path> </g> <g id="Maps_11_"></g> <g id="Maps_10_"></g> <g id="Maps_9_"></g> <g id="Maps_8_"></g> <g id="Maps_7_"></g> <g id="Maps_6_"></g> <g id="Maps_5_"></g> <g id="Maps_4_"></g> <g id="Maps_3_"></g> <g id="Maps_2_"></g> <g id="Maps_1_"></g> <g id="Maps"></g> </g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold">
              <a href="{{route('transport')}}" class="text-indigo-500 underline">Transport and distribution</a>
            </h4>
            <p class="text-body-color">
                We move goods from the place of origin to the destination to the receiver. Systematically picking up the goods, categorizing it base on the location of its destination, it includes the packaging, storage.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.988 511.988" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#CCD1D9;" d="M127.997,195.109c-5.891,0-10.672,4.773-10.672,10.672v12.039c0,5.89,4.781,10.664,10.672,10.664 s10.672-4.773,10.672-10.664v-12.039C138.669,199.882,133.888,195.109,127.997,195.109z"></path> <path style="fill:#CCD1D9;" d="M63.998,226.998c-5.89,0-10.671,4.773-10.671,10.664v12.617c0,5.891,4.781,10.664,10.671,10.664 c5.891,0,10.672-4.773,10.672-10.664v-12.617C74.67,231.772,69.889,226.998,63.998,226.998z"></path> <path style="fill:#CCD1D9;" d="M383.993,195.109c-5.891,0-10.672,4.773-10.672,10.672v12.039c0,5.89,4.781,10.664,10.672,10.664 s10.671-4.773,10.671-10.664v-12.039C394.664,199.882,389.884,195.109,383.993,195.109z"></path> <path style="fill:#CCD1D9;" d="M447.991,226.998c-5.891,0-10.672,4.773-10.672,10.664v12.617c0,5.891,4.781,10.664,10.672,10.664 s10.672-4.773,10.672-10.664v-12.617C458.663,231.772,453.882,226.998,447.991,226.998z"></path> </g> <g> <path style="fill:#E6E9ED;" d="M10.672,341.34c-2.438,0-4.812-0.844-6.734-2.406C1.454,336.903,0,333.872,0,330.653v-42.654 c0-4.016,2.266-7.688,5.844-9.516l202.668-102.795c5.25-2.664,11.671-0.57,14.328,4.688c2.672,5.25,0.562,11.672-4.688,14.336 l-4.437,82.85c5.765-1.203,11.406,2.5,12.609,8.266s-2.5,11.422-8.266,12.609l-205.215,42.67 C12.125,341.246,11.391,341.34,10.672,341.34z"></path> <path style="fill:#E6E9ED;" d="M501.318,341.34c-0.719,0-1.438-0.094-2.172-0.234l-205.215-42.67 c-5.765-1.188-9.468-6.844-8.265-12.609s6.843-9.469,12.608-8.266l-4.438-82.85c-5.249-2.664-7.358-9.086-4.687-14.336 c2.655-5.258,9.077-7.352,14.343-4.688l202.652,102.795c3.594,1.828,5.844,5.5,5.844,9.516v42.654c0,3.219-1.438,6.25-3.938,8.281 C506.131,340.496,503.756,341.34,501.318,341.34z"></path> </g> <g> <path style="fill:#4A89DC;" d="M225.808,374.465c-3.5-1.75-7.688-1.469-10.906,0.781l-61.015,42.67 c-2.859,2-4.562,5.266-4.562,8.734v42.688c0,3.438,1.656,6.656,4.453,8.656c1.844,1.312,4.016,2,6.219,2 c1.156,0,2.312-0.188,3.422-0.562l62.889-21.344c4.438-1.5,7.375-5.719,7.234-10.406l-1.859-63.998 C231.574,379.777,229.308,376.215,225.808,374.465z"></path> <path style="fill:#4A89DC;" d="M358.102,417.916l-61.015-42.67c-3.219-2.25-7.405-2.531-10.905-0.781s-5.766,5.312-5.875,9.219 l-1.859,63.998c-0.141,4.688,2.797,8.906,7.234,10.406l62.889,21.344c1.109,0.375,2.266,0.562,3.422,0.562 c2.203,0,4.375-0.688,6.219-2c2.797-2,4.453-5.219,4.453-8.656V426.65C362.665,423.182,360.962,419.916,358.102,417.916z"></path> </g> <path style="fill:#6875f5;" d="M287.511,479.994h-64c-5.766,0-10.484-4.578-10.656-10.344 c-0.438-14.375-10.672-352.399-10.672-373.649c0-13.344,5.047-31.078,12.875-45.179c10.562-19.015,24.937-29.484,40.453-29.484 s29.891,10.469,40.437,29.484c7.828,14.101,12.891,31.835,12.891,45.179c0,21.25-10.234,359.274-10.672,373.649 C297.994,475.416,293.275,479.994,287.511,479.994z"></path> <path style="fill:#F5F7FA;" d="M286.823,92.228c-0.469-1.234-2.375-5.586-7.297-9.727c-4.25-3.57-11.859-7.836-24.016-7.836 c-19.484,0-28.843,11.039-31.312,17.562c-2.078,5.516,0.703,11.672,6.203,13.75c1.25,0.469,2.516,0.695,3.766,0.695 c4.156,0,8.078-2.445,9.812-6.453C244.354,99.563,246.791,96,255.51,96c8.719,0,11.156,3.562,11.531,4.219 c2.25,5.211,8.219,7.781,13.578,5.757C286.12,103.892,288.901,97.736,286.823,92.228z"></path> <path style="fill:#4A89DC;" d="M255.511,490.65c-5.891,0-10.672-4.766-10.672-10.656V405.34c0-5.906,4.781-10.688,10.672-10.688 c5.891,0,10.672,4.781,10.672,10.688v74.654C266.183,485.885,261.401,490.65,255.511,490.65z"></path> </g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold"><a href="{{route('air')}}" class="text-indigo-500 underline">Air Freight</a></h4>
            <p class="text-body-color">
                We are giving you a fast, reliable and regular connection to all corners of the globe. Extensive Routes. 300 Ports Worldwide
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="200" height="200" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.98 511.98" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#434A54;" d="M138.657,181.315c-5.891,0-10.656-4.766-10.656-10.656v-21.343c0-5.891,4.766-10.664,10.656-10.664 s10.671,4.773,10.671,10.664v21.343C149.328,176.549,144.547,181.315,138.657,181.315z"></path> <path style="fill:#434A54;" d="M74.657,181.315c-5.891,0-10.656-4.766-10.656-10.656v-21.343c0-5.891,4.766-10.664,10.656-10.664 s10.672,4.773,10.672,10.664v21.343C85.329,176.549,80.548,181.315,74.657,181.315z"></path> </g> <path style="fill:#E6E9ED;" d="M138.657,309.327h-64c-5.891,0-10.656-4.779-10.656-10.654V170.658 c0-5.89,4.766-10.671,10.656-10.671h63.999c5.89,0,10.671,4.781,10.671,10.671v128.014 C149.328,304.548,144.547,309.327,138.657,309.327z"></path> <rect x="64" y="181.319" style="fill:#5D9CEC;" width="85.33" height="32"></rect> <rect x="96" y="213.309" style="fill:#CCD1D9;" width="21.328" height="85.36"></rect> <rect x="138.66" y="255.979" style="fill:#48CFAD;" width="63.999" height="42.695"></rect> <rect x="170.66" y="213.309" style="fill:#FFCE54;" width="63.999" height="42.664"></rect> <rect x="202.65" y="170.659" style="fill:#A0D468;" width="63.999" height="42.656"></rect> <rect x="266.65" y="170.659" style="fill:#FC6E51;" width="63.99" height="42.656"></rect> <rect x="234.65" y="213.309" style="fill:#ED5564;" width="63.991" height="42.664"></rect> <rect x="298.64" y="213.309" style="fill:#A0D468;" width="63.999" height="42.664"></rect> <rect x="202.65" y="255.979" style="fill:#FC6E51;" width="63.999" height="42.695"></rect> <rect x="266.65" y="255.979" style="fill:#FFCE54;" width="63.99" height="42.695"></rect> <rect x="330.64" y="255.979" style="fill:#FC6E51;" width="63.999" height="42.695"></rect> <path style="fill:#656D78;" d="M511.141,273.173c-1.656-3.945-5.531-6.508-9.828-6.508h-106.67c-1.656,0-3.28,0.375-4.765,1.125 l-40.406,20.195H10.659c-3.922,0-7.547,2.188-9.406,5.656c-1.844,3.438-1.641,7.656,0.531,10.938l42.671,63.998 c1.984,2.969,5.312,4.75,8.875,4.75h364.562c2.875,0,5.625-1.156,7.625-3.219l83.421-85.342 C511.938,281.704,512.813,277.141,511.141,273.173z"></path> <g> <path style="fill:#434A54;" d="M103.532,323.108c4.172,4.156,4.172,10.938,0,15.094c-4.156,4.156-10.906,4.156-15.078,0 c-4.172-4.156-4.172-10.938,0-15.094C92.626,318.952,99.376,318.952,103.532,323.108z"></path> <path style="fill:#434A54;" d="M167.531,323.108c4.172,4.156,4.172,10.938,0,15.094c-4.156,4.156-10.906,4.156-15.078,0 s-4.172-10.938,0-15.094S163.375,318.952,167.531,323.108z"></path> <path style="fill:#434A54;" d="M231.53,323.108c4.172,4.156,4.172,10.938,0,15.094c-4.156,4.156-10.906,4.156-15.078,0 c-4.171-4.156-4.171-10.938,0-15.094C220.623,318.952,227.373,318.952,231.53,323.108z"></path> <path style="fill:#434A54;" d="M295.52,323.108c4.172,4.156,4.172,10.938,0,15.094c-4.156,4.156-10.905,4.156-15.077,0 s-4.172-10.938,0-15.094S291.364,318.952,295.52,323.108z"></path> <path style="fill:#434A54;" d="M359.519,323.108c4.172,4.156,4.172,10.938,0,15.094c-4.156,4.156-10.906,4.156-15.078,0 s-4.172-10.938,0-15.094S355.363,318.952,359.519,323.108z"></path> </g> </g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold"><a href="{{route('ocean')}}" class="text-indigo-500 underline">Ocean Freight</a></h4>
            <p class="text-body-color">
                Adlercargo offers fast sea delivery at a very low cost to every part of the world, made possible through our esteemed partners worldwide and our endearing dedication to our clients.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.99 511.99" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon style="fill:#E6E9ED;" points="310.432,373.088 329.759,181.216 420.929,181.122 461.022,241.231 501.318,281.512 501.131,373.088 "></polygon> <polygon style="fill:#4FC2E9;" points="456.491,234.434 420.929,181.122 329.759,181.216 324.399,234.434 "></polygon> <path style="fill:#E6E9ED;" d="M469.304,234.434l-42.672-63.983l-106.514,0.109l-21.468,213.2h213.121l0.219-106.654 L469.304,234.434z M490.475,362.432H322.227l17.188-170.559l75.812-0.078l36.343,54.483l1.172,1.75l1.484,1.5l36.422,36.39 L490.475,362.432z"></path> <path style="fill:#CCD1D9;" d="M319.977,85.124H21.343C9.562,85.124,0,94.671,0,106.452v255.979 c0,11.781,9.547,21.328,21.328,21.328h298.65c11.781,0,21.328-9.547,21.328-21.328V106.452 C341.306,94.671,331.759,85.124,319.977,85.124z"></path> <g> <circle style="fill:#434A54;" cx="415.975" cy="373.536" r="53.33"></circle> <circle style="fill:#434A54;" cx="96.015" cy="373.536" r="53.33"></circle> </g> <g> <path style="fill:#F5F7FA;" d="M405.32,373.541c0,5.891,4.766,10.656,10.656,10.656s10.671-4.766,10.671-10.656 s-4.781-10.672-10.671-10.672C410.086,362.869,405.32,367.65,405.32,373.541z"></path> <path style="fill:#F5F7FA;" d="M85.342,373.541c0,5.891,4.781,10.656,10.671,10.656s10.656-4.766,10.656-10.656 s-4.766-10.672-10.656-10.672S85.342,367.65,85.342,373.541z"></path> </g> <g> <path style="fill:#656D78;" d="M42.686,277.105c-5.906,0-10.671,4.766-10.671,10.656v21.342c0,5.891,4.766,10.656,10.671,10.656 c5.891,0,10.656-4.766,10.656-10.656v-21.342C53.343,281.871,48.577,277.105,42.686,277.105z"></path> <path style="fill:#656D78;" d="M85.342,277.105c-5.891,0-10.672,4.766-10.672,10.656v21.342c0,5.891,4.781,10.656,10.672,10.656 c5.89,0,10.671-4.766,10.671-10.656v-21.342C96.014,281.871,91.232,277.105,85.342,277.105z"></path> <path style="fill:#656D78;" d="M127.997,277.105c-5.875,0-10.656,4.766-10.656,10.656v21.342c0,5.891,4.781,10.656,10.656,10.656 c5.906,0,10.672-4.766,10.672-10.656v-21.342C138.669,281.871,133.904,277.105,127.997,277.105z"></path> <path style="fill:#656D78;" d="M170.668,277.105c-5.891,0-10.671,4.766-10.671,10.656v21.342c0,5.891,4.781,10.656,10.671,10.656 s10.672-4.766,10.672-10.656v-21.342C181.34,281.871,176.559,277.105,170.668,277.105z"></path> <path style="fill:#656D78;" d="M213.34,277.105c-5.906,0-10.672,4.766-10.672,10.656v21.342c0,5.891,4.766,10.656,10.672,10.656 c5.89,0,10.656-4.766,10.656-10.656v-21.342C223.995,281.871,219.23,277.105,213.34,277.105z"></path> <path style="fill:#656D78;" d="M255.995,277.105c-5.891,0-10.672,4.766-10.672,10.656v21.342c0,5.891,4.781,10.656,10.672,10.656 s10.672-4.766,10.672-10.656v-21.342C266.667,281.871,261.886,277.105,255.995,277.105z"></path> <path style="fill:#656D78;" d="M298.65,277.105c-5.875,0-10.655,4.766-10.655,10.656v21.342c0,5.891,4.78,10.656,10.655,10.656 c5.906,0,10.672-4.766,10.672-10.656v-21.342C309.322,281.871,304.557,277.105,298.65,277.105z"></path> </g> <rect x="362.505" y="191.776" style="fill:#3BAFDA;" width="21.328" height="42.655"></rect> <path style="fill:#5D9CEC;" d="M319.977,85.124H21.343C9.562,85.124,0,94.671,0,106.452v191.981h341.306V106.452 C341.306,94.671,331.759,85.124,319.977,85.124z"></path> </g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold">
              <a href="{{route('road')}}" class="text-indigo-500 underline">Road Freight</a>
            </h4>
            <p class="text-body-color">
                We Offer Pick-Up Service from Your Door & Deliver It to the city of Your Choice. Insured Package quality and units.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="mb-8 rounded-[20px] bg-white p-10 shadow-md hover:shadow-lg md:px-7 xl:px-10"
          >
            <div
              class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl"
            >
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.991 511.991" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#CCD1D9;" d="M426.648,362.665c-12.718,0-24.155,5.608-31.999,14.499c-7.812-8.891-19.249-14.499-31.999-14.499 c-23.516,0-42.656,19.14-42.656,42.671c0,23.53,19.141,42.655,42.656,42.655c12.75,0,24.188-5.609,31.999-14.484 c7.844,8.875,19.281,14.484,31.999,14.484c23.531,0,42.688-19.125,42.688-42.655C469.336,381.805,450.18,362.665,426.648,362.665z"></path> <g> <path style="fill:#434A54;" d="M370.213,397.789c4.156,4.172,4.156,10.922,0,15.094c-4.188,4.155-10.938,4.155-15.094,0 c-4.156-4.172-4.156-10.922,0-15.094C359.275,393.633,366.025,393.633,370.213,397.789z"></path> <path style="fill:#434A54;" d="M434.211,397.789c4.156,4.172,4.156,10.922,0,15.094c-4.188,4.155-10.938,4.155-15.094,0 c-4.155-4.172-4.155-10.922,0-15.094C423.273,393.633,430.023,393.633,434.211,397.789z"></path> </g> <path style="fill:#6875f5;" d="M501.335,255.995h-68.312c-5.875,0-10.656,4.781-10.656,10.672v42.67 c0,5.891,4.781,10.656,10.656,10.656h68.312c5.875,0,10.656-4.766,10.656-10.656v-42.67 C511.991,260.776,507.21,255.995,501.335,255.995z"></path> <path style="fill:#E6E9ED;" d="M415.993,170.668H309.339c-17.656,0-31.999-14.358-31.999-31.999c0-3.734,0.625-7.328,1.812-10.672 H32c-17.648,0-32-14.343-32-31.999C0,78.358,14.351,64,32,64h362.649c17.656,0,31.999,14.358,31.999,31.999 c0,4.172-0.781,8.141-2.25,11.797c13.594,3.703,23.594,16.14,23.594,30.874C447.992,156.309,433.648,170.668,415.993,170.668z"></path> <path style="fill:#434A54;" d="M415.993,191.996h-42.655c-5.906,0-10.688,4.781-10.688,10.672v63.999 c0,5.89,4.781,10.671,10.688,10.671h42.655c5.89,0,10.655-4.781,10.655-10.671v-63.999 C426.648,196.777,421.883,191.996,415.993,191.996z"></path> <path style="fill:#F6BB42;" d="M117.334,404.867H53.336c-5.891,0-10.672-4.781-10.672-10.672V202.668 c0-5.891,4.781-10.672,10.672-10.672h63.999c5.891,0,10.664,4.781,10.664,10.672v191.527 C127.998,400.086,123.225,404.867,117.334,404.867z"></path> <path style="fill:#656D78;" d="M437.336,255.995H226.184c-29.406,0-53.327,23.937-53.327,53.342v42.656 c0,29.421,23.921,53.343,53.327,53.343h211.152c29.406,0,53.312-23.922,53.312-53.343v-42.656 C490.648,279.932,466.742,255.995,437.336,255.995z"></path> <path style="fill:#6875f5;" d="M245.332,191.996H117.334c-5.89,0-10.671,4.781-10.671,10.672v191.527 c0,5.891,4.781,10.672,10.671,10.672h127.998c5.891,0,10.664-4.781,10.664-10.672V202.668 C255.996,196.777,251.223,191.996,245.332,191.996z"></path> <g> <path style="fill:#E6E9ED;" d="M266.66,362.665c-23.523,0-42.664,19.14-42.664,42.671c0,23.53,19.14,42.655,42.664,42.655 s42.679-19.125,42.679-42.655C309.339,381.805,290.184,362.665,266.66,362.665z"></path> <path style="fill:#E6E9ED;" d="M181.333,362.665c-23.531,0-42.671,19.14-42.671,42.671c0,23.53,19.14,42.655,42.671,42.655 c23.523,0,42.663-19.125,42.663-42.655C223.996,381.805,204.856,362.665,181.333,362.665z"></path> <path style="fill:#E6E9ED;" d="M95.999,362.665c-23.523,0-42.663,19.14-42.663,42.671c0,23.53,19.14,42.655,42.663,42.655 s42.664-19.125,42.664-42.655C138.663,381.805,119.522,362.665,95.999,362.665z"></path> </g> <path style="fill:#434A54;" d="M266.66,415.991H95.999c-5.891,0-10.664-4.765-10.664-10.655s4.773-10.672,10.664-10.672H266.66 c5.898,0,10.68,4.781,10.68,10.672S272.558,415.991,266.66,415.991z"></path> <g> <path style="fill:#6875f5;" d="M53.336,255.995c5.891,0,10.664-4.766,10.664-10.656s-4.773-10.672-10.664-10.672H42.664v21.328 H53.336z"></path> <path style="fill:#6875f5;" d="M53.336,298.666c5.891,0,10.664-4.766,10.664-10.672c0-5.891-4.773-10.656-10.664-10.656H42.664 v21.328H53.336z"></path> <path style="fill:#6875f5;" d="M53.336,341.337c5.891,0,10.664-4.781,10.664-10.672s-4.773-10.672-10.664-10.672H42.664v21.344 H53.336z"></path> </g> <path style="fill:#4FC2E9;" d="M255.996,202.668c0-5.891-4.773-10.672-10.664-10.672H117.334c-5.89,0-10.671,4.781-10.671,10.672 v53.327h149.333V202.668z"></path> <rect x="170.666" y="191.995" style="fill:#3BAFDA;" width="21.335" height="63.999"></rect> </g></svg>
            </div>
            <h4 class="text-dark mb-3 text-xl font-semibold"><a href="{{route('rail')}}" class="text-indigo-500 underline">Rail Freight</a></h4>
            <p class="text-body-color">
                Lets transport your goods on trains via rail, as opposed to air, ocean or road transport at very low fees. Available in EU and Asia.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- ESTIMATE/CONTACT US --}}
  <div class="relative" id="index-contact">
    <div id="index-contact-content" class="sm:w-full lg:w-1/2 relative 
    pt-20 pb-12 px-4 lg:pt-[120px] lg:pb-[90px] lg:flex lg:items-center lg:justify-around lg:py-16 lg:px-8">
        <div id="index-contact-content-inner">
            <h2 class="text-3xl font-bold tracking-tight text-gray-50 sm:text-4xl mb-4">
                <span class="block">Get a free estimate today</span>
                <span class="block text-gray-50 text-sm mb-4">Adlercargo offers lowest cost on your consignments.<br> Cheap rates and Safety guranteed!</span>
                <span class="block text-indigo-500">Need help? Contact us today...</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex bg-transparent border-2 border-indigo-500 rounded-full text-white shadow-md hover:bg-white border-white hover:text-indigo-600">
                    <a href="" class="inline-flex items-center justify-center px-5 py-3 text-base">
                    Get estimate
                    <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
                <div class="ml-3 inline-flex bg-indigo-600 rounded-full shadow-md text-white hover:bg-indigo-800">
                    <a href="" class="inline-flex items-center justify-center px-5 py-3 text-base">
                    Contact us
                    <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
  </div>
    {{-- FOOTER --}}
    <x-footer></x-footer>
</x-app-layout>
<script>
  Livewire.on('invalidTracker', (e) => {
      toastr.error('Error! Invalid Tracking code.');
  })

  Livewire.on('emptyTracker', (e) => {
      toastr.error('Error! Empty input.');
  })
</script>