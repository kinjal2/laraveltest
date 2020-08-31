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
            <h1 class="m-0 text-dark">Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	    <section class="content">
	 <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Company List  <a href="{{ route('company.create') }}" class="btn btn-sm btn-primary float-right">Add
                            New</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
				  <th>Id</th>
                    <th>Name</th>
					<th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                     <th>Action</th>
                  
                  </tr>
                  </thead>
                  <tbody>
				 
                   @foreach($company as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->email}}</td>
                                    <td>{{ $category->logo}}</td>
                                    <td>{{ $category->website}}</td>
                                    <td>
									 <form action="{{ route('company.destroy',$category->id) }}" method="POST">
                                        <a href="{{ route('company.edit', $category->id) }}"
                                           class="btn btn-sm btn-primary">Edit</a>
                                        @csrf
                    @method('DELETE')
		<button type="submit" class="btn btn-danger">Delete</button>
		
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
			  </div>
			  </div>
            </div>
			   </div>
            <!-- /.card -->
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
