@extends('layouts.dashboard')

@section('breadcrumb')
   <li class="breadcrumb-item">Dashboard</li>
   <li class="breadcrumb-item active">Laporan</li>
@endsection

@section('content')

   <div class="row">
      <div class="col-md-12">
      
         <div class="card">
            <div class="card-body">
               <div class="card-title">Laporan Pembayaran SPP Sekolah</div>
                       
                  <a href="{{ url('dashboard/laporan/create') }}" class="btn btn-primary btn-rounded">Cetak Laporan</a>
                                
            </div>
         </div>
      
      </div>
   </div>

@endsection