@extends('master')

@section('header')

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Activity Free time</h1>
                <p class="lead fw-normal text-white-50 mb-0">Rajamangala university of technology thanyaburi</p>
                <p class="display-6 fw-bolder" style="padding-top: 2%;">" เริ่มการสำรวจและเลือกชมรมที่คุณสนใจที่จะเข้าร่วม! "</p>
            </div>
        </div>
    </header>

@endsection

@section('content')

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ( $datas as $data )


                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <!-- src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                height:170px
                                width:auto;/*maintain aspect ratio*/
                                max-width:500px;-->
                                <img class="card-img-top" style="width:auto;height:auto;" src="{{ Storage::url( $data->picture) }}"   alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"   >{{ $data->name}}</h5>
                                        <!-- Product price-->
                                        <span class="fw-bolder">{{ $data->faction }}</span> <br>
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" >
                                            <div class="text-center" style="padding-top: 20%" ><a class="btn btn-outline-dark mt-auto" href="{{ route("index.show",$data->id)}}">View more</a></div>
                                        </div>
                                        <!--<a class="btn btn-primary" style="width: 100%;padding:5%" href="{{ route("index.show",$data->id)}}">View</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>


@endsection

