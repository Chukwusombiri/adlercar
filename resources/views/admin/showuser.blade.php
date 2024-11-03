<x-admin-layout>
  <x-admin-nav></x-admin-nav>
  <x-admin-sidebar></x-admin-sidebar>
    <!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Activity</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{route('admin.users')}}">Back</a></li>
              
              <li class="breadcrumb-item active">user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Shipments</h3>
        
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">                              
                        <a
                           class="btn btn-block btn-primary btn-sm"
                           onclick='Livewire.emit("openModal","admin.add-user-shipment",@json([$user->id]))'
                           >New Shipment</a>                                
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              @livewire('admin.manage-user-shipments',['user'=>$user])
            </div>
            <!-- /.card -->
          </div>
        </div>
          <!-- /.row -->
        </div>    
    </section>
</div>
<x-admin-footer></x-admin-footer>
</x-admin-layout>

<script>
  Livewire.on('approvedInvestment',(e)=>{
    toastr.success('investment approved.')  
  }) 

  Livewire.on('addedShipment',(e)=>{
    toastr.success('Shipment created successfully')  
  }) 

  Livewire.on('sentMail',(e)=>{
    toastr.success('Mail sent successfully')  
  }) 
</script>
