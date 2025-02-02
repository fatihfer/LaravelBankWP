@extends('layouts.global')
@section('title', 'Data Bank')

@section('content')
<section class="content-header">
    <h1>
      Data Bank
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Bank</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
   
    <div class="row">
      <div class="col-md-12">
        
        <div class="box">
          <div class="box-body">
            <div class="table table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Bank</th>
                        <th>No Telphone</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($banks as $no=>$bank)
                        <tr>
                            <td>{{$no + 1}}</td>
                            <td>{{$bank->nama}}</td>
                            <td>{{($bank->jk == 'Swasta') ? 'SWASTA' : 'BUMN'}}</td>
                            <td>{{$bank->telp}}</td>

                            <td>
                                <a  class="btn btn-info text-white btn-sm" href="{{route('bank.show',$bank->id)}}" data-toggle="tooltip" data-placement="bottom" title="lihat data"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a  class="btn btn-warning text-white btn-sm" href="{{route('bank.edit',$bank->id)}}" data-toggle="tooltip" data-placement="bottom" title="ubah data"><span class="glyphicon glyphicon-pencil"></span></a>
                                <form id="delete-form-{{ $bank->id }}" action="{{ route('bank.destroy',$bank->id) }}" style="display: none;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button data-toggle="tooltip" data-placement="bottom" title="hapus data" type="button" class="btn btn-danger text-white btn-sm" onclick="if(confirm('Apakah anda yakin ingin menghapus data ini?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $bank->id }}').submit();
                                }else {
                                    event.preventDefault();
                                        }"><span class="glyphicon glyphicon-trash"></span></button>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
              <a href="{{ route('bank.create') }}" class="margin-bottom-2 btn btn-success btn-sm btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Bank</a>
            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection
@push('javascript')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endpush
