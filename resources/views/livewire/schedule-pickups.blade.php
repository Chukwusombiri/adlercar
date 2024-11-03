<div class="bg-gray-100 shadow-md rounded-lg px-8 py-6">
    <x-jet-validation-errors class="mb-4" />
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Full Name:</label>
        <input type="text" id="name" wire:model="pickup.name" required placeholder="Enter your full name" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <x-jet-input-error for="pickup.name" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email Address:</label>
        <input type="email" id="email" wire:model="pickup.email" required placeholder="Enter your email address" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <x-jet-input-error for="pickup.email" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
        <input type="tel" id="phone" wire:model="pickup.phone" required placeholder="Enter your phone number" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline none focus:shadow-outline">
        <x-jet-input-error for="pickup.phone" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="pickup-item" class="block text-gray-700 font-bold mb-2">Pickup Item(s):</label>
        <input type="text" id="pickup-item" wire:model="pickup.pickup_item" required placeholder="Enter your Pick-up item(s)" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <x-jet-input-error for="pickup.pickup_item" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="pickup-date" class="block text-gray-700 font-bold mb-2">Pickup Date:</label>
        <input type="date" id="pickup-date" wire:model="pickup.pickup_date" required class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <x-jet-input-error for="pickup.pickup_date" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="pickup-time" class="block text-gray-700 font-bold mb-2">Pickup Time:</label>
        <input type="time" id="pickup-time" wire:model="pickup.pickup_time" required class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <x-jet-input-error for="pickup.pickup_time" class="mt-2"/>
    </div>
    <div class="mb-4">
        <label for="pickup-address" class="block text-gray-700 font-bold mb-2">Pickup Address:</label>
        <textarea id="pickup-address" wire:model="pickup.pickup_address" required placeholder="Enter your pickup address" rows="3" class="appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        <x-jet-input-error for="pickup.pickup_address" class="mt-2"/>
    </div>
    <div class="mb-4">
        <button wire:click.prevent="submit" class="bg-indigo-500 text-gray-100 font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline hover:bg-indigo-600 active:bg-indigo-900">Schedule Pickup</button>
    </div>
</div>