<div>   
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">       
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Create Shipment
        </h3>      
    </div>
    <form wire:submit.prevent="save">
        <div class="bg-white px-4 sm:p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-2 lg:gap-4 py-4">                
                <div class="form-group">
                    <label for="sender">{{__('Choose Sender')}}</label>
                    <select name="sender" id="sender" wire:model="sender" class="form-control">
                        <option value="" @if(old('sender')==''){{'selected'}}@endif>select sender</option>                            
                        @foreach ($users as $user)
                            @if (!$user->is_admin)
                                <option value="{{$user->id}}"  @if(old('sender')=='{{$user->id}}'){{'selected'}}@endif>{{Str::upper($user->name)}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('sender') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
                </div>                                       
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
                    <label for="size">{{__('Size')}}</label>
                    <input type="number" step="any" name="size" wire:model="size" class="form-control">
                    @error('size') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
                </div>           
               {{--  --}}
               <div class="form-group">
                    <label for="cos">{{__('Cost of Shipment')}}</label>
                    <input type="string" name="cos" wire:model="cos" class="form-control">
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
                    <label for="arrival_date">{{__('Arrival Date')}}</label>
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
                        <option value="" @if(old('status')==''){{'selected'}}@endif>select shipment status</option>
                        <option value="unapproved">UNAPPROVED</option>
                        <option value="on-transit">ON TRANSIT</option>
                        <option value="on-hold">ON HOLD</option> 
                        <option value="completed">DELIVERED</option> 
                    </select>
                    @error('status') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
                </div>   
                <div class="form-group">
                    <label for="images">{{__('Select Shipment Item Images')}}</label>
                    <input type="file" id="images" name="images" wire:model="images" class="form-control" multiple>
                    @error('images') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
                </div> 
            </div>
        </div>
       
        <div class="bg-white py-3 border-t flex justify-end px-4">
            <button class="btn btn-secondary" wire:click="$emit('closeModal')">Close</button>
            <button class="btn btn-info ml-3" type="submit">Save</button>
        </div>
    </form>
</div>
