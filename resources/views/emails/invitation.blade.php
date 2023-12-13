<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        invitation
    </title>
</head>

<body>
</body>

<body>
    <div id="component" class="container-fluid py-3">
        <p class="text-end  m-0 px-3 py-2">
            <span style="color: #F3A58F" class=" fs-1 fw-bold font-family-Almarai">
                دعوة خاصة
                <br>
            </span>
            <span style="color: #F3A58F" class="text-danger-subtle fs-1 fw-bold font-family-Almarai">
                المرصد العربي للترجمة
            </span>
        </p>
    </div>


    <div id="component2" class="container-fluid py-3">
        <p class="text-end  m-0 px-3 py-2">
            <span class="text-dark fs-2 fw-bold font-family-Almarai">
                السلام عليكم ورحمة الله وبركاتة
                <br>
                <br>
                سعادة السيد/ة {{ $invitation->name }} الموقر
                <br>
                <br>
            </span>
            <span class="text-dark fs-5 fw-bold font-family-Almarai">
                يطيب لنا دعوتكم لحضور
            </span>
            <span class="text-secondary fs-5 fw-bold font-family-Almarai">
                حفل تدشين المرصد العربي للترجمة
            </span>
            <span class="text-dark fs-5 fw-bold font-family-Almarai">
                المقام بتاريخ 13 يناير 2024
            </span>
            <span class="text-secondary fs-5 fw-bold font-family-Almarai">
                في فندق الريتز كارلتون
            </span>
            <span class="text-dark fs-5 fw-bold font-family-Almarai">
                , في الرياض, المملكة العربية السعودية
                <br>
            </span>
        </p>
    </div>
    <div id="component3" class="container-fluid py-3">
        <p class="text-end text-dark fs-4 font-family-Almarai  m-0 px-3 py-2">
            :بإمكانكم الاطلاع علي تفاصيل الدعوة, ومن ثم الرد والقبول او الاعتذار عبر الراد بالقبول أو الاعتذار عبر
            الرابط التالي </p>
    </div>


    <div class="pe-4 ps-0 py-3">
        <div id="component4" class="container-fluid  me-0 " style=" width:350px;">


            <div class=" d-flex flex-row">


                <a href="{{ route('invitation', $invitation->id) }}" class="d-flex position-relative">
                    <p class="position-absolute text-start  text-white fs-3 fw-bold my-p font-family-Almarai col-6 m-0 px-3 py-2"
                        style="background-color: #0A2C36 ; width:330px;height: 65px; ">
                        رابط التسجيل
                        <div class="position-absolute  my-p "
                            style="width: 100px; height: 65px; right: -330px; ; background-color: #517889;">
                            <div class="d-flex justify-content-center align-items-center h-100  "> <img
                                    src="{{ asset('assets/images/email/email-icon.svg') }}" class=" p-3 h-100 m-auto"
                                    alt=""> </div>
                        </div>
                    </p>


                </a>
            </div>


        </div>

    </div>

    <div id="component" class="container-fluid py-3 mt-5">
        <p class="text-end text-secondary fs-3 font-family-Almarai  m-0 px-3 py-2">
            تتطلع إلى حضوركم ومشاركتكم الحدث الثقافي المميز.
            <br>
            <br>
            شاگرین دعمكم وتشريفكم.
            <br>
        </p>
    </div>



    <div id="component" class="container-fluid py-3">
        <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
            فريق عمل المرصد&nbsp;العربي&nbsp;للترجمة
        </p>
    </div>
    <div id="component" class="container-fluid w-100 position-relative py-3" style="background-color: #0A2C36;">
        <div class="my-row" style="margin-right: auto;margin-left: 75px;">
            <img src="{{ asset('assets/images/logo1.png') }}" alt="" style="height: 38px;margin-right: 20px;">
            <img src="{{ asset('assets/images/logo2.png') }}" alt="" style="height: 51px;margin-right: 20px;">
            <img src="{{ asset('assets/images/logo3.png') }}" alt="" style="height: 33px;">
        </div>
        <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}" alt="" style="position: absolute;height: 100%;width: 75px;left: 0;top: 0;">
    </div>
</body>

</html>
