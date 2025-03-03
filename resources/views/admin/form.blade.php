@extends('index')

@section('content')

@if (isset($flashMessage))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $flashMessage }}
        {{-- {{ session('message') }} --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Form controls -->
    <div class="mb-4">
        <h5>Add new Merchant</h5>


        <form action="{{ route('merchant.store') }}" method="POST">
            @csrf
            <!-- General Information -->
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="MerchantName" class="form-label" style="height:20px; margin-top:5%">Merhchant Name</label>
                        <input type="text" id="MerchantName" name="merchant_name" class="form-control @error('merhchant_name') is-invalid @enderror" placeholder="Merchant name">
                         @error('merchant_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                     <div class="col">
                        <label for="domainName" class="form-label" style="height:20px; margin-top:5%">Domain</label>
                        <input type="text" id="domainName" name="domain_name" class="form-control @error('domain_name') is-invalid @enderror" placeholder="Domain">
                        @error('domain_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <div class="row">
                    <div class="col">
                        <label for="customerName" class="form-label" style="height:20px; margin-top:5%">Customer Name</label>
                        <input type="text" id="customerName" name="customer_name" class="form-control @error('customer_name') is-invalid @enderror" placeholder="Customer name">
                        @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col">
                        <label for="customerEmail" class="form-label" style="height:20px; margin-top:5%">Customer Email</label>
                        <input type="email" id="customerEmail" name="customer_email" class="form-control @error('customer_email') is-invalid @enderror" placeholder="Email Address">
                         @error('customer_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
@endsection
