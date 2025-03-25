@extends('frontend.layouts.servicesdetail')
@section('maincontent')
    <div class="container py-5">
        <div class="services-detail">
            <h1 class="custom-color">Lost Foam Casting Plant</h1>
            <div class="text">
                <figure>
                    <img src="{{ asset('assets/frontend/images/resource/lost_foam.jpeg') }}" alt="" />
                </figure>
                <h2 class="custom-color"> Lost Foam Casting Process</h2>
                <p class="dark-text"> The Lost Foam Casting Process is a technique that eliminates the need for sand binders
                    and cores in casting. In this
                    method, unbonded sand is utilized, and a foam pattern is employed to shape the casting. The process
                    involves the
                    following key steps:
                </p>
                <p class="dark-text">
                    <b> Fill & Compact:</b></br>
                    At the Fill & Compact process station, the foam pattern is "invested" into the sand. This allows the
                    sand to fill all voids
                    and support the external form of the foam pattern. The sand is introduced into the flask containing the
                    casting cluster
                    and compacted to ensure proper support for all voids and shapes
                </p>
                <p class="dark-text">
                    <b> Pouring Operation:</b></br>
                    The flask, now containing the invested foam pattern and compacted sand, is transported to the pouring
                    operation. As
                    metal is poured, the foam evaporates, enabling the metal to take the shape of the casting cluster.
                </p>
                <p class="dark-text">
                    <b>Flask Dump Station:</b></br>
                    Sand and metal separation occurs at the Flask Dump Station. Due to the absence of binders in the sand,
                    this process is
                    executed effortlessly. Systems can be designed to accommodate quenching operations if necessary.
                </p>
                <p class="dark-text">
                    <b>Casting Finishing:</b></br>
                    The casting cluster proceeds to the finishing area, where sprue, gate, and riser removal takes place.
                    The reprocessing of
                    sand through classification and cooling allows it to be reused. Thermal reclamation of the sand extends
                    its useful life.
                    Lost Foam offers both an environmentally friendly process and the advantage of more accurate casting.
                </p>
                <p class="dark-text">
                    <b>Foam Pattern Creation:</b></br>
                    Foam patterns are crafted from expanded polystyrene beads. These beads, initially hard granules similar
                    in size and
                    shape to sand granules, are expanded, stabilized, and molded into the desired shapes. Complex shapes may
                    require the
                    assembly of multiple patterns, which are then affixed to a central foam piece (tree). The assembled tree
                    is dipped into a
                    refractory coating to reinforce it. The strengthened tree, along with a pouring funnel (sprue), is
                    placed into the flask.
                </p>
                <p class="dark-text">
                    Thraex Co. is globally recognized as the leader in lost foam technology, offering a comprehensive line
                    of
                    equipment for various stages of the lost foam process, including flask pouring, handling, and
                    compaction, as well as
                    foam bead processing equipment.
                </p>


                <h1 class="custom-color">Lost Foam Advantages</h1>
                <figure>
                    <img src="{{ asset('assets/frontend/images/resource/lost4image.jpeg') }}" alt="" />
                </figure>
                <div class="row">
                    <div class="col-md-4 dark-text">
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;"> No core, core defects, core fins</li>
                            <li style="list-style: disc;">No Core shift/float</li>
                            <li style="list-style: disc;">No parting fins</li>
                            <li style="list-style: disc;">No shift</li>
                            <li style="list-style: disc;">Dry unbonded sand or media</li>
                            <li style="list-style: disc;">No moisture or binder related defects</li>
                            <li style="list-style: disc;">Easily recycled sand</li>
                            <li style="list-style: disc;">Low and clean solid waste disposal</li>
                            <li style="list-style: disc;">Non-hazardous material used.</li>
                            <li style="list-style: disc;">Reduced grinding, blasting finishing</li>
                            <li style="list-style: disc;">Low external emissions</li>
                        </ul>
                    </div>

                    <div class="col-md-4 dark-text">
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;"> Improved working environment</li>
                            <li style="list-style: disc;">(noise, dust, fumes, heavy lifting ).</li>
                            <li style="list-style: disc;"> Close dimensional tolerances.</li>
                            <li style="list-style: disc;"> Excellent surface finish</li>
                            <li style="list-style: disc;"> Decreased/eliminating machining</li>
                            <li style="list-style: disc;"> More complex shapes</li>
                            <li style="list-style: disc;"> Casting weight reduction</li>
                            <li style="list-style: disc;"> Low draft / no draft / reverse draft</li>
                            <li style="list-style: disc;"> Improved pressure-tight castings.</li>
                            <li style="list-style: disc;"> Reduced assembly</li>
                            <li style="list-style: disc;"> Cast-In inserts</li>
                            <li style="list-style: disc;"> Improved part performance</li>
                        </ul>
                    </div>

                    <div class="col-md-4 dark-text">
                        <ul class="custom-bullet-list">
                            <li style="list-style: disc;"> Design</li>
                            <li style="list-style: disc;">freedom</li>
                            <li style="list-style: disc;">Long tool life</li>
                            <li style="list-style: disc;">Long-term repeatable dimensions</li>
                            <li style="list-style: disc;">Just-in-time capabilities</li>
                            <li style="list-style: disc;">Simpler process control</li>
                            <li style="list-style: disc;">Lower labour costs</li>
                            <li style="list-style: disc;">Lower capital costs</li>
                            <li style="list-style: disc;">Reduced floor space requirements</li>
                            <li style="list-style: disc;">High productivity</li>
                            <li style="list-style: disc;">Reduced machining scrap</li>
                            <li style="list-style: disc;">Lower energy consumption</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
