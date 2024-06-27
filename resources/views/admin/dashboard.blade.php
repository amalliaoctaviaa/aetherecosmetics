@extends('layouts.master')

@section('content') 
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Produk</p>
            <h4 class="mb-0">{{ $productTotal }} Produk</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        
      </div>
    </div>
    <div class="col-xl-6 col-sm-6">
      <div class="card">
        <div class="card-header p-3 pt-2">
          <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
            <i class="material-icons opacity-10">weekend</i>
          </div>
          <div class="text-end pt-1">
            <p class="text-sm mb-0 text-capitalize">Total Persediaan</p>
            <h4 class="mb-0">{{ $productStock }} Stok</h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        
      </div>
    </div>
  </div>
  <div class="row mt-4">
    @foreach($product as $data)
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="border-radius-lg py-3 pe-1">
              <img src="assets/fotoproduct/{{ $data->product_foto }}" alt="" width="300px">
          </div>
        </div>
        <div class="card-body">
          <h6 class="mb-0 ">{{ $data->product_name }}</h6>
          <hr class="dark horizontal">
          <div class="d-flex ">
            <p class="mb-0 text-sm">Rp. {{ $data->product_price }} | Stok {{ $data->product_stock }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>  
</div>
@endsection