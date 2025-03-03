@extends('admin.layouts.app')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('admin.common.alerts')
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h5 class="card-title">Merchant</h5>
                            </div>
                            <div class="col-lg-6 text-end">
                                @include('admin.merchant.components.create')
                            </div>
                        </div>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($merchants as $merchant)
                                    <tr>
                                        <td>{{ $merchant->name }}</td>
                                        <td>{{ $merchant->email }}</td>
                                        <td>{{ $merchant->address }}</td>
                                        <td>{{ $merchant->phone }}</td>
                                        <td>
                                            @include('admin.merchant.components.edit')
                                            @include('admin.merchant.components.remove')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
