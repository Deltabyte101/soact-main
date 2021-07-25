<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
        <!-- Thai font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="{{asset("favicon.ico")}}" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet" />

  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
          <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>ส่งผลแบบทดสอบสำเร็จ! <br> กรุณาแสกน QR Code เพื่อเข้าร่วมกลุ่มชมรม</p>
        <div>
            QR-CODE
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" >
            <div class="text-center" style="padding-top: 20%" >
              <a class="btn btn-outline-dark mt-auto" href="/">กลับสู่หน้าหลัก</a>
            </div>
        </div>

      </div>
    </body>
</html>
