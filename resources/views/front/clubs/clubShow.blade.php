@extends('master')

@section('header')

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Activity Free time</h1>
                <p class="lead fw-normal text-white-50 mb-0">Rajamangala university of technology thanyaburi</p>
                <p class="display-6 fw-bolder" style="padding-top: 2%;">" รับชมวิดีโอแนะนำชมรม และจำไว้ให้ดี! เพราะการสมัครต้องมีการทดสอบ!! "</p>
            </div>
        </div>
    </header>


@endsection
@section('content')
    <!-- Big DIV -->
    <div >
        <!-- Intro -->
        <div class="text-black" style="width:70%;
                                    height:200px;
                                    padding-top:5%;
                                    padding-left:20%; ">
            <div style="border-left: 10px solid #000080;padding-left:5%;">
                <h1>ยินดีต้อนรับสู่</h1>
                <h2 class="display-5 fw-bolder">{{ $datas->name }}</h2>
            </div>

            @if ( $datas->description )
                <div>
                    <h4 style="padding-left:6%"> " {{ $datas->description }} " </h4>
                </div>
            @endif

        </div>

        <!-- Information -->
        <div class="text-black" style="width:90%;
                                    height:auto;
                                    padding-top:5%;
                                    padding-left:20%; ">
            <div>
                <h3 style="line-height: 30pt;">● ขั้นตอนการสมัครชมรม </h3>
                <h5>
                    1. นักศึกษาเลือกชมรมที่สนใจจากเว็บไซต์ so.rmutt.ac.th/ActivityDay <br>
                    2. รับชมวิดีโอแนะนำชมรมเป็นเวลา <u>อย่างน้อย 2 นาที</u> เมื่อครบเวลาระบบจะเปิดให้ทำแบบทดสอบสมัครเข้าชมรม <br>
                    3. กรอกข้อมูลนักศึกษาและทำแบบทดสอบของชมรมที่นักศึกษาเลือก โดยเนื้อหาแบบทดสอบมาจากการวิดีโอแนะนำชมรม <br>
                    4. เมื่อทำแบบทดสอบเสร็จเรียบร้อย ให้นักศึกษากดปุ่ม submit เพื่อส่งคำตอบ <br>
                </h5>
                <br>
                <h3 style="line-height: 30pt;">● หมายเหตุ </h3>
                <h5>
                    1. นักศึกษาจะต้องสมัครเข้าชมรม <u>อย่างน้อย 1 ชมรม</u> <br>
                    2. หลังจากทำแบบทดสอบเสร็จแล้ว<u>สามารถสมัครชมรมอื่นต่อได้ทันที</u> <br>
                    3. หากพบเจอปัญหาการใช้งาน ติดต่อได้ที่ องค์การนักศึกษา มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี <br>
                </h5>
            </div>

        </div>

        <!-- Video and Test-->
        <div class="text-black" style="width:90%;
                                    height:auto;
                                    padding-top:5%;
                                    padding-left:20%; ">
            <div style="text-align: left;">
                <h3>● วิดีโอแนะนำชมรม</h3>
            </div>
            <!-- video -->
            <div style="text-align: center;">
                <iframe  id="myframe"  style="width:90%;height:600px;" src="{{ $datas->vdo }}"></iframe>
            </div>
            <!-- test shortcut -->
            <div >
                <h4 style=" padding-top:2%;">● แบบทดสอบเข้าชมรม</h4>
                <h5> หากนักศึกษาสนใจสมัครเข้า{{$datas->name}} หลังจากดูวิดีโอแนะนำชมรมเรียบร้อยแล้วให้กดทำแบบทดสอบเพื่อสมัครเข้าชมรม</h5>
                @if ( $datas->open === TRUE )
                    <div style="width: 80%; height: 100px;text-align: center;padding-left:20%; ">
                        <a id="status" href="#"  class="btn btn-secondary btn-lg" tabindex="-1" role="button" style="display:block" >กำลังตรวจสอบ</a>
                        <a id="button" href="/api/get/token/{{ $datas->id }}"  class="btn btn-primary btn-lg " tabindex="-1" role="button" style="display:none" ></a>
                    </div>
                    <script>
                        // Time setting
                        var i = 10 ;
                        var button = document.getElementById('button') ;
                        var statusButton = document.getElementById('status') ;
                        var counter =  setInterval(function Time()
                        {
                            button.style.display = "none" ;
                            statusButton.style.display = "block" ;
                            document.getElementById("status").innerHTML = "เหลือเวลาอีก "+i+" วินาที" ;
                            i -= 1 ;
                            if( i<0 )
                            {
                                clearInterval(counter) ;
                                statusButton.style.display = "none" ;
                                button.style.display = "block" ;
                                button.innerHTML = "แบบทดสอบพร้อมให้ใช้งานแล้ว" ;

                            }
                        },1000);
                    </script>
                @else
                    <a id="button" style="text-align: center;" class="btn btn-secondary btn-lg" tabindex="-1" role="button" >ชมรมยังไม่เปิดรับสมัครในเวลานี้</a>
                @endif
            </div>

            <!-- Back to main -->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" >
                <div class="text-center" >
                  <a class="btn btn-outline-dark mt-auto" href="/">กลับสู่หน้าหลัก</a>
                </div>
            </div>


        </div>




        <!--<iframe id="video" controls width="560" height="315" src="https://www.youtube.com/embed/3xP9ANhLq6s?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
        <!--<iframe  src="https://www.youtube.com/embed/3xP9ANhLq6s" frameborder="0" allowfullscreen controls></iframe>-->
        <br>
    </div>





@endsection
