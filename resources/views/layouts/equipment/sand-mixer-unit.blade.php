@extends('layouts.servicesdetail')

@section('maincontent')
    <div class="container py-5">
        <div class="services-detail">
            <h2 class="custom-color">Sand Mixer Unit</h2>
            <div class="text">
                <p class="dark-text"> Sand mixer is high speed action to blending sand and two or more chemical binders
                    (resin & catalyst) for making
                    versatile, precise and stable mould in No Bake Sand Foundry with getting better efficiency in
                    consumption of
                    binders. The sand is processed in this high-speed mixer with advance control system and pump station. We
                    are
                    supplying N mix and N Bmix model in sand mixing requirement.
                </p>
                <figure>
                    <img src="{{ asset('assets/images/resource/n_mixandn-Bmix.jpeg') }}" alt="" />
                </figure>
                <p>
                <ul class="custom-bullet-list dark-text">
                    <li style="list-style: disc;">Roughed Design chrome coating trough cover and mixer housing with heavy
                        duty pedestal equipped with slewing bearing</li>
                    <li style="list-style: disc;">Main shaft equipped with wear resistant blade</li>
                    <li style="list-style: disc;">Main Motor Equipped with mixing shaft through coupling </li>
                    <li style="list-style: disc;">Mixer equipped with belt conveyor for huge mould.</li>
                    <li style="list-style: disc;">High speed mixing</li>
                    <li style="list-style: disc;">Low consumption of chemical binders</li>
                    <li style="list-style: disc;">Easy maintenance and operation</li>
                    <li style="list-style: disc;">Range from 1 tph to 20 tph in N mix and 10 tph to 60 tph in N Bmix model
                        mixer.</li>
                </ul>
                </p>
                <h2 class="custom-color">Sand Reclamation Unit</h2>
                <p class="dark-text">
                    We are dealing in mechanical and thermal reclamation system to reuse sand as reclaimed sand to add with
                    new
                    sand for making new mould. Presently working on mechanical sand reclamation with N LR, N LCR and N HR
                    attrition unit with range from 1 tph to 25 tph capacity. All these models are roughed design with heavy
                    structural
                    body and equipped with high efficiency vibrating motor and rest on spring. Apart from we are supplying
                    vibrating
                    elevator to reduce civil work and improvement in cooling of hot reclaimed sand for keep in storage
                    bunker and
                    getting high quality mixing sand.
                </p>
                <div class="container py-4">
                    <div class="row align-items-center">
                        <!-- Left Side - Content -->
                        <div class="col-md-8">
                            <ul class="custom-bullet-list">
                                <li style="list-style: disc;">Roughed design with membrane heavy-duty body structure</li>
                                <li style="list-style: disc;">QUARD 400 high wear resistant material deck plate with wedge
                                    wire screen</li>
                                <li style="list-style: disc;">Equipped with high efficiency vibrating motor</li>
                                <li style="list-style: disc;">Easily accessible with low maintenance</li>
                                <li style="list-style: disc;">N LR attrition unit comes with range of 3 tph to 12 tph</li>
                            </ul>
                        </div>

                        <!-- Right Side - Image -->
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/resource/ser1.jpeg') }}" width="60%" alt="Equipment Image"
                                class="img-fluid rounded border p-2">
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row align-items-center">
                        <!-- Left Side - Image -->
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/resource/ser2.jpeg') }}" width="80%"
                                alt="Classifier Unit Image" class="img-fluid rounded border p-2">
                        </div>

                        <!-- Right Side - Content -->
                        <div class="col-md-8">
                            <ul class="custom-bullet-list">
                                <li style="list-style: disc;">Cooler classifier unit comes with efficient heat exchanger for
                                    cooling sand and classify
                                    dust from sand through forced draught blower fan system for maintaining LOSS OF
                                    IGNITION.</li>
                                <li style="list-style: disc;">Cooler CLASSIFIER UNIT OFFER FROM <b>3 TPH TO 25 TPH</b></li>
                                <li style="list-style: disc;">Sand sample door and vibrating fork to indicate sand amount
                                </li>
                                <li style="list-style: disc;">Fluidised bed equipped with air flow manifold & centrifugal
                                    fan system</li>
                                <li style="list-style: disc;">Pneumatic transporter range from <b>3 TPH TO 25 TPH</b></li>
                                <li style="list-style: disc;">Dense phase pneumatic conveying for new and reclaimed sand
                                    from one point to destination
                                    point</li>
                                <li style="list-style: disc;">Offer line booster for sand conveying for long-distance
                                    destinations</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
