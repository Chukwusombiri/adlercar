      <!-- ====== Footer Section Start -->
      <footer class="relative bg-gray-300 pt-20" style="overflow-x: hidden">
        <div class="container mx-auto">
            <div class="mx-4 flex flex-wrap">
                <div class="w-full px-4 sm:w-2/3 lg:w-3/12">
                    <div class="mb-10 w-full">
                        <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                        <p class="text-body-color mb-7 text-base">
                            ADLERCARGO is an international team of over 400,000 shipping professionals as innovative and 
                            passionate as a start-up, with the power of an international organization.
                        </p>   
                        <p class="italic text-gray-700 text-base font-bold">Adding Speed To Your Deliveries. Your Package In Our Safe Hands</p>             
                    </div>
                </div>
                {{-- COMPANY --}}
                <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                    <div class="hidden sm:block mb-10 w-full">
                        <h4 class="text-dark mb-9 text-lg font-semibold">Company</h4>
                        <ul>
                        <li>
                            <a
                            href="{{route('about')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            About ADLERCARGO
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('testimonials')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Customer Reviews
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('contact')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Contact & Support
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('about').'#team'}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Our team
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('faqs')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            FAQs
                            </a>
                        </li>
                        </ul>
                    </div>
                    {{-- mobile --}}
                    <div x-data={open:false} class="sm:hidden mb-10 w-full border-b-2 border-gray-400">
                        <h4 x-on:click="open = ! open" class="text-dark mb-9 text-lg font-semibold">Company <i style="color:#857c7c;font-size:20px" class="las la-angle-down "></i></h4>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" >
                            <li>
                                <a
                                href="{{route('about')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                About ADLERCARGO
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('testimonials')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Customer Reviews
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('contact')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Contact & Support
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('about').'#team'}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Our team
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('faqs')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                FAQs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>                
                {{-- SERVICES --}}
                <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                    <div class="hidden sm:block mb-10 w-full">
                        <h4 class="text-dark mb-9 text-lg font-semibold">Services</h4>
                        <ul>
                        <li>
                            <a
                            href="{{route('warehouse')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Warehouse Solutions
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('transport')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Transport and Distribution
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('air')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Air Freight
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('ocean')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Ocean Freight
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('road')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Road Freight
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('rail')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Rail Freight
                            </a>
                        </li>
                        </ul>
                    </div>
                    {{-- mobile --}}
                    <div x-data={open:false} class="sm:hidden mb-10 w-full border-b-2 border-gray-400">
                        <h4 x-on:click="open = ! open" class="text-dark mb-9 text-lg font-semibold">Services <i style="color:#857c7c;font-size:20px" class="las la-angle-down "></i></h4>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" >
                            <li>
                                <a
                                href="{{route('warehouse')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Warehouse Solutions
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('transport')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Transport and Distribution
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('air')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Air Freight
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('ocean')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Ocean Freight
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('road')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Road Freight
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('rail')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Rail Freight
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- Quick Links --}}
                <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                    <div class="hidden sm:block mb-10 w-full">
                        <h4 class="text-dark mb-9 text-lg font-semibold">Quick Links</h4>
                        <ul>
                        <li>
                            <a
                            href="{{route('guestHome')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Home
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('user.ship')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Shipping
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('blogs')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Insights and Innovation
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('quote')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Instant Quote
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('terms.show')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Terms of service
                            </a>
                        </li>
                        <li>
                            <a
                            href="{{route('policy.show')}}"
                            class="text-body-color hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                            >
                            Privacy Policy
                            </a>
                        </li>
                        </ul>
                    </div>
                    {{-- mobile --}}
                    <div x-data={open:false} class="sm:hidden mb-10 w-full border-b-2 border-gray-400">
                        <h4 x-on:click="open = ! open" class="text-dark mb-9 text-lg font-semibold">Quick Links <i style="color:#857c7c;font-size:20px" class="las la-angle-down "></i></h4>
                        <ul x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95" >
                            <li>
                                <a
                                href="{{route('guestHome')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Home
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('user.ship')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Shipping
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('blogs')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Insights and Innovation
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('quote')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Instant Quote
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('terms.show')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Terms of service
                                </a>
                            </li>
                            <li>
                                <a
                                href="{{route('policy.show')}}"
                                class="text-gray-800 hover:text-slate-500 mb-2 inline-block text-base leading-loose"
                                >
                                Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                    <div class="mb-10 w-full">
                        <h4 class="text-dark mb-9 text-lg font-semibold">Contact Us On</h4>
                        <div class="mb-6 items-center">
                            <div class="flex flex-nowrap pb-4">
                                <a
                                href="tel:{{$adler->tel ?? '09045372121'}}"
                                class="text-dark bg-slate-300 hover:bg-indigo-600 hover:border-primary mr-3 flex h-8 w-8 items-center 
                                justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-2 lg:mr-1 xl:mr-2"
                                >
                                    <svg
                                    width="16"
                                    height="16"
                                    viewBox="0 0 16 16"
                                    class="fill-current"
                                    >
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                    
                                </a>
                                <span>{{$adler->tel ?? '09045372121'}}</span>
                            </div>
                            <div class="flex flex-nowrap">
                                <a
                                href="mailto:{{$adler->email ?? 'support@adlercargo.com'}}"
                                class="text-dark bg-slate-300 hover:bg-indigo-600 hover:border-primary mr-3 flex h-8 w-8 items-center 
                                justify-center rounded-full border border-[#E5E5E5] hover:text-white sm:mr-2 lg:mr-1 xl:mr-2"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" 
                                height="16" 
                                fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"> 
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/> 
                                </svg>                        
                                </a>     
                                <span>{{$adler->email ?? 'support@adlercargo.com'}}</span>  
                            </div>                        
                        </div>
                        <div class="items-center">
                            <p class="text-body-color text-base">&copy; {{now()->format('Y')}} ADLERCARGO LTD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 bottom-0 z-[-1]">
                <svg
                width="217"
                height="229"
                viewBox="0 0 217 229"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                    fill="url(#paint0_linear_1179_5)"
                />
                <defs>
                    <linearGradient
                    id="paint0_linear_1179_5"
                    x1="76.5"
                    y1="281"
                    x2="76.5"
                    y2="1.22829e-05"
                    gradientUnits="userSpaceOnUse"
                    >
                    <stop stop-color="#3056D3" stop-opacity="0.08" />
                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
                </svg>
            </span>
            <span class="absolute top-10 right-10 z-[-1]">
                <svg
                width="75"
                height="75"
                viewBox="0 0 75 75"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z"
                    fill="url(#paint0_linear_1179_4)"
                />
                <defs>
                    <linearGradient
                    id="paint0_linear_1179_4"
                    x1="-1.63917e-06"
                    y1="37.5"
                    x2="75"
                    y2="37.5"
                    gradientUnits="userSpaceOnUse"
                    >
                    <stop stop-color="#13C296" stop-opacity="0.31" />
                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                    </linearGradient>
                </defs>
                </svg>
            </span>
        </div>
        <!-- Footer -->
        <div class="bg-gray-800 py-4">
            <div class="container mx-auto flex flex-wrap justify-center items-center gap-x-1">
                <p class="w-full text-gray-300 text-center">&copy; {{now()->format('Y')}} ADLERCARGO LTD. All rights reserved.</p>              
            </div>
        </div>
    </footer>
  <!-- ====== Footer Section End -->
  