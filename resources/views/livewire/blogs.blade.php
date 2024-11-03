<div class="mycontainer mx-auto my-8">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-2/3 px-4 mb-8">
            <h1 class="text-3xl font-bold mb-4">Unlocking New Possibilities: Exploring the Future of Logistics with ADLERCARGO SHIPPING</h1>
            <p class="text-gray-600 mb-4">Welcome to ADLERCARGO SHIPPING Company's Insights and Innovation page. Here, we share our latest industry insights and innovations with you. Our team is dedicated to keeping up with the latest trends and technology to continually improve our services and provide our customers with the best experience possible.</p>
            <p class="text-gray-600 mb-4"> We are always striving to find new and innovative ways to optimize our processes and offer new solutions for your shipping needs. Browse through our latest updates and stay informed on the latest in the shipping industry.</p>            
            <p class="my-10 text-center">
                <a href="{{route('contact')}}" class="px-4 py-2 md:px-10 md:py-8 text-lg bg-indigo-500 text-white shadow-md rounded-md hover:bg-indigo-600 focus:bg-indigo-600 active:bg-indigo-700">
                    Contact us for further enquiries
                </a>
            </p>
        </div>
        <div class="w-full lg:w-1/3 bg-white rounded-lg shadow-lg mb-8">
           <img src="{{url('/images/insights2.jpg')}}" class="w-full h-full object-cover object-contain rounded shadow" alt="">
        </div>
    </div>    
    <div class="flex flex-wrap -mx-4">
        @if (count($blogs)>0)
            @foreach ($blogs as $b => $blog)
            @if ($b+1 == 1 || count($blogs)-1 == $b)
            <div class="w-full lg:w-2/3 px-4 mb-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-64 object-cover" src="{{url('storage/'.$blog->cover_img)}}" alt="Blog Post Image">
                    <div class="p-4">
                        <h3 class="font-bold text-2xl mb-2"><a href="{{route('readarticle',['slug'=>$blog->slug])}}" class="text-gray-800 hover:text-gray-600">{{$blog->title}}</a></h3>
                        <p class="text-gray-600 mb-4">{{substr($blog->main_content,0,strpos($blog->main_content,'.'));}}.</p>
                        <a href="{{route('readarticle',['slug'=>$blog->slug])}}" class="text-indigo-700 hover:text-gray-600">Read More</a>
                    </div>
                </div>
            </div>           
            @else
            <div class="w-full lg:w-1/3 px-4 mb-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-64 object-cover" src="{{url('storage/'.$blog->cover_img)}}" alt="Blog Post Image">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2"><a href="{{route('readarticle',['slug'=>$blog->slug])}}" class="text-gray-800 hover:text-gray-600">{{$blog->title}}</a></h3>
                        <p class="text-gray-600 mb-4">{{substr($blog->main_content,0,strpos($blog->main_content,'.'));}}.</p>
                        <a href="{{route('readarticle',['slug'=>$blog->slug])}}" class="text-indigo-700 hover:text-gray-600">Read More</a>
                    </div>
                </div>
            </div>    
            @endif  
            @endforeach   
            {{-- paginator --}}    
            <div class="w-full">
                <ul class="flex justify-center">
                    <li>
                        <button class="px-4 py-2 bg-indigo-200 text-gray-600 border rounded-l-md disabled:opacity-50" 
                                wire:click="previousPage" 
                                {{ $blogs->previousPageUrl() ? '' : 'disabled' }}>
                            Previous
                        </button>
                    </li>
            
                    @foreach ($blogs->links() as $element)
                        @if (is_string($element))
                            <li>
                                <span class="px-4 py-2 bg-gray-200 text-gray-600 border">{{ $element }}</span>
                            </li>
                        @endif
            
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <li>
                                    <button class="{{ $page == $blogs->currentPage() ? 'px-4 py-2 bg-blue-500 text-white border' : 'px-4 py-2 bg-gray-200 text-gray-600 border' }}"
                                            wire:click="gotoPage({{ $page }})">
                                        {{ $page }}
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
            
                    <li>
                        <button class="px-4 py-2 bg-indigo-200 text-gray-600 border rounded-r-md disabled:opacity-50" 
                                wire:click="nextPage" 
                                {{ $blogs->nextPageUrl() ? '' : 'disabled' }}>
                            Next
                        </button>
                    </li>
                </ul>
            </div>         
        @endif                            
    </div>
</div>