@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
     </div>

     <div class="card row">
          <div class="card-body">
               <table class="table table-bordered">
                    <tr>
                         <th>ID</th>
                         <td>{{$item->id}}</td>
                    </tr>
                    <tr>
                         <th>Paket Travel</th>
                         <td>{{$item->travel_package->title}}</td>
                    </tr>
                    <tr>
                         <th>Pembeli</th>
                         <td>{{$item->user->name}}</td>
                    </tr>
                    <tr>
                         <th>Additional Visa</th>
                         <td>${{$item->additional_visa}}</td>
                    </tr>
                    <tr>
                         <th>Total Transaksi</th>
                         <td>${{$item->transaction_total}}</td>
                    </tr>
                    <tr>
                         <th>Status Transaksi</th>
                         <td>{{$item->transaction_status}}</td>
                    </tr>
                    <tr>
                         <th>Pembelian</th>
                         <td>
                              <table class="table-bordered">
                                   <tr>
                                        <td>ID</td>
                                        <td>Nama</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>DOE Passport</td>
                                   </tr>
                                   @foreach ($item->details as $detail)
                                       <tr>
                                            <td>{{$detail->id}}</td>
                                            <td>{{$detail->username}}</td>
                                            <td>{{$detail->nationality}}</td>
                                            <td>{{$detail->is_visa?'30 Days':'N/A'}}</td>
                                            <td>{{$detail->doe_passport}}</td>
                                        </tr>
                                   @endforeach
                              </table>
                         </td>
                    </tr>
               </table>
          </div>
     </div>

   </div>
   <!-- /.container-fluid -->
@endsection

