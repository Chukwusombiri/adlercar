<x-app-layout>
    <!-- Page header -->
  <header class="bg-gray-500 text-white px-4 py-6">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">ADLERCARGO Shipping Company Rail Freight</h1>
      <p class="mt-2">We offer cost-effective and reliable rail freight services to meet all of your transportation needs.</p>
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
                    <span class="text-gray-600">Rail Freight</span>
                </li>
            </ol>
        </nav>
    </div>
</div>
  <!-- Main content -->
  <main class="container mx-auto my-8">
    <section class="mb-12">
      <h2 class="text-2xl font-bold mb-4">Why Choose Rail Freight?</h2>
      <p class="mb-4">Rail freight is a popular transportation option for many reasons. Here are just a few of the benefits:</p>
      <ul class="list-disc pl-6">
        <li>Cost-effective: Rail freight is often cheaper than other modes of transportation, especially for long distances or heavy shipments.</li>
        <li>Eco-friendly: Trains emit fewer greenhouse gases than trucks or planes, making rail freight a more sustainable option.</li>
        <li>Reliable: Rail freight schedules are often more predictable than other modes of transportation, so you can plan your shipments with confidence.</li>
        <li>Safe: Trains have a lower accident rate than other modes of transportation, which means your goods are less likely to be damaged in transit.</li>
      </ul>
    </section>

    <section class="mb-12">
      <h2 class="text-2xl font-bold mb-4">Our Rail Freight Services</h2>
      <p class="mb-4">At ADLERCARGO, we offer a wide range of rail freight services to meet your transportation needs:</p>
      <ul class="list-disc pl-6">
        <li><strong>Full Container Load (FCL) Services:</strong> We offer FCL services for rail freight shipments of all sizes. Our team will help you choose the right container for your shipment and coordinate all aspects of the transportation process.</li>
        <li><strong>Less than Container Load (LCL) Services:</strong> If you have a smaller shipment, our LCL services are a cost-effective option. We'll consolidate your shipment with other cargo to fill a container and get it to its destination safely and efficiently.</li>
        <li><strong>Rail Car Services:</strong> For larger shipments, we offer rail car services. Our team will help you choose the right type of rail car for your cargo and ensure that it is loaded and transported safely.</li>
        <li><strong>Intermodal Transportation:</strong> We provide intermodal transportation services, which involve using a combination of rail and other modes of transportation, such as truck or barge, to deliver your goods to their final destination. This allows for efficient and seamless transportation across different modes of transit, reducing handling and minimizing delays.</li>
        <li><strong>Specialized Cargo Handling:</strong> Our team is experienced in handling specialized cargo, such as hazardous materials, oversized or overweight shipments, and temperature-controlled goods. We ensure that your cargo is handled with care and in compliance with all regulations.</li>
        <li><strong>Customs Clearance:</strong> We offer customs clearance services to ensure that your rail freight shipments are in compliance with all customs regulations and requirements. Our team will handle all the necessary paperwork, documentation, and clearance procedures to ensure smooth transportation of your cargo.</li>
        </ul>
        </section>
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Why Choose ADLERCARGO?</h2>
            <p class="mb-4">When it comes to rail freight transportation, ADLERCARGO is your reliable partner. Here are some reasons why you should choose us:</p>
            <ul class="list-disc pl-6">
              <li>Experience: We have years of experience in the transportation industry and are experts in rail freight logistics. Our team has the knowledge and expertise to handle all types of rail freight shipments, from small to large, and ensure smooth and efficient transportation.</li>
              <li>Reliability: We understand the importance of timely and reliable transportation. With our extensive network of rail partners and logistics providers, we can ensure that your cargo is transported safely and on time, every time.</li>
              <li>Customer Service: We pride ourselves on providing exceptional customer service. Our team is available to assist you at every step of the transportation process, from initial inquiry to delivery. We are committed to providing prompt and responsive service to meet all of your transportation needs.</li>
              <li>Customized Solutions: We understand that every shipment is unique, and we tailor our services to meet your specific requirements. Whether you need a customized transportation solution, specialized handling, or assistance with customs clearance, we can provide personalized solutions to suit your needs.</li>
              <li>Cost-effective: We offer competitive rates for our rail freight services, ensuring that you get the best value for your transportation budget. Our team will work with you to optimize your transportation plan and find the most cost-effective solution for your cargo.</li>
            </ul>
          </section>
          
          <section class=" mycontainer mb-12">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <p class="mb-4">If you have any questions or would like to inquire about our rail freight services, please don't hesitate to contact us. Our team is ready to assist you.</p>
            <div class="flex items-center justify-center">
              <a href="{{route('contact')}}" class="inline-block px-8 py-4 bg-indigo-500 text-white font-bold rounded-full hover:bg-indigo-600 transition duration-300">Get in touch</a>              
            </div>
          </section>
        </main>  
         {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <a href="{{route('schedule')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                  <h3 class="text-lg font-bold mb-2">Schedule Pick-up</h3>
                  <p class="text-gray-600">Schedule an instant pick-up with ADLERCARGO online pick-up tool.</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <a href="{{route('about')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                  <h3 class="text-lg font-bold mb-2">About Us</h3>
                  <p class="text-gray-600">Learn more about our company and our mission.</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('blogs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                <h3 class="text-lg font-bold mb-2">Insights</h3>
                <p class="text-gray-600">Learn more about international shipping and latest updates.</p>
            </a>
            </div>
        </div>
    </div>        
    <x-footer></x-footer>
</x-app-layout>