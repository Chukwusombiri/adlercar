<div class="card">
    <div class="card-header">
      <h3 class="card-title">Shipments</h3>
  
      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 200px;">
          <input type="text" class="form-control float-right border-none" style="background-color:#edf2f7 "  placeholder="Search Receiver name or email" wire:model="search">
          @if ($search!=='')
            <button wire:click="clear" class="px-2"><i class="fa fa-times" aria-hidden="true"></i></button>            
          @endif
        </div>
      </div>
    </div>
    <!-- ./card-header -->
    <div class="card-body table-responsive">
      <div class="d-flex justify-content-between mb-2">
        <div>
          <button class="btn btn-md btn-info rounded-pill" wire:click="$emit('openModal','admin.add-shipment')">Add Shipment</button>
        </div>
        <div class="d-flex gap-3">             
          <select wire:model="date"  class="border-none outline-none bg-info rounded">                   
            <option value="asc">Sort by: Oldest</option>
            <option value="desc">Sort by: Newest</option>                        
          </select>
      </div>                            
      </div>      
      <table class="table table-hover table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Tracker</th>         
            <th>Content</th> 
            <th>Sender</th>         
            <th>Receiver</th>                       
            <th>Destination</th>
            <th>Status</th>                       
            <th>Action</th>  
          </tr>
        </thead>
        <tbody>
          @foreach ($shipments as $s => $shipment)
            @if (!$shipment->user->is_admin)
            <tr>
                <td>{{$shipment->tracker->tracker_id ?? 'nil'}}</td>                
                <td>{{$shipment->items}}</td>
                <td>{{$shipment->user->name}}<br>
                    <button class="underline" wire:click='$emit("openModal", "admin.send-mail", 
                    @json([$shipment->user->id]))'>
                    <i class="fa fa-envelope" aria-hidden="true"></i> {{$shipment->user->email}}</button>
                  </td>
                <td>{{$shipment->receiver}}<br>
                  <button class="underline" wire:click='$emit("openModal", "admin.send-receiver-email", 
                  @json([$shipment->id]))'>
                  <i class="fa fa-envelope" aria-hidden="true"></i> {{$shipment->receiver_email}}</button>
                </td>
                <td>{{$shipment->arrival}}</td>
                <td>{{Str::upper($shipment->status)}}</td>                                                     
                <td class="d-flex">           
                  @if (!$shipment->is_approved)                                                                                                                                                                      
                      <button wire:click="approve('{{$shipment->id}}')" type="button" class="btn btn-sm btn-secondary mr-3">
                          {{ __('approve') }}
                      </button>                                                                      
                  @endif 
                      <a href="{{route('admin.shipment.show',[$shipment->id])}}" 
                       class="btn  btn-sm btn-primary mr-3">view</a>                                      
                      <button wire:click="delete('{{$shipment->id}}')" type="button"
                         class="btn btn-sm btn-danger">
                          {{ __('delete') }}
                      </button>                                                                      
                </td>
            </tr>   
            @endif         
          @endforeach                        
        </tbody>
      </table>
      {{$shipments->links()}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->