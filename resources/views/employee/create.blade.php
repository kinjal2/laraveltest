@include('header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('sidebar');
 <!-- Main content -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	    <section class="content">
		   <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               {!! Form::open(['route' => 'employee.store']) !!}
                <div class="card-body">
					<div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter frist Name">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company</label>
					<select class="form-control" id="company" name="company">
					<option value="1">bgngh</option>
					</select>
                   </div>
				     <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div>
                 
                  
				   <div class="form-group">
                    <label for="exampleInputPassword1">phone No</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                </div>
              
			     {!! Form::close() !!}
            </div>
            <!-- /.card -->
			</div>
			</div>
			</div>
	</section>
   
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('footer')

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>

<script>
 $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
	</script>
</body>
</html>
