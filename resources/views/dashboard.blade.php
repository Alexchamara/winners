@extends('admin.layouts.app')

@section('content')
    <section class="section">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="  col-md-6">
                            <div class="card info-card sales-card">



                                <div class="card-body">
                                    <h5 class="card-title">Low Stock Raw Material
                                    </h5>


                                    <div class="col-12">
                                        <!-- Table Header -->
                                        <div class="row bg-primary text-white fw-bold p-2">
                                            <div class="col-1">#</div>
                                            <div class="col-5">Material</div>
                                            <div class="col-4">Quantity</div>
                                        </div>

                                        <!-- Table Body (Only Low Stock Items) -->


                                       
                                    </div>



                                </div>

                            </div>
                        </div>





                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </section><!-- End #main -->
@endsection
