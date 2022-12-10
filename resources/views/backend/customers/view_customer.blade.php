@extends('view.customers')
@section('customers')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Customer</h3>
              <a href="#" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Customer</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>typesepatu</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Kategori</th>
                      <th>Action</th>


                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key => $customer)
                    <tr>
                     
                      <td>{{$customer->nama }}</td>
                      <td>{{$customer->telepon }}</td>
                      <td>{{$customer->alamat }}</td>
                      <td>{{$customer->typesepatu }}</td>
                      <td>{{$customer->status }}</td>
                      <td>{{$customer->email }}</td>
                      <td>{{$customer->kategori }}</td>
                      <td>
                        <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-info">Delete</a>                      
                      </td>

                    </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <!-- <th>Nama</th>
                      <th>Telepon</th>
                      <th>Alamat</th>
                      <th>typesepatu</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Kategori</th> -->
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
</div>
<!-- /.content-wrapper -->




@endsection

<!-- Vendor JS -->

<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/pages/data-table.js')}}"></script>