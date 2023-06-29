@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
<<<<<<< HEAD
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
=======
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
>>>>>>> b73cde7795f3d65e5e8b47b019813dce2fda5864
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$countEmployee}}</h3>

                <p>Total Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('empView.allEmp')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$countPermanent}}</h3>
                <p>Permanent Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('permanentEmployees.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$countCasual}}</h3>

                <p>Casual Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('casualEmployees.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$countJOCOS}}</h3>

                <p>JO/COS Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('joEmployees.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$countSeparated}}</h3>

                <p>Separated Employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{route('separatedEmployees.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
