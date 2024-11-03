<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr> 
          <th>Tracker</th>         
          <th>Content</th>          
          <th>Receiver</th>                       
          <th>Destination</th>
          <th>Status</th>                       
          <th>Action</th>                       
        </tr>
      </thead>
      <tbody>
        @if (count($shipments)>0)
          @foreach ($shipments as $shipment)
              <tr>  
                  <td>{{$shipment->tracker->tracker_id ?? 'nil'}}</td>                
                  <td>{{$shipment->items}}</td>
                  <td>{{$shipment->receiver}}<br>
                    <button class="underline" wire:click='$emit("openModal", "admin.send-receiver-email", 
                    @json([$shipment->id]))'>
                    <i class="fa fa-envelope" aria-hidden="true"></i> {{$shipment->receiver_email}}</button></td>
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
          @endforeach                     
        @endif                            
      </tbody>
      <div class="p-2">{{$shipments->links()}}</div>
    </table>
  </div>
  <!-- /.card-body -->