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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">              
              <li class="breadcrumb-item active">dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$users}}</h3>

                <p>MEMBERS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('admin.users')}}" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$shipments}}</h3>

                <p>TOTAL SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>  
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>                          
            </div>
          </div>          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$approved_shipments}}</h3>

                <p>APPROVED SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>   
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>           
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$completed_shipments}}</h3>

                <p>COMPLETED SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div> 
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>                         
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$ontransit_shipments}}</h3>

                <p>ON-TRANSIT SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>  
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>                         
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$onhold_shipments}}</h3>

                <p>ON-HOLD SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>   
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>                        
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$unapproved_shipments}}</h3>

                <p>UNAPPROVED SHIPMENTS</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('admin.shipments')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>                  
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <div class="row">
              <!-- USERS LIST -->
              @if (count($newusers)>0)
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>
  
                    <div class="card-tools">
                      <span class="badge badge-danger">{{count($newusers)}} New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach ($newusers as $newuser)
                        <li>
                          <img src="{{url('storage/'.$newuser->profile_photo_path)}}" alt="User Image">
                          <a class="users-list-name" href="{{route('admin.user.show',[$newuser->id])}}">{{$newuser->name}}</a>
                          <span class="users-list-date">{{$newuser->created_at->diffForHumans()}}</span>
                        </li>   
                      @endforeach                                        
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="/admin/users">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              @endif

              <!-- WITHDRAWAL LIST -->
              @if (count($new_shipments)>0)
              <div class="card col-md-6">
                <div class="card-header">
                  <h3 class="card-title">Recently Added Shipment Request</h3>                  
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="products-list product-list-in-card">
                    @foreach ($new_shipments as $new_shipment)
                    <li class="item">
                      <div class="product-info">
                        <p class="product-title">User: {{$new_shipment->user->name}}</p>
                      </div>
                      <div class="product-info">
                        <a href="{{route('admin.shipment.show',[$new_shipment->id])}}">Items: {{$new_shipment->items}}
                          <span class="badge badge-warning float-right">${{$new_shipment->cos ?? '0'}}</span></a>
                        <span class="product-description">
                          Receiver: {{$new_shipment->receiver}}
                        </span>
                      </div>
                    </li>
                    <!-- /.item -->                                                        
                    @endforeach
                  </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="/admin/shipments" class="uppercase">View All Shipments</a>
                </div>
                <!-- /.card-footer -->
              </div>                  
              @endif
              {{-- col --}}
            </div>
            <!-- /.row -->
          </div>
          <!-- /.col -->

          <div class="col-md-12">
            <!-- TABLE: LATEST ORDERS -->
            <div class="row">
              @if (count($new_approved_shipments)>0)
              <div class="card col-md-12">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Latest Approved Shipments</h3>                  
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Cost</th>
                        <th>Destination</th>
                        <th>Tracker</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($new_approved_shipments as $new_approved_shipment)
                      <tr>
                        <td><a href="{{route('admin.user.show',[$new_approved_shipment->id])}}">{{$new_approved_shipment->user->name}}</a></td>
                        <td>{{$new_approved_shipment->receiver}}</td>
                        <td>${{$new_approved_shipment->cos}}</td>
                        <td>{{$new_approved_shipment->arrival}}</td>
                        <td>
                          <div class="sparkbar">{{$new_approved_shipment->tracker->tracker_id ?? 'nil'}}</div>
                        </td>
                        <td>@if ($new_approved_shipment->is_approved)
                          <span class="badge badge-success">approved</span>                            
                        @else
                        <span class="badge badge-warning">pending</span>  
                        @endif</td>                       
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">                  
                  <a href="/admin/shipments" class="btn btn-sm btn-secondary float-right">View All Shipments</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->                  
              @endif
            </div>            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<x-admin-footer></x-admin-footer>
</x-admin-layout>
