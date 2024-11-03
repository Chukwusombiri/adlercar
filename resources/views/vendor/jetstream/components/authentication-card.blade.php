<div class="bg-cover bg-center" style="background-image: url('/images/port.jpeg')">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900 bg-opacity-50" id="auth-body">
        <div id="auth-logo">
            {{ $logo }}
        </div>
    
        <div id="auth-form" class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
