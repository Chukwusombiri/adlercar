<div class="card">
    <div class="card-header">
      <h3 class="card-title">Users</h3>
  
      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 200px;">
          <input type="text" class="form-control float-right border-none" style="background-color:#edf2f7 "  placeholder="Search name or email" wire:model="search">
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
          <button class="btn btn-md btn-info rounded-pill" wire:click="$emit('openModal','admin.add-member')">Add member</button>
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
            <th>#</th>
            <th>Member</th>         
            <th>Registered</th> 
            <th>Last seen</th>                                     
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $u => $user)
            @if (!$user->is_admin)
            <tr>
              <td>{{$u+1}}</td>
              <td>{{$user->name}} <br>
                <button class="underline" wire:click='$emit("openModal", "admin.send-mail", @json([$user->id]))'>
                <i class="fa fa-envelope" aria-hidden="true"></i> {{$user->email}}</button></td>                          
              <td>{{date('M d, Y',strtotime($user->created_at))}}</td>  
              <td>{{date('M d, Y',strtotime($user->last_sign_out_at))}}</td>                                                     
              <td class="d-flex">                
                  <div>
                    <button wire:click='$emit("openModal", "admin.user-profile", @json([$user->id]))' class="border-0 rounded-pill px-2 pb-1 btn-info">view</button>
                    <button class="border-0 rounded-pill px-3" type="button" data-toggle="dropdown" aria-expanded="false" >
                      <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu left-4"> 
                      <li><a class="dropdown-item" href="{{route('admin.user.show',[$user->id])}}"><i class="fa fa-list" aria-hidden="true"></i> Activity</a></li>
                     
                      <li><button class="dropdown-item" onclick='Livewire.emit("openModal","admin.reset-password",@json([$user->id]))'><i class="fa fa-key"></i> Password</button></li>                                                                 
                      <li><button class="dropdown-item" wire:click='$emit("openModal","admin.delete-member",@json([$user->id]))'><i class="fa fa-user-times" aria-hidden="true"></i> Delete</button></li>
                      <div class="dropdown-divider"></div> 
                      @if ($user->is_admin)
                        <li><button class="dropdown-item" wire:click='$emit("openModal","admin.remove-admin",@json([$user->id]))'><i class="fa fa-unlock"></i> remove admin</button></li>
                      @else
                        <li><button class="dropdown-item" wire:click='$emit("openModal","admin.make-admin",@json([$user->id]))'><i class="fa fa-lock"></i> Make admin</button></li>  
                      @endif
                    </ul>
                  </div>                  
              </td>
          </tr>   
            @endif         
          @endforeach                        
        </tbody>
      </table>
      {{$users->links()}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->