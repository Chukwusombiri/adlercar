<x-app-layout>
    {{-- HEADER --}}
    <header class="bg-gray-900 text-white">
        <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between">
            <h1 class="text-3xl font-bold">ADLERCARGO Shipping Company FAQs</h1>
            <a href="#" class="text-gray-300 hover:text-white">
              <span class="sr-only">Go to homepage</span>
              <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                <path d="M12 4L4 12h4v8h8v-8h4l-8-8zm0 12V8l4 4h-3v4h-2v-4H8l4-4v8z"/>
              </svg>
            </a>
          </div>
        </div>
    </header>
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
                        <span class="text-gray-600">FAQs</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- MAIN --}}
    <main class="mycontainer mx-auto py-8">
        <h2 class="text-3xl font-bold mb-8">Frequently Asked Questions</h2>
        <p class="text-gray-600 text-lg md:text-xl lg:text-2xl leading-relaxed mx-auto px-4 md:px-8 mb-8">
            At ADLERCARGO, we are committed to providing our customers with the best shipping experience possible. We understand that 
            navigating the shipping process can be overwhelming, which is why we have put together this list of frequently asked 
            questions to help answer any questions you may have about our shipping services and our company. 
        </p>  
        <p class="text-gray-600 text-lg md:text-xl lg:text-2xl leading-relaxed mx-auto px-4 md:px-8 mb-8">
            Whether you're new to shipping or have been using our services for years, this page is designed to provide you with the 
            information you need to make informed decisions and ensure your shipments arrive safely and on time. Please take a moment 
            to review our FAQs and feel free to contact us if you have any additional questions or concerns.
        </p>
        <p class="flex flex-nowrap overflow-hidden justify-center text-gray-600 text-lg md:text-xl lg:text-2xl leading-relaxed mx-auto px-4 md:px-8 mb-8">
            <a href="{{route('contact')}}" class="rounded px-2 py-2 bg-indigo-400 hover:bg-indigo-500 focus:bg-indigo-500 active:bg-indigo-700 text-white">Contact us for further enquiries.</a>
        </p>            
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What is ADLERCARGO Shipping Company?</h3>
                <p class="text-gray-700 leading-relaxed">ADLERCARGO is a shipping company that provides reliable and efficient shipping services to customers all over the world.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What kind of services does ADLERCARGO offer?</h3>
                <p class="text-gray-700 leading-relaxed">ADLERCARGO offers a wide range of shipping services, including air and sea freight, warehousing and distribution, and customs brokerage.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">How can I track my shipment?</h3>
                <p class="text-gray-700 leading-relaxed">You can track your shipment on the ADLERCARGO website using your tracking number. You can also contact our customer service team for assistance.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What is the estimated delivery time for international shipments?</h3>
                <p class="text-gray-700 leading-relaxed">The estimated delivery time for international shipments varies depending on the destination country and the shipping method. Please contact our customer service team for more information.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What types of shipments can ADLERCARGO handle?</h3>
                <p class="text-gray-700 leading-relaxed">ADLERCARGO can handle a variety of shipments including full container loads (FCL), less than container loads (LCL), and air freight.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">How do I get a quote for shipping services?</h3>
                <p class="text-gray-700 leading-relaxed">You can get a quote for shipping services by filling out the online quote request form on our website, or by contacting our customer service team.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">How long will it take for my shipment to arrive?</h3>
                <p class="text-gray-700 leading-relaxed">The shipping time depends on the destination and the mode of transportation. Our customer service team will provide you with an estimated transit time when you request a quote.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What documents are required for shipping internationally?</h3>
                <p class="text-gray-700 leading-relaxed">The required documents vary depending on the country of origin and destination. Common documents include a commercial invoice, bill of lading, and packing list. Our customer service team can assist you with the necessary documentation.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">Can ADLERCARGO provide customs clearance services?</h3>
                <p class="text-gray-700 leading-relaxed">Yes, ADLERCARGO can provide customs clearance services to ensure that your shipment complies with all necessary regulations.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">Is cargo insurance included in the shipping cost?</h3>
                <p class="text-gray-700 leading-relaxed">Cargo insurance is not included in the shipping cost, but ADLERCARGO can provide insurance coverage for an additional fee.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">Can I track my shipment online?</h3>
                <p class="text-gray-700 leading-relaxed">Yes, ADLERCARGO provides online tracking for all shipments. You can access the tracking information through our website or by contacting our customer service team.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">Does ADLERCARGO offer warehousing and distribution services?</h3>
                <p class="text-gray-700 leading-relaxed">Yes, ADLERCARGO offers warehousing and distribution services to provide a complete supply chain solution.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg px-6 py-4">
                <h3 class="text-xl font-bold mb-4">What payment methods does ADLERCARGO accept?</h3>
                <p class="text-gray-700 leading-relaxed">ADLERCARGO accepts payment via bank transfer, credit card, and PayPal. Payment terms may vary depending on the specific shipment and agreement with the customer.</p>
            </div>
        </div>
    </main>
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
            <a href="{{route('testimonials')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">What have been said</h3>
              <p class="text-gray-600">Find out what clients have to say about Adlercargo and our services.</p>
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