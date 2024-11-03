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
                    <span class="text-gray-600">Warehouse Solutions</span>
                </li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- intro --}}
    <section class="py-10 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            Secure and flexible storage options
          </h2>
          <p class="mt-4 text-lg text-gray-500">
            At ADLERCARGO, we understand the importance of safe and efficient storage solutions. That's why we offer a range of warehouse
             options designed to meet your unique business needs. Our state-of-the-art facilities are equipped with the latest security 
             features and our expert staff ensures that your inventory is properly stored and ready for distribution at a moment's 
             notice.
          </p>
          <p class="mt-4 text-lg text-gray-500">Our warehouses are strategically located to provide easy access to major transportation hubs and 
            are equipped with next-generation technology to ensure the safety and security of your products.</p>
        </div>
      </section>
      <section class="py-10 px-4 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            Our warehouse features
          </h2>
          <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white rounded-lg shadow-lg">
              <div class="px-6 py-8">
                <img src="{{url('images/warehouse/spacious.jpg')}}" alt="Warehouse" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-lg font-medium text-gray-900">Spacious storage areas</h3>
                <p class="mt-4 text-base text-gray-500">Our warehouses provide ample space to accommodate your inventory, whether you require short-term or long-term storage.</p>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg">
              <div class="px-6 py-8">
                <img src="{{url('images/warehouse/security.jpg')}}" alt="Security" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-lg font-medium text-gray-900">Advanced security measures</h3>
                <p class="mt-4 text-base text-gray-500">We use the latest security technology to keep your inventory safe and secure, including 24/7 surveillance and access controls.</p>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg">
              <div class="px-6 py-8">
                <img src="{{url('images/warehouse/flexible.jpg')}}" alt="Flexibility" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-lg font-medium text-gray-900">Flexible storage options</h3>
                <p class="mt-4 text-base text-gray-500">We offer a range of storage options, including pallet racking, shelving and bulk storage, to meet your unique business needs.</p>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg">
              <div class="px-6 py-8">
                <img src="{{url('images/warehouse/inventory.jpg')}}" alt="Inventory Management" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-lg font-medium text-gray-900">Inventory Management</h3>
                <p class="mt-4 text-base text-gray-500">ADLERCARGO Inventory Management  solution provides real-time tracking of inventory levels, allowing businesses to stay on top of their stock levels and avoid stockouts. </p>               
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- features of warehouse --}}
    <div class="bg-white mx-auto max-w-7xl">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2 p-8">
                <h2 class="text-4xl font-bold mb-4">Features of Our Warehouses</h2>
                <p class="text-gray-600 mb-8">At ADLERCARGO, we take pride in providing top-notch warehousing solutions to our clients. 
                    Our warehouses are designed to offer optimal storage and handling of goods, ensuring that they remain in excellent 
                    condition at all times. With cutting-edge technology and industry-leading processes, our warehouses have numerous 
                    features that make them ideal for various industries.</p>
                
                <ul class="list-disc list-inside mb-8">
                    <li class="mb-2">24/7 Security Monitoring</li>
                    <li class="mb-2">Climate-Controlled Storage</li>
                    <li class="mb-2">Forklifts and Other Handling Equipment</li>
                    <li class="mb-2">Advanced Fire Suppression Systems</li>
                    <li class="mb-2">Highly Trained and Experienced Staff</li>
                </ul>
            </div>
            <div class="md:w-1/2 p-8">
                <img class="w-full" src="{{url('images/warehouse/features.jpg')}}" alt="Warehouse Image">
            </div>
        </div>
    </div>
    {{-- why choose us --}}
    <div class="bg-gray-200 mx-auto max-w-7xl">
        <div class="p-8">
          <h3 class="text-2xl font-bold mb-4">Why Choose ADLERCARGO Shipping Company for Your Warehouse Needs?</h3>
          <p class="text-gray-600 mb-8">Choosing ADLERCARGO Shipping Company for your warehouse needs provides a range of benefits to your business. These include:</p>
          <ul class="list-disc list-inside mb-8">
            <li class="mb-2"><b>Cost Savings:</b> Our customized solutions can help you reduce costs and increase efficiency in your warehouse operations.</li>
            <li class="mb-2"><b>Expertise:</b> Our highly trained and experienced staff can handle all your warehouse needs, from inventory management to order fulfillment.</li>
            <li class="mb-2"><b>Flexibility:</b> We offer flexible solutions to meet the changing needs of your business.</li>
            <li class="mb-2"><b>Safety and Security:</b> Our warehouses are equipped with advanced security systems and safety features to ensure the safety of your products.</li>
            <li class="mb-2"><b>Customized Solutions:</b> We offer customized solutions tailored to your specific business needs.</li>
            <li class="mb-2"><b>Technology:</b> Our warehouses are equipped with state-of-the-art technology to ensure the safety and security of your products.</li>
          </ul>
        </div>
    </div>
    {{-- contact --}}
    <section class="bg-cover bg-center" style="background-image: url('images/support.jpeg')">
        <div class="bg-gray-900 bg-opacity-50 h-full py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-gray-100 font-semibold tracking-wide uppercase">Contact Us</h2>
                <p class="mt-2 text-white text-3xl leading-8 font-extrabold tracking-tight sm:text-4xl">
                Let's Get in Touch
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-200 lg:mx-auto">
                Have a question or want to learn more about our services? Send us a message and we'll get back to you as soon as possible.
                </p>
            </div>
            <div class="mt-10 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                <a href="{{route('contact')}}" class="py-4 px-6 bg-indigo-500 hover:bg-indigo-600 font-medium text-white uppercase tracking-wider rounded-md">
                    Contact Us
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
    {{-- related Links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('faqs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">Air Freight</h3>
              <p class="text-gray-600">Learn more about Our air freight services and its delivery timeframes.</p>
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