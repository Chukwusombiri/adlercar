<div class="flex gap-x-0 flex-nowrap w-10/12 mx-auto rounded-md bg-white">                       
    <input type="text" placeholder="enter your tracking code" wire:model.defer="tracker_id"
    class="sm:w-full w-5/6 border-0 outline-transparent py-4 rounded-l-md">                        
    <button type="button" wire:click.prevent="track" class="py-4 px-3 bg-indigo-600 text-white hover:bg-indigo-700 rounded-r-md">TRACK</button>
</div>
