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
                        <span class="text-gray-600">Ocean Freight</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Content -->
    <main>
        <section class="py-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center gap-y-8">
                    <div class="w-full md:w-1/2 px-6">
                        <h1 class="text-4xl font-bold mb-6">Ocean Freight</h1>
                        <p class="text-xl mb-8">ADLERCARGO offers reliable and efficient ocean freight services that help our clients with their international shipping needs. We provide a wide range of ocean freight services, including FCL (Full Container Load) and LCL (Less than Container Load) shipments, door-to-door transportation, customs clearance, and more.</p>
                        <p class="text-xl mb-8">Our team of experienced professionals is dedicated to providing the highest level of service and ensuring that your shipment arrives at its destination on time and in good condition. We work closely with our clients to understand their specific needs and provide customized solutions that meet their requirements.</p>
                        <a href="{{route('quote')}}" class="bg-indigo-500 text-white px-8 py-3 rounded-lg font-bold hover:bg-indigo-600 transition-all duration-200">Get a Quote</a>
                    </div>
                    <div class="w-full md:w-1/2 px-6">
                        <img src="{{url('images/ocean/ocean.jpg')}}" alt="Ocean Freight" class="w-full rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 px-6">
                        <img src="{{url('images/ocean/loading.jpg')}}" alt="Container Loading" class="w-full rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2 px-6">
                        <h2 class="text-3xl font-bold mb-6">Container Loading and Unloading</h2>
                        <p class="text-xl mb-8">At ADLERCARGO, we specialize in efficient container loading and unloading services. Our team of experts ensures that your cargo is properly loaded and secured in containers, minimizing the risk of damage during transit. We handle both FCL (Full Container Load) and LCL (Less than Container Load) shipments, and our experienced staff takes care of all the necessary documentation and customs clearance processes to ensure smooth operations.</p>
                        <p class="text-xl mb-8">With state-of-the-art equipment and facilities, we are able to handle a wide range of cargo, including general cargo, perishables, hazardous materials, and oversized shipments. Our team is trained in proper handling techniques, ensuring that your cargo is loaded and unloaded safely and efficiently, adhering to industry standards and regulations.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 px-6">
                        <h2 class="text-3xl font-bold mb-6">Customs Clearance and Documentation</h2>
                        <p class="text-xl mb-8">Navigating the complex world of customs clearance and documentation can be overwhelming, but with ADLERCARGO, you can trust that your cargo will be handled with expertise. Our team of customs brokers and documentation specialists ensures that all the necessary paperwork, permits, and licenses are in order, avoiding delays and minimizing the risk of penalties or fines.</p>
                        <p class="text-xl mb-8">We stay up-to-date with the latest regulations and requirements, ensuring compliance with customs authorities in different countries. Our goal is to provide seamless customs clearance and documentation services, allowing you to focus on your core business while we handle the intricacies of international shipping.</p>
                    </div>
                    <div class="w-full md:w-1/2 px-6">
                        <img src="{{url('images/ocean/clearance.jpg')}}" alt="Customs Clearance" class="w-full rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray-100 py-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 px-6">
                        <img src="{{url('images/ocean/monitor.jpg')}}" alt="Tracking and Monitoring" class="w-full rounded-lg shadow-lg">
                    </div>
                    <div class="w-full md:w-1/2 px-6">
                        <h2 class="text-3xl font-bold mb-6">Tracking and Monitoring</h2>
                        <p class="text-xl mb-8">We understand the importance of real-time visibility and transparency in the shipping process. That's why ADLERCARGO provides advanced tracking and monitoring solutions to our customers. Our cutting-edge technology allows you to track your shipments, monitor their status, and receive updates throughout the shipping journey.</p>
                        <p class="text-xl mb-8">With our tracking and monitoring services, you can have peace of mind knowing that your cargo is in good hands. Our team of experts proactively manages any issues or delays, ensuring that your shipment arrives at its destination on time and in the best condition possible.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('air')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                <h3 class="text-lg font-bold mb-2">Air freight</h3>
                <p class="text-gray-600">Discover more about our air freight services. Streamline your options.</p>
            </a>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('testimonials')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                <h3 class="text-lg font-bold mb-2">Get a quote</h3>
                <p class="text-gray-600">Find out an estmated cost of using our shipping services.</p>
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