<div class="relative inline-flex items-center px-1 pt-1 text-sm font-semibold leading-5 text-gray-700 hover:text-gray-900 
 focus:outline-none focus:text-gray-700 transition"  x-data="{ open: false }" @click.away="open = false" 
 @close.stop="open = false">
   <div @click="open = ! open">
     <button type="button" class="inline-flex w-full justify-center px-4 py-2 text-sm font-semibold" 
      id="menu-button" aria-expanded="true" aria-haspopup="true">
       {{$trigger}}
       <!-- Heroicon name: mini/chevron-down -->
       <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
         <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
       </svg>
     </button>
   </div>                     
   <div x-show="open"
   x-transition:enter="transition ease-out duration-200"
   x-transition:enter-start="transform opacity-0 scale-95"
   x-transition:enter-end="transform opacity-100 scale-100"
   x-transition:leave="transition ease-in duration-75"
   x-transition:leave-start="transform opacity-100 scale-100"
   x-transition:leave-end="transform opacity-0 scale-95" 
   class="absolute left-0 top-full z-10 mt-2 w-56 origin-top-right
    divide-y divide-gray-100 rounded-md bg-white shadow-lg 
    ring-1 ring-black ring-opacity-5 focus:outline-none" 
    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
     tabindex="-1" style="display: none;"
     @click="open = false">
       {{$content}}
   </div>
</div>