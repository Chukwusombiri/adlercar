<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 mb-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <div class="w-full max-w-7xl mx-auto">
                    <h1 class="text-3xl font-semibold text-gray-900 mb-6 text-center">Shipment Tracker</h1>
                    <div class="flex flex-col justify-between gap-y-2">
                        <div class="w-full">
                            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-gray-900 mb-4 text-center">Tracker Information</h2>
                                    <div class="w-full flex justify-center">
                                        <figure class="flex flex-col gap-y-0">
                                            <img src="{{url('images/Barcode3.jpg')}}" alt="barcode" class="w-[100%] h-[100px]">
                                            <figcaption class="text-gray-600 text-base">{{$shipment->tracker->tracker_id}}</figcaption>
                                        </figure>                                                                                
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-sm text-gray-600 mb-1">Tracker ID:</p>
                                        <p class="text-lg font-semibold mb-4">{{$shipment->tracker->tracker_id}}</p>        
                                        <p class="text-sm text-gray-600 mb-1">Last Update:</p>
                                        <p class="text-lg font-semibold mb-4">{{$shipment->updated_at->format('F j, Y')}}</p>
                                        <div class="mt-6">
                                        <a href="/" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 transition duration-200">Back to Home</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-100 rounded-lg">
                            <h3 class="text-gray-800 font-semibold mb-2">Shipment Progress</h3> 
                            <p class="text-sm text-gray-600 mb-1 font-semibold">Current Location:</p>
                            <p class="text-lg font-semibold mb-4">{{$shipment->current_location}}</p>                          
                            <div class="text-lg uppercase font-semibold mb-1">{{$shipment->status}}</div>
                            <div class="flex items-center mb-2">
                                <div class="h-4 w-4 bg-blue-400 rounded-full mr-1"></div>
                                @if ($shipment->status=='on-transit')
                                <img src="{{url('images/gif/progress2.gif')}}" alt="" class="h-16 w-2/3">
                                @elseif($shipment->status=='on-hold')
                                <div class="w-2/3 flex justify-center">
                                    <img src="{{url('images/gif/arrow.png')}}" alt="" class="h-10 w-2/3">
                                    <img src="{{url('images/gif/cancel.png')}}" alt="" class="h-10 w-10">
                                </div>
                                @elseif($shipment->status=='unapproved')
                                <div class="w-2/3 flex justify-center">
                                    <img src="{{url('images/gif/review.png')}}" alt="" class="h-25 w-25">                                   
                                </div>
                                @else
                                <div class="w-2/3 flex justify-center">
                                    <img src="{{url('images/gif/checkmark.png')}}" alt="" class="h-20 w-2/3">                                    
                                </div>                                
                                @endif
                                <div class="h-4 w-4 bg-blue-400 rounded-full ml-1"></div>
                            </div>                                                       
                        </div>
                        <div class="w-full mb-8">
                            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                                <div class="p-4">
                                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Shipment Information</h2>
                                    <div class="flex flex-col justify-between divide-y divide-solid">
                                        <div class="w-full">                                           
                                            <p class="text-sm text-gray-600 mb-1">Product Type:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->product_type}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Items:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->items}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Size:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->size}} KG</p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-sm text-gray-600 mb-1">Origin:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->departure}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Destination:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->arrival}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Mode of Shipment:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->mos.' freight'}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Expected Date of Shipment Delivery:</p>
                                            <p class="text-lg font-semibold mb-4">{{date('M d, Y',strtotime($shipment->arrival_date)) ?? 'Yet to be determined'}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Status:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->status}}</p>
                                        </div>
                                        <div class="w-full">
                                            <p class="text-sm text-gray-600 mb-1">Cost of Shipment:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->cos}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Payment Method:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->payment_method}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Recipient:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->receiver}}</p>
                                            <p class="text-sm text-gray-600 mb-1">Recipient Email:</p>
                                            <p class="text-lg font-semibold mb-4">{{$shipment->receiver_email}}</p>
                                        </div>
                                    </div>
                                    @if (count($shipment->itemPhoto)>0)
                                    <hr class="my-8">
                                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Shipment Photos</h2>
                                    <div class="flex flex-wrap -mx-2 mb-6">
                                    @foreach($shipment->itemPhoto as $photo)
                                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                                        <img class="w-full h-full object-cover rounded-md shadow" src="{{asset('storage/'.$photo->photo_path) }}" alt="Shipment Photo">
                                        </div>
                                    @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>                        
                    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>