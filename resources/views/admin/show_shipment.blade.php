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
              <h1 class="m-0">Shipment Management</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                
                <li class="breadcrumb-item active">shipment</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
           @livewire('admin.edit-shipment',['shipment'=>$shipment])
          </div>    
      </section>
  </div>
  <x-admin-footer></x-admin-footer>
  </x-admin-layout>
  
  <script>
    Livewire.on('editedShipment',(e)=>{
      toastr.success('Updated Shipment Details successfully')  
    }) 
  
    Livewire.on('updatedImage',(e)=>{
      toastr.success('Updated shipment Image')  
    }) 

    Livewire.on('deletedImage',(e)=>{
      toastr.success('Deleted shipment Image')  
    }) 

    Livewire.on('addedImage',(e)=>{
      toastr.success('Added shipment Image. Refresh page')  
    }) 
  </script>
  