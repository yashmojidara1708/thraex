@extends('frontend.layouts.servicesdetail')

@section('maincontent')
    <div class="container py-5">
        <div class="services-detail">
            <h1 class="custom-color">Mould Handling System</h1>
            <div class="text">
                <div class="row align-items-center">
                    <!-- Left Side - Content -->
                    <div class="col-md-6">
                        <h2 class="custom-color">Carousel Unit</h2>
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;"> Drive base driving rotation for carousel unit with controlled
                                speed,
                                auto pneumatic eject system for mould box from station of
                                Roll Over Draw strip unit.</li>
                            <li style="list-style: disc;"> Customised design for station for 4, 6 or 8 mould handling
                                capacity.</li>
                        </ul>
                    </div>

                    <!-- Right Side - Image -->
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/frontend/images/resource/Carousel_Unit.jpeg') }}" width="60%"
                            alt="Equipment Image" class="img-fluid rounded border p-2">
                    </div>
                </div>
                <div class="row align-items-center">
                    <!-- Left Side - Content -->
                    <div class="col-md-6">
                        <h2 class="custom-color">Rollover Draw Machine</h2>
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;"> Rollover draw strip unit equipped with hydraulic system. To roll
                                over
                                four guide Modular segment equipped with hydraulic motor & hydraulic
                                power pack. Striping unit equipped with hydraulic cylinder at contrary
                                position.</li>
                            <li style="list-style: disc;"> Low maintenance.</li>
                            <li style="list-style: disc;"> Slow speed with smooth operation</li>
                        </ul>
                    </div>

                    <!-- Right Side - Image -->
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/frontend/images/resource/Carousel_Unit.jpeg') }}" width="60%"
                            alt="Equipment Image" class="img-fluid rounded border p-2">
                    </div>
                </div>
                <div class="row align-items-center">
                    <!-- Left Side - Content -->
                    <div class="col-md-6">
                        <h2 class="custom-color">Compaction Table</h2>
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;">Compact design body structure equipped with two vibrating motor
                                and
                                rubber bellow.</li>
                            <li style="list-style: disc;">Essential requirement in mould handling system</li>
                            <li style="list-style: disc;">Pneumatic control system to maintain air flow in rubber bellow.
                            </li>
                            <li style="list-style: disc;">Compact action for mould box reduces lead time sand filling
                                process
                            </li>
                            <li style="list-style: disc;">Manufacturing standard cum tailor made design compaction table as
                                per customer requirement.
                            </li>
                        </ul>
                    </div>

                    <!-- Right Side - Image -->
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/frontend/images/resource/Carousel_Unit.jpeg') }}" width="60%"
                            alt="Equipment Image" class="img-fluid rounded border p-2">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
