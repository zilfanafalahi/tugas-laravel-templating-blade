@extends('adminlte.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Dashboard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">#</th>
        <th>Task</th>
        <th>Progress</th>
        <th style="width: 40px">Label</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Update software</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td>
        <td><span class="badge bg-danger">55%</span></td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Clean database</td>
        <td>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" style="width: 70%"></div>
          </div>
        </td>
        <td><span class="badge bg-warning">70%</span></td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Cron job running</td>
        <td>
          <div class="progress progress-xs progress-striped active">
            <div class="progress-bar bg-primary" style="width: 30%"></div>
          </div>
        </td>
        <td><span class="badge bg-primary">30%</span></td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Fix and squish bugs</td>
        <td>
          <div class="progress progress-xs progress-striped active">
            <div class="progress-bar bg-success" style="width: 90%"></div>
          </div>
        </td>
        <td><span class="badge bg-success">90%</span></td>
      </tr>
    </tbody>
  </table>
  <!-- /.card -->

</section>
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush