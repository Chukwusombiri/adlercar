<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-y-8">
      <div class="lg:w-3/4 pr-8">
        <h1 class="text-3xl font-bold mb-4">{{$article->title}}</h1>
        <p class="text-gray-600 mb-4">Published on {{date('M d, y',strtotime($article->created_at))}}</p>
        <img class="mb-4 w-[800px] h-[400px]" src="{{url('storage/'.$article->cover_img)}}" alt="Blog Article Image">
        <p class="mb-8">{{$article->main_content}}</p>
        <h2 class="text-2xl font-bold mb-4 text-gray-700">{{$article->sub_title}}</h2>
        <p class="mb-4">{{$article->sub_content}}</p>
        <div class="border-t-2 border-gray-300 pt-4 flex justify-start gap-x-2">
            <img src="{{url('storage/'.$article->author_img)}}" alt="" class="h-20 w-20 rounded-full shadow">
            <div>
                <h2 class="text-lg font-bold mb-2">{{$article->author}}</h2>
                <p class="text-lg text-gray-500"><i>Author</i></p>            
            </div>            
        </div>
      </div>
      <div class="lg:w-1/4">        
        @if (count($blogs)>0)
        <div class="w-full bg-white p-4 rounded-lg">
            <h2 class="text-lg font-bold mb-4">Popular from Insights and Innovations</h2>
            <ul class="space-y-3" role="list">
                @foreach ($blogs as $blog)
                <li class="flex flex-col gap-y-1 mb-4">
                <img src="{{url('storage/'.$blog->cover_img)}}" alt="Article img" class="rounded h-48 w-full"/>
                <a href="{{route('readarticle',['slug'=>$blog->slug])}}" class="text-gray-500 underline hover:text-blue-700">{{$blog->title}}</a>
                </li> 
                @endforeach           
            </ul>
        </div>  
        @endif        
      </div>
    </div>
</div>    
