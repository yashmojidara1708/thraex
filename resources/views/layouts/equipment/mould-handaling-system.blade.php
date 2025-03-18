@extends('layouts.servicesdetail')

@section('maincontent')
    <div class="container py-5">
        <div class="services-detail">
            <h2 class="custom-color">Sand Mixer Unit</h2>
            <div class="text">
                <div class="row align-items-center">
                    <!-- Left Side - Content -->
                    <div class="col-md-8">
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
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/images/resource/Carousel_Unit.jpeg') }}" width="60%"
                            alt="Equipment Image" class="img-fluid rounded border p-2">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
