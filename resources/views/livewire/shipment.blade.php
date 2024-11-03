<div class="mycontainer mx-auto px-4 pt-10">
    <h1 class="text-3xl font-bold mb-4">Start Your Shipment with ADLERCARGO: Quick and Easy Shipping Solutions</h1>
    <p class="mb-4 text-xl text-gray-700">ADLERCARGO SHIPPING's start shipment webpage allows customers to easily initiate their shipment by filling out a simple form with required details.</p>
    <div class="bg-white rounded-md shadow-md px-8 py-6">
        <h2 class="text-xl font-semibold mb-4">Shipment Details</h2>        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="form-group">
                <label for="productType" class="block text-gray-700 font-semibold mb-2">Product Type</label>
                <select id="productType" wire:model="product_type"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Select</option>
                    <option value="Consumer goods">Consumer goods</option>
                    <option value="Wears">Wears</option>
                    <option value="Agro-products">Agro-products</option>
                    <option value="Tech Product">Tech Product</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Minerals">Minerals</option>
                    <option value="Document">Document</option>
                    <option value="Others">Others</option>
                </select>
                <x-jet-input-error for="product_type" />
            </div>
            <div class="form-group">
                <label for="items" class="block text-gray-700 font-semibold mb-2">Shipment Item(s)</label>
                <input type="text" id="items" wire:model="items"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter shipment items" />
                <x-jet-input-error for="items" />
            </div>
            <div class="form-group">
                <label for="size" class="block text-gray-700 font-semibold mb-2">Size (in KG)</label>
                <input type="number" step="any" id="size" wire:model="size"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter size in KG" />
                <x-jet-input-error for="size" />
            </div>
            <div class="form-group">
                <label for="origin" class="block text-gray-700 font-semibold mb-2">Origin</label>
                <input type="text" id="origin" wire:model="departure"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter origin" />
                    <p class="text-gray-800"><small>FORMAT: CITY, STATE, COUNTRY.</small></p>
                    <x-jet-input-error for="departure" />
            </div>
            <div class="form-group">
                <label for="destination" class="block text-gray-700 font-semibold mb-2">Destination</label>
                <input type="text" id="destination" wire:model="arrival"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter destination" />
                    <p class="text-gray-800"><small>FORMAT: CITY, STATE, COUNTRY.</small></p>
                    <x-jet-input-error for="arrival" />
            </div>
            <div class="form-group">
                <label for="paymentMethod" class="block text-gray-700 font-semibold mb-2">Preferred Mode of Shipment</label>
                <select id="paymentMethod" wire:model="mos" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Select</option>
                    <option value="sea">Sea Freight</option>
                    <option value="air">Air Freight</option>
                    <option value="road">Road Freight (within USA only)</option>
                    <option value="railway">Railway Freight (within USA and EU only)</option>
                </select>
                <x-jet-input-error for="mos" />
            </div>
            <div class="form-group">
                <label for="paymentMethod" class="block text-gray-700 font-semibold mb-2">Payment Method</label>
                <select id="paymentMethod" wire:model="payment_method"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">select</option>
                    <option value="Cash Deposit">Cash Deposit</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cryptocurrency">Cryptocurrency</option>
                </select>
                <x-jet-input-error for="payment_method" />
            </div>
            <div class="form-group">
                <label for="recipient" class="block text-gray-700 font-semibold mb-2">Recipient</label>
                <input type="text" id="recipient" wire:model="receiver"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter recipient's name" /> 
                    <x-jet-input-error for="receiver" />
            </div>
            <div class="form-group">
                <label for="recipientEmail" class="block text-gray-700 font-semibold mb-2">Recipient Email</label>
                <input type="email" id="recipientEmail" wire:model="receiver_email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Enter recipient's email" />
                    <x-jet-input-error for="receiver_email" />
            </div>
            <div class="form-group">
                <label for="itemPhotos" class="block text-gray-700 font-semibold mb-2">Optional: Item Photos (you can upload more than one photo)</label>
                <input type="file" id="itemPhotos" wire:model="images"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" multiple/>
                    <x-jet-input-error for="images" />
            </div>
        </div>
        <div class="mt-6">
            <button wire:click="submit" type="button"
            class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none">Submit</button>
        </div>
    </div>
    <div class="my-8 text-gray-600">
        <p class="text-sm">
            By submitting this form, you acknowledge that you have read and agree to our
            <a href="#" class="text-blue-500 hover:underline">Terms and Conditions</a> and
            <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a>.
        </p>
    </div>
</div>