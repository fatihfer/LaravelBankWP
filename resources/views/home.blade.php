@extends('layouts.global')
@section('title', 'Dashboard')

@section('content')
<!-- Main content -->
<section class="content" style="background-color: #f7f7f7; padding: 50px 0;">
  <div class="container">
    <div class="box box-default">
      <div class="box-body" style="background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 40px;">
        <div class="text-center">
          <img src="{{ asset('storage/money.png') }}" width="250px" alt="logo bank" style="margin-bottom: 30px;">
          <h2 style="font-weight: bold; color: #333;">SISTEM PEMILIHAN BANK TERBAIK<br>
          DENGAN PENDEKATAN METODE WEIGHTED PRODUCT</h2>
          <p style="color: #777; margin-top: 20px;">Memilih bank terbaik kini lebih mudah dengan metode yang tepat dan akurat.</p>
          <br>
          <a href="{{ url('/kandidat') }}" class="btn btn-success" style="padding: 10px 30px; font-size: 18px;">Lihat Data Bank</a>
          <br><br>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</section>
@endsection
