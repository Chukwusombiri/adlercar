<div>   
    <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">       
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Change Shipment Image
        </h3>      
    </div>
    <div class="bg-white px-4 sm:p-6">
        <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-3">
                <div class="form-group pt-2">
                    <label for="image">{{__('Select Shipment Item Image')}}</label>
                    <input type="file" id="image" name="image" wire:model="image" class="form-control">
                    @error('image') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
                </div>
            
                <div class="text-center">
                    @if ($image)
                    Image Preview:
                    <img class="mx-auto mt-2" width="200" height="200" src="{{ $image->temporaryUrl() }}"> 
                    @endif                                             
                </div>
            </div>
        </div>
    </div>
   
    <div class="bg-white py-2 mr-2 border-t flex justify-end">
        <button class="btn btn-secondary" wire:click="$emit('closeModal')">close</button>
        <button class="btn btn-info ml-3" type="button" wire:click="submit">update</button>
    </div>
</div>
