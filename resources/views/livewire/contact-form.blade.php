<div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
    <p class="text-gray-600 leading-loose mb-6">Fill out the form below to get in touch with us. We will get back to you as soon as possible.</p>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
        <input wire:model="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
        <x-jet-input-error for="name" class="mt-2"/>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
        <input wire:model="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
        <x-jet-input-error for="email" class="mt-2"/>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="phone">Phone</label>
        <input wire:model="phone" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="Enter your phone number">
        <x-jet-input-error for="phone" class="mt-2"/>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="message">Message</label>
        <textarea wire:model="message" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Enter your message"></textarea>
        <x-jet-input-error for="message" class="mt-2"/>
      </div>
      <button id="submit-button" wire:click.prevent="submit" class="bg-indigo-500 hover:bg-indigo-700 active:bg-indigo-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Send Message
      </button>
</div>