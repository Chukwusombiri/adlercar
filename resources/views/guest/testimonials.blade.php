<x-app-layout>
    {{-- breadcrumb --}}
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
        <nav class="text-black font-bold" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-blue-600">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.293 3.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 9H3a1 1 0 110-2h9.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-600">Reviews</span>
                </li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Customer Reviews</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              What Our Customers Say
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                We're committed to providing the best possible service to our customers. Here are some reviews from satisfied customers who have used our shipping services.
            </p>
          </div>
      
          <div class="mt-10">
            <div class="md:grid md:grid-cols-2 md:gap-6">
                {{-- individual review --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Annabel Mckay</h3>
                        <div class="text-base font-medium text-gray-500">Rio de Janeiro, Brazil</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"I have been using ADLERCARGO for a year now and they have always provided great service. Their team is very responsive and always delivers on time. Highly recommended!"</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv2.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Emily Rodriguez</h3>
                        <div class="text-base font-medium text-gray-500">Sydney, Australia</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"I recently used ADLERCARGO for a shipping service and I was very impressed with their customer service, timely delivery, and overall experience. Highly recommend!"</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv3.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Lucy Kim</h3>
                                        <div class="text-base font-medium text-gray-500">Miami, FL</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"AdlerCargo provided excellent customer service and ensured that our delivery was on time and in perfect condition. Highly recommend!"</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv4.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Sandall Johnson</h3>
                        <div class="text-base font-medium text-gray-500">New York, NY</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"AdlerCargo made our international shipment a breeze! Their team was very responsive and helped us navigate the complex logistics. Would definitely use them again."</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv5.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Michael Leon</h3>
                                        <div class="text-base font-medium text-gray-500">Los Angeles, CA</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"AdlerCargo was recommended to us by a friend and they did not disappoint. Our package arrived on time and in perfect condition. Thank you!"</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv6.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Miley Garcia</h3>
                        <div class="text-base font-medium text-gray-500">Houston, TX</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"I've used AdlerCargo for several shipments and they've always been reliable and professional. Great company!"</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>{{-- here --}}
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv7.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Cameron Ortiz</h3>
                                        <div class="text-base font-medium text-gray-500">Cairo, Egypt</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"AdlerCargo went above and beyond to make sure our shipment arrived on time."</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv8.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Alex Davis</h3>
                        <div class="text-base font-medium text-gray-500">Toronto, Canada</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"Adlercargo has quickly become my go-to shipping company. They offer great rates and always deliver my packages on time."</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv9.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Noami Lee</h3>
                                        <div class="text-base font-medium text-gray-500">Berlin, Germany</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"I was hesitant to use a new shipping company, but Adlercargo exceeded all of my expectations. Their tracking system is top-notch, and their staff is friendly and knowledgeable."</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv10.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Coufal Ramirez</h3>
                        <div class="text-base font-medium text-gray-500">London, United Kingdom</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"I had a difficult shipment that required special handling, and Adlercargo went above and beyond to make sure it was delivered safely and on time. I highly recommend their services."</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv11.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">William Chen</h3>
                                        <div class="text-base font-medium text-gray-500">Istanbul, Turkey</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"I have used Adlercargo multiple times, and each time has been a great experience. Their website is user-friendly, and their shipping options are comprehensive."</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv12.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Evans Jackson</h3>
                        <div class="text-base font-medium text-gray-500">Moscow, Russia</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"Adlercargo makes shipping easy and stress-free. I appreciate their attention to detail and their commitment to customer satisfaction."</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv13.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Hannah Huang</h3>
                                        <div class="text-base font-medium text-gray-500">Beijing, China</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"I had a last-minute shipping emergency, and Adlercargo was able to provide me with a solution that worked for my timeline and budget. I am grateful for their flexibility and reliability."</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                            {{-- single --}}
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                  <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:flex sm:space-x-4">
                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv14.jpg')}}" alt="Person">
                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Mia Wilson</h3>
                        <div class="text-base font-medium text-gray-500">New York, United States</div>
                        <div class="mt-2 text-gray-600 text-md">
                          <p>"Adlercargo's team is knowledgeable and responsive. They were able to answer all of my questions and provide me with the information I needed to make informed decisions about my shipment."</p>
                        </div>
                        <div class="mt-4">
                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                          <span class="ml-1 inline-flex items-center">
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                            {{-- single --}}
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                                  <div class="sm:flex sm:items-center sm:justify-between">
                                    <div class="sm:flex sm:space-x-4">
                                      <img class="mx-auto h-20 w-20 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{url('images/reviews/rv15.jpg')}}" alt="Person">
                                      <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Daniel Garcia</h3>
                                        <div class="text-base font-medium text-gray-500">Tokyo, Japan</div>
                                        <div class="mt-2 text-gray-600 text-md">
                                          <p>"The shipping industry can be confusing, but Adlercargo makes it simple. Their website provides all of the information I need to make shipping decisions, and their rates are competitive."</p>
                                        </div>
                                        <div class="mt-4">
                                          <span class="text-sm font-medium text-gray-900">Rating:</span>
                                          <span class="ml-1 inline-flex items-center">
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1l2.928 6.016L19 7.278l-4.454 4.327.937 6.042L10 16.294l-4.483 2.353.937-6.042L1 7.278l5.072.738L10 1z" />
                                            </svg>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>                                    
              {{-- end of single review --}}
            </div>
          </div>
        </div>
    </div>
    {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('about')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">About Us</h3>
              <p class="text-gray-600">Learn more about our company and our mission.</p>
            </a>
          </div>
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('faqs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">Frequently asked questions</h3>
              <p class="text-gray-600">Learn more about us and our services through Frequently Asked Questions.</p>
            </a>
          </div>
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('blogs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">Our Blog</h3>
              <p class="text-gray-600">Read the latest news and updates from our team.</p>
            </a>
          </div>
        </div>
      </div>
    <x-footer></x-footer>
</x-app-layout>