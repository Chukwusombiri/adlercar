<nav x-data="{ open: false }" class="relative bg-white border-b border-gray-100 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('guestHome') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex">
                    <x-my-dropdown>
                        <x-slot:trigger>
                            {{__('Shipping')}}
                        </x-slot:trigger>

                        <x-slot:content>                           
                            <x-jet-dropdown-link href="{{ route('user.ship') }}">
                                {{ __('Ship Now') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('schedule') }}">
                                {{ __('Schedule and Manage Pickups') }}
                            </x-jet-dropdown-link>                           
                        </x-slot:content>
                    </x-my-dropdown>
                                        
                    <x-my-dropdown>
                        <x-slot:trigger>
                            {{__('About us')}}
                        </x-slot:trigger>

                        <x-slot:content>
                            <x-jet-dropdown-link href="{{ route('about') }}">
                                {{ __('About Adlercargo') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('about').'#team' }}">
                                {{ __('Who works for us') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('testimonials') }}">
                                {{ __('Read our reviews') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('faqs') }}">
                                {{ __('Frequently asked questions') }}
                            </x-jet-dropdown-link>
                        </x-slot:content>
                    </x-my-dropdown>
                    <x-my-dropdown>
                        <x-slot:trigger>
                            {{__('Our Solutions')}}
                        </x-slot:trigger>

                        <x-slot:content>
                            <x-jet-dropdown-link href="{{ route('warehouse') }}">
                                {{ __('Warehouse Solutions') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('transport') }}">
                                {{ __('Transport and distribution') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('air') }}">
                                {{ __('Air Freight') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('ocean') }}">
                                {{ __('Ocean Freight') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('road') }}">
                                {{ __('Road Freight') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('rail') }}">
                                {{ __('Rail Freight') }}
                            </x-jet-dropdown-link>                           
                        </x-slot:content>
                    </x-my-dropdown>
                    <x-jet-nav-link href="{{ route('blogs') }}">
                        {{ __('Insights and Innovation') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('quote') }}">
                        {{ __('Get a Quote') }}
                    </x-jet-nav-link>
                   
                    <x-my-dropdown>
                        <x-slot:trigger>
                            {{__('Contact us')}}
                        </x-slot:trigger>

                        <x-slot:content>
                            <x-jet-dropdown-link href="{{ route('contact') }}">
                                {{ __('Contact us') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('terms.show') }}">
                                {{ __('Terms of use') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('policy.show') }}">
                                {{ __('Privacy policy') }}
                            </x-jet-dropdown-link>                           
                        </x-slot:content>
                    </x-my-dropdown>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                @auth
                <div class="relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">                            
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ url('storage/'.Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                            </button>                          
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Start Shipment') }}
                            </x-jet-dropdown-link>
         
                            {{--<x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('My Shipments') }}
                            </x-jet-dropdown-link> --}}

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endauth
                @guest
                <div class="ml-3 relative flex justify-center w-[100px]">
                    <x-jet-nav-link href="{{ route('login') }}"
                    class='w-[100%] flex justify-center py-2 bg-indigo-500  rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest hover:bg-indigo-600 hover:text-gray-100
                    active:bg-indigo-600 focus:outline-none focus:text-gray-100 disabled:opacity-25 transition pt-2'
                    >
                        {{ __('Sign in') }}
                    </x-jet-nav-link>
                </div>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="bg-gray-100 inline-flex items-center justify-center p-2 
                rounded-md text-indigo-500 hover:text-indigo-500 hover:bg-gray-100 focus:outline-none 
                focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-gray-100">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link-dropdown>
                <x:slot:trigger>
                    {{__('Shipping')}}
                </x:slot:trigger>
                <x:slot:links>                   
                    <x-jet-responsive-nav-link href="{{ route('guestHome') }}">
                        {{ __('Ship Now') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('guestHome') }}">
                        {{ __('Schedule and Manage Pickups') }}
                    </x-jet-responsive-nav-link>                   
                </x:slot:links>
            </x-responsive-nav-link-dropdown>
            <x-responsive-nav-link-dropdown>
                <x:slot:trigger>
                    {{__('About us')}}
                </x:slot:trigger>
                <x:slot:links>
                    <x-jet-responsive-nav-link href="{{ route('about') }}">
                        {{ __('About Adlercargo') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('about').'#team' }}">
                        {{ __('Who works for us') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('testimonials') }}">
                        {{ __('Read our reviews') }}
                    </x-jet-responsive-nav-link> 
                    <x-jet-responsive-nav-link href="{{ route('faqs') }}">
                        {{ __('Frequently asked questions') }}
                    </x-jet-responsive-nav-link>                   
                </x:slot:links>
            </x-responsive-nav-link-dropdown>
          
            <x-responsive-nav-link-dropdown>
                <x:slot:trigger>
                    {{__('Our Solutions')}}
                </x:slot:trigger>
                <x:slot:links>
                    <x-jet-responsive-nav-link href="{{ route('warehouse') }}">
                        {{ __('Warehouse Solutions') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('transport') }}">
                        {{ __('Transport and distribution') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('air') }}">
                        {{ __('Air Freight') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('ocean') }}">
                        {{ __('Ocean Freight') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('road') }}">
                        {{ __('Road Freight') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('rail') }}">
                        {{ __('Rail Freight') }}
                    </x-jet-responsive-nav-link>              
                </x:slot:links>
            </x-responsive-nav-link-dropdown>
           
            <x-jet-responsive-nav-link href="{{ route('blogs') }}">
                {{ __('Insights and Innovation') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('quote') }}">
                {{ __('Get a Quote') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('contact') }}">
                {{ __('Contact us') }}
            </x-jet-responsive-nav-link>

            <x-responsive-nav-link-dropdown>
                <x:slot:trigger>
                    {{__('Legal Act')}}
                </x:slot:trigger>
                <x:slot:links>
                    <x-jet-responsive-nav-link href="{{ route('terms.show') }}">
                        {{ __('Terms of use') }}
                    </x-jet-responsive-nav-link>
                    <x-jet-responsive-nav-link href="{{ route('policy.show') }}">
                        {{ __('Privacy policy') }}
                    </x-jet-responsive-nav-link>                   
                </x:slot:links>
            </x-responsive-nav-link-dropdown>              
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
            <div class="flex items-center px-4">
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>              
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Start Shipment') }}
                </x-jet-responsive-nav-link>
                {{-- <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('My Shipments') }}
                </x-jet-responsive-nav-link>     --}}            
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>                
            </div>
            @endauth

            @guest
                <div class="px-2 mb-2">
                    <x-jet-responsive-nav-link href="{{ route('login') }}"
                    class='px-4 py-2 bg-indigo-400 border border-transparent rounded-md font-semibold text-xs text-gray-100 uppercase tracking-widest hover:bg-indigo-500 active:bg-indigo-500 focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition'
                    >
                        {{ __('Sign in') }}
                    </x-jet-responsive-nav-link>
                </div>
            @endguest
        </div>
    </div>
</nav>
