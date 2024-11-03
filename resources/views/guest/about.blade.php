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
                <span class="text-gray-600">About us</span>
            </li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-8">
          <div class="md:col-span-1">
            <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
            <p class="text-gray-700 leading-relaxed mb-4">ADLERCARGO is a global shipping company that provides a wide range of logistics and transportation services to businesses and individuals worldwide. Our team of experienced professionals is dedicated to delivering reliable and cost-effective shipping solutions that meet the unique needs of our customers.</p>
            <p class="text-gray-700 leading-relaxed mb-4">Since our founding in 1995, we have grown to become one of the most trusted names in the shipping industry. We pride ourselves on our commitment to quality, integrity, and customer satisfaction.</p>
            <p class="text-gray-700 leading-relaxed mb-4">Whether you need to ship a small package or manage complex global supply chains, ADLERCARGO has the expertise and resources to help you achieve your business goals. <a href="{{route('contact')}}" class="text-blue-500 hover:underline">Contact us</a> today to learn more about our services and how we can help you succeed.</p>
          </div>
          <div class="md:col-span-1">
            <img src="{{url('images/who_we_are.jpg')}}" alt="ADLERCARGO Warehouse" class="rounded-lg shadow-lg">
          </div>
        </div>
    </div>
    <div class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-20">
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="md:col-span-1">
                <p class="text-gray-700 leading-relaxed mb-4">At ADLERCARGO, our mission is to provide our customers with the highest level of service and support in the shipping industry. We are committed to:</p>
                <ul class="ml-8 list-disc text-gray-700 leading-relaxed mb-4 space-y-2">
                <li>Delivering reliable and cost-effective shipping solutions that meet the unique needs of our customers</li>
                <li>Ensuring the safety and security of our customers' shipments</li>
                <li>Continuously improving our processes and services to better serve our customers</li>
                <li>Maintaining a culture of excellence, integrity, and customer satisfaction</li>
                </ul>
                <p class="text-gray-700 leading-relaxed mb-4">We believe that by putting our customers first and striving for excellence in everything we do, we can help our customers achieve their business goals and succeed in an ever-changing global marketplace.</p>
            </div>
            <div class="md:col-span-1">
                <img src="{{url('images/access_1.jpeg')}}" alt="ADLERCARGO Shipping Containers" class="rounded-lg shadow-lg">
            </div>
            </div>
        </div>
    </div>
    
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Our Values</h2>
            <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover:bg-slate-100">
                <h3 class="text-2xl font-bold mb-4">Reliability</h3>
                <p class="text-gray-700 leading-loose">At ADLERCARGO, we take pride in providing reliable and consistent shipping services to our customers. You can count on us to deliver your packages on time and in good condition.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover:bg-slate-100">
                <h3 class="text-2xl font-bold mb-4">Integrity</h3>
                <p class="text-gray-700 leading-loose">We believe in being transparent and honest in our dealings with customers, partners, and employees. Our commitment to integrity guides us in providing ethical and fair services.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover:bg-slate-100">
                <h3 class="text-2xl font-bold mb-4">Innovation</h3>
                <p class="text-gray-700 leading-loose">We strive to innovate and improve our shipping services to meet the evolving needs of our customers. Our team is always exploring new technologies and approaches to enhance our operations.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="py-16" id="team">
        <div class="container mx-auto px-8">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Our Team</h2>
            <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{url('images/ceo.jpg')}}" alt="Team member" class="w-full h-64 object-scale-down object-top">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Joe M. Kiyosaki</h3>
                    <p class="text-gray-700 leading-loose">Chief Executive Officer</p>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{url('images/BA.jpg')}}" alt="Team member" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Paul Mcneil</h3>
                    <p class="text-gray-700 leading-loose">Business Administrator</p>
                </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{url('images/stepanie.jpg')}}" alt="Team member" class="w-full h-64 object-cover">
                    <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Stephanie Burges</h3>
                    <p class="text-gray-700 leading-loose">Marketing Manager</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('faqs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">FAQs</h3>
              <p class="text-gray-600">Learn more about us and our services through Frequently Asked Questions.</p>
            </a>
          </div>
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('testimonials')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">Popular Reviews</h3>
              <p class="text-gray-600">Find out what clients have to say about ADLERCARGO, services and our team.</p>
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