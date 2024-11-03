<div>   
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">       
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Shipment Details
        </h3>      
    </div>
    <div class="bg-white px-4 sm:pb-6">
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-2 lg:gap-4 py-4">            
            <div class="form-group">
                <label for="receiver">{{__('Receiver Name')}}</label>
                <input type="text" name="receiver" wire:model="receiver" class="form-control">
                @error('receiver') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="receiver_email">{{__('Receiver Email')}}</label>
                <input type="text" name="receiver_email" wire:model="receiver_email" class="form-control">
                @error('receiver_email') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="items">{{__('Shipment Items')}}</label>
                <input type="text" name="items" wire:model="items" class="form-control">
                @error('items') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="product_type">{{__('Product Type')}}</label>
                <input type="text" name="product_type" wire:model="product_type" class="form-control">
                @error('product_type') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="size">{{__('Size in KG')}}</label>
                <input type="number" step="any" name="size" wire:model="size" class="form-control">
                @error('size') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>           
           {{--  --}}
           <div class="form-group">
                <label for="cos">{{__('Cost of Shipment')}}</label>
                <input type="text" name="cos" wire:model="cos" class="form-control">
                @error('cos') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="payment_method">{{__('Payment Method')}}</label>
                <select name="payment_method" id="payment_method" wire:model="payment_method" class="form-control">
                    <option value="">select</option>
                    <option value="Cash Deposit">Cash Deposit</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cryptocurrency">Cryptocurrency</option>
                </select>
                @error('payment_method') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="mos">{{__('Mode of Shipment')}}</label>
                <select name="mos" id="mos" wire:model="mos" class="form-control">
                    <option value="">select mode of shipment</option>
                    <option value="air">Air</option>
                    <option value="sea">Sea</option>
                    <option value="road">Road</option> 
                    <option value="rail">Rail</option> 
                </select>
                @error('mos') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>   
            <div class="form-group">
                <label for="departure">{{__('Departure City')}}</label>
                <input type="text" name="departure" wire:model="departure" class="form-control">
                @error('departure') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="arrival">{{__('Destination')}}</label>
                <input type="text" name="arrival" wire:model="arrival" class="form-control">
                @error('arrival') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>   
            <div class="form-group">
                <label for="arrival_date">{{__('Arrival Date')}} {{date('M d, Y',strtotime($shipment->arrival_date))}}</label>
                <input type="datetime-local" name="arrival_date" wire:model="arrival_date" class="form-control">
                @error('arrival_date') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>  
            <div class="form-group">
                <label for="current_location">{{__('Package Current location')}}</label>
                <input type="text" name="current_location" wire:model="current_location" class="form-control">
                @error('current_location') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>  
            <div class="form-group">
                <label for="status">{{__('Shipment Status')}}</label>
                <select name="status" id="status" wire:model="status" class="form-control">
                    <option value="">select shipment status</option>
                    <option value="unapproved">UNAPPROVED</option>
                    <option value="on-transit">ON TRANSIT</option>
                    <option value="on-hold">ON HOLD</option> 
                    <option value="completed">DELIVERED</option> 
                </select>
                @error('status') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>   
        </div>
        
        <div class="bg-white pb-5 border-t flex justify-end pt-2">            
            <button class="btn btn-info ml-3" type="button" wire:click="save">Save</button>
        </div>
    </div> 

    <div class="bg-white px-4 sm:pb-6">        
        @if (count($shipment_images)>0)  
            <div class="px-4 pb-2 sm:px-6 sm:py-4 border-b border-gray-150">       
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Shipment Items Image
                </h3>      
            </div>          
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-2 lg:gap-4 py-4">
               @foreach ($shipment_images as $item)
                    <div class="flex flex-col gap-b-2 w-full">
                        <a href=""><img src="{{url('storage/'.$item->photo_path)}}" height="200" alt=""></a>
                        <div class="pb-5 border-t flex justify-center pt-2">
                            <button class="btn btn-info" type="button" wire:click='$emit("openModal","admin.update-shipment-image",@json([$item->id]))'>change</button>
                            <button class="btn btn-danger ml-3" type="button" wire:click='deleteImage("{{$item->id}}")''>delete</button>
                        </div>
                    </div>   
               @endforeach             
            </div> 
        @endif 
        
        <div>
            <div class="px-4 pb-2 sm:px-6 border-b border-gray-150">       
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Upload Items Images
                </h3>      
            </div>
            <div class="form-group pt-2">
                <label for="new_images">{{__('Select Shipment Item Images')}}</label>
                <input type="file" id="new_images" name="new_images" wire:model="new_images" class="form-control" multiple>
                @error('new_images') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
            </div>  
            <div class="bg-white pb-5 flex justify-end pt-2">            
                <button class="btn btn-info ml-3" type="button" wire:click="addImage" @if (empty($new_images))
                    {{__('disabled')}}
                @endif>Submit</button>
            </div> 
        </div>
    </div> 
</div>
