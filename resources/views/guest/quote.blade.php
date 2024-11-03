<x-app-layout>
    {{-- breadcrumb --}}
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="text-black font-bold" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="/" class="text-indigo-600">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.293 3.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 9H3a1 1 0 110-2h9.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-600">Instant Quote</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page content -->
    <section class="container mx-auto px-6 py-8">
        <h1 class="text-3xl mb-4 text-center font-bold text-gray-800">ADLERCARGO Shipping Quote</h1>
        <p class="text-center text-gray-600 mb-8">Get a quote for your shipping needs with ADLERCARGO today!</p>

        <!-- Quote form -->
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg px-8 py-6 mb-8">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="origin">Origin</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="origin" type="text" placeholder="Enter origin">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="destination">Destination</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="destination" type="text" placeholder="Enter destination">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="weight">Weight</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="weight" type="number" placeholder="Enter weight in kg">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="length">Length</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="length" type="number" placeholder="Enter length in cm">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="width">Width</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="width" type="number" placeholder="Enter width in cm">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="height">Height</label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="height" type="number" placeholder="Enter height in cm">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="cargo-type">Cargo Type</label>
                <select class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cargo-type">
                    <option value="">Select cargo type</option>
                    <option value="1">General cargo</option>
                    <option value="2">Refrigerated cargo</option>
                    <option value="3">Dangerous goods</option>
                    <option value="4">Bulk cargo</option>
                </select>
            </div>
            <div class="text-center">
                <button id="calculate-btn" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300" type="button">Get Quote</button>
            </div>
        </div>
        <!-- Quote result -->
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg px-8 py-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Your Shipping Quote</h2>
            <p class="text-gray-700">Based on the information provided, your shipping quote is:</p>
            <div class="bg-gray-100 rounded-lg mt-4 px-6 py-4">
                <p id="quote-display" class="text-2xl font-bold text-gray-800">$0.00</p>
            </div>
            <p class="text-gray-700 mt-4">Note: This is an estimated quote and may be subject to change. Please contact us for a more accurate quote.</p>
        </div>
    </section>
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

<script>
    // Selecting the necessary form elements
const weightInput = document.getElementById('weight');
const lengthInput = document.getElementById('length');
const widthInput = document.getElementById('width');
const heightInput = document.getElementById('height');
const originInput = document.getElementById('origin');
const destinationInput = document.getElementById('destination');

// Selecting the button and adding a click event listener
const calculateButton = document.getElementById('calculate-btn');
calculateButton.addEventListener('click', calculateQuote);

// Function to calculate the quote
function calculateQuote() {
  const weight = parseFloat(weightInput.value);
  const length = parseFloat(lengthInput.value);
  const width = parseFloat(widthInput.value);
  const height = parseFloat(heightInput.value);
  const origin = originInput.value;
  const destination = destinationInput.value;

  // Performing necessary calculations and generating the quote
  const volume = length * width * height;
  const chargeableWeight = weight > volume ? weight : volume;
  const rate = 1.5; // Sample rate per kg or cubic meter
  const quote = chargeableWeight * rate;

  // Displaying the quote on the webpage
  const quoteDisplay = document.getElementById('quote-display');
  quoteDisplay.innerHTML = `Your quote from ${origin} to ${destination} is $${quote}.`;
}
</script>