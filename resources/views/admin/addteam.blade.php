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
            <h1 class="m-0">Team</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item"><a href="{{route('admin.teamMembers')}}">Back</a></li>
              
              <li class="breadcrumb-item active">team</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="row">
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Member</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
            <!-- form start -->
            <form method="POST" action="{{route('admin.teamMembers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" required>
    
                            @error('name')
                              <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                            @enderror
                      </div>
                  <div class="form-group col-md-6">
                    <label for="position">Position</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{old('position')}}" required>

                        @error('position')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                         
                  <div class="form-group">
                    <label for="photo_path">Upload Member image</label>
                    <input type="file" class="form-control-file @error('photo_path') is-invalid @enderror" id="photo_path" name="photo_path"> 
                    @error('photo_path')
                          <div class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</div>
                        @enderror
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Member</button>
              </form>
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
