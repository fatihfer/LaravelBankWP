@extends('layouts.global')
@section('title', 'Ubah Bank')

@section('content')
<section class="content-header">
    <h1>
      Ubah Bank
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{Route('bank.index')}}">Data Bank</a></li>
      <li class="active">Ubah Bank</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
   
    <div class="row">
      <div class="col-md-12">
        
        <div class="box box-success">
            <!-- form start -->
            <form enctype="multipart/form-data" class="bg-white shadow-sm p-3"
            action="{{route('bank.update', ['id'=>$bank->id])}}" method="POST">
            @csrf
            <input type="hidden" value="PUT" name="_method">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input value="{{old('nama') ? old('nama') : $bank->nama}}" class="form-control {{$errors->first('nama')
                    ? "is-invalid": ""}}" placeholder="Full Name" type="text" name="nama"
                    id="nama"/>
                    <div class="invalid-feedback">
                        {{$errors->first('nama')}}
                    </div>

                </div>
                <class="form-group">
                    <label for="jk">Jenis Bank</label>
                        <select name="jk" class="form-control" id="jk">
                            <option value="Swasta" {{$bank->jk === "Swasta" ? "selected" : ""}}>Swasta</option>
                            <option value="BUMN" {{$bank->jk === "BUMN" ? "selected" : ""}}>BUMN</option>
                        </select>
                    <div class="invalid-feedback">
                        {{$errors->first('jk')}}
                    </div>
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="{{old('alamat') ? old('alamat') : $bank->alamat}}" class="form-control {{$errors->first('alamat')
                    ? "is-invalid": ""}}" placeholder="Alamat" type="text" name="alamat"
                    id="alamat"/>
                    <div class="invalid-feedback">
                        {{$errors->first('alamat')}}
                    </div>
  
                </div>
                <div class="form-group">
                    <label for="telp">No Telpon</label>
                    <input value="{{old('telp') ? old('telp') : $bank->telp}}" class="form-control {{$errors->first('telp')
                      ? "is-invalid": ""}}" placeholder="No Telpon" type="text" name="telp"
                      id="telp"/>
                      <div class="invalid-feedback">
                          {{$errors->first('telp')}}
                      </div>
  
                  </div>
                
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input value="{{old('foto')}}" class="form-control {{$errors->first('foto')
                    ? "is-invalid": ""}}" type="file" name="foto"
                    id="foto"/>
                    <div class="invalid-feedback">
                        {{$errors->first('foto')}}
                    </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">ubah</button>
              </div>
            </form>
          </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection
