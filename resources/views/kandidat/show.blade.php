@extends('layouts.global')
@section('title', 'Detail Kandidat')

@section('content')
<section class="content-header">
    <h1>
      Detail Bank
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{Route('kandidat.index')}}">Data Bank</a></li>
      <li class="active">Detail Bank</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
   
    <div class="row">
      <div class="col-md-12">
        
        <div class="box box-success">
            <div class="box-body box-profile">
                @if($kandidat->foto)
                    <img class="profile-user-img img-responsive"  src="{{asset('storage/'.$kandidat->foto)}}" width="150px"/>
                @else
                    <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/default.png')}}" alt="User profile picture">
                @endif
                <h3 class="profile-username text-center">{{$kandidat->nama}}</h3>
  
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Jenis Bank</b> <a class="pull-right">{{($kandidat->jk == 'BUMN') ? 'BUMN' : 'Swasta'}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Alamat</b> <a class="pull-right">{{$kandidat->alamat}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>No Telphone</b> <a class="pull-right">{{$kandidat->telp}}</a>
                    </li>
                </ul>
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

