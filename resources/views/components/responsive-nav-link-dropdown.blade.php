<div x-data="{ open: false }">    
    <a x-on:click="open = ! open" class='block pl-3 pr-4 py-2 border-l-4 
    border-transparent text-base font-medium text-gray-600 hover:text-gray-800 
    hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 
    focus:bg-gray-50 focus:border-gray-300 transition flex justify-between'>
        {{$trigger}}
        <i style="color:#6875f5;font-size:20px" class="las la-angle-down"></i>
    </a>
    <ul x-show="open"x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95" class="pl-3 bg-slate-200 divide-y divide-white">
        {{$links}}
    </ul>
</div>