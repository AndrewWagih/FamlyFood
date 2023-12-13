<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        Confirm attend
    </title>
    <style>
        .my-row {
            margin-right: auto;
            /* margin-left: 115px; */
        }

        .my-row img:nth-child(1) {

            height: 55px;
            margin-right: 20px;

        }

        .my-row img:nth-child(2) {

            height: 75px;
            margin-right: 20px;

        }

        .my-row img:nth-child(3) {

            height: 53px;
        }

        .footer-mobile-view {
            display: none;
        }

        .rectangle {
            position: absolute;
            height: 100%;
            width: 102px;
            left: 0;
            top: 0;
        }


        @media (min-width: 992px) {






            #component3 {

                margin: 0;
                width: 65%;
                margin-left: auto;

            }

        }

        @media (max-width: 991px) {







            #component3 {
                width: 100%;
            }

            .my-p {

                height: 55px !important;
                overflow: hidden;

            }
        }


        @media (max-width: 600px) {


            .my-row {
                margin-right: auto;
                margin-left: 75px;
            }

            .my-row img:nth-child(3) {

                height: 38px;
                margin-right: 20px;

            }

            .my-row img:nth-child(2) {

                height: 51px;
                margin-right: 20px;

            }

            .my-row img:nth-child(1) {

                height: 33px;
            }

            .rectangle {
                position: absolute;
                height: 100%;
                width: 75px;
                left: 0;
                top: 0;
            }

            .footer-web-view {
                display: none;
            }

            .footer-mobile-view {
                display: block;
            }
        }
    </style>
</head>


{{-- <body>

    <div id="component" class="container-fluid py-3">
        <p class="text-end  m-0 px-3 py-2">
            <span class="text-dark fs-2 fw-bold font-family-Almarai">
                سعادة السيد/ة {{ $invitation->name }}
                <br>
                يطيب لنا دعوتكم لحضور
            </span>
            <span class="text-secondary fs-2 fw-bold font-family-Almarai">
                حفل تدشين المرصد العربي للترجمة
            </span>
            <span class="text-dark fs-2 fw-bold font-family-Almarai">
                المقام بتاريخ 13 يناير 2024
            </span>
            <span class="text-secondary fs-2 fw-bold font-family-Almarai">
                في فندق الريتز كارلتون
            </span>
            <span class="text-dark fs-2 fw-bold font-family-Almarai">
                , في الرياض, المملكة العربية السعودية
            </span>
        </p>
    </div>

    <div id="component2" class="container-fluid me-0 px-4 py-3" style="width: 350px;">
        <div class="bg-success-subtle rounded-3">


            <p class="text-end  m-0 px-3 py-2">
                <span class="text-dark fs-2 fw-normal font-family-Almarai">
                    حالة حضورك:
                </span>
                <span class="text-success fs-2 fw-normal font-family-Almarai">
                    مؤكدة
                    <br>
                </span>
            </p>
        </div>

    </div>

    <div class="container-fluid py-3">
        <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
            يمكنك استلام بطاقة الدخول أثناء وصولك إلى الحفل.
        </p>
    </div>

    <div class="container-fluid py-3">
        <p class="text-end text-secondary fs-3 font-family-Almarai  m-0 px-3 py-2">
            ندعوك للإطلاع على أجندة حفل التدشين
        </p>
    </div>


    <div class="pe-4 ps-0 py-3">
        <div id="component4" class="container-fluid  me-0 " style=" width:350px;">


            <div class=" d-flex flex-row">

                <a href="{{ route('download-agenda') }}">
                    <div class="d-flex position-relative">
                        <p class="position-absolute text-start  text-white fs-4 fw-bold my-p font-family-Almarai col-6 m-0 px-3 py-2"
                            style="background-color: #0A2C36 ; width:330px;height: 60px; ">
                            ملف اجندة الحفل
                        <div class="position-absolute  my-p "
                            style="width: 100px; height: 60px; right: -330px; ; background-color: #517889;">
                            <div class="d-flex justify-content-center align-items-center h-100  "> <img
                                    src="{{ asset('assets/images/inite-icon.svg') }}" class=" p-3 h-100 m-auto"
                                    alt=""> </div>
                        </div>
                        </p>


                    </div>
                </a>
            </div>


        </div>

    </div>


    <div id="component" class="container-fluid py-3 pt-5">
        <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
            شاکرین&nbsp;دعمكم&nbsp;وتشريفكم
        </p>
    </div>

    <div id="component" class="container-fluid w-100 position-relative py-3" style="background-color: #0A2C36;">

        <div class="my-row" style="margin-right:auto ;margin-left:75px ;">
            <img src="{{ asset('assets/images/logo1.png') }}" alt="" style="height: 38px;margin-right: 20px;">
            <img src="{{ asset('assets/images/logo2.png') }}" alt=""
                style="height: 51px;margin-right: 20px;">
            <img src="{{ asset('assets/images/logo3.png') }}" alt="" style="height: 33px;">




        </div>
        <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}" alt=""
            style="position: absolute;height: 100%;width: 75px;left: 0;top: 0;">
    </div>



</body> --}}

<body dir="rtl">

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <td>
                <div id="component" class="container-fluid py-3">
                    <p class="text-end  m-0 px-3 py-2">
                        <span class="text-dark fs-2 fw-bold font-family-Almarai">
                            سعادة السيد/ة {{ $invitation->name }}
                            <br>
                            يطيب لنا دعوتكم لحضور
                        </span>
                        <span class="text-secondary fs-2 fw-bold font-family-Almarai">
                            حفل تدشين المرصد العربي للترجمة
                        </span>
                        <span class="text-dark fs-2 fw-bold font-family-Almarai">
                            المقام بتاريخ 13 يناير 2024
                        </span>
                        <span class="text-secondary fs-2 fw-bold font-family-Almarai">
                            في فندق الريتز كارلتون
                        </span>
                        <span class="text-dark fs-2 fw-bold font-family-Almarai">
                            , في الرياض, المملكة العربية السعودية
                        </span>
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="component2"  >
                    <div class="" style="">


                        <p>
                            <span class="text-dark fs-2 fw-normal font-family-Almarai" style="    --bs-text-opacity: 1;
                            color: rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important;    font-size: calc(1.325rem + .9vw)!important;">
                                حالة حضورك:
                            </span>
                            <span class="text-success fs-2 fw-normal font-family-Almarai" style="--bs-text-opacity: 1;
                            color: rgba(var(--bs-success-rgb),var(--bs-text-opacity))!important;font-weight: 400!important;font-size: calc(1.325rem + .9vw)!important;">
                                مؤكدة
                                <br>
                            </span>
                        </p>
                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container-fluid py-3">
                    <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
                        يمكنك استلام بطاقة الدخول أثناء وصولك إلى الحفل.
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="container-fluid py-3">
                    <p class="text-end text-secondary fs-3 font-family-Almarai  m-0 px-3 py-2">
                        ندعوك للإطلاع على أجندة حفل التدشين
                    </p>
                </div>
            </td>
        </tr>

        

        <tr>
            <td>
                <div class="pe-4 ps-0 py-3">
                    <div id="component4" class="container-fluid  me-0 " style=" width:350px;">


                        <div class=" d-flex flex-row">

                            <a href="{{ route('download-agenda') }}" style="text-decoration: none;text-align:center">
                                <div class="d-flex position-relative">
                                    <p
                                        style="    text-decoration: none;">
                                        <p class="" style="background-color: #0A2C36 ; width:330px;height: 65px;color: white;
                                            font-size: calc(1.3rem + .6vw)!important;
                                            text-decoration: none !important; padding:0 10px">
                                        ملف اجندة الحفل
                                    {{-- <div class="position-absolute  my-p "
                                        style="width: 100px; height: 60px; right: -330px; ; background-color: #517889;">
                                        <div class="d-flex justify-content-center align-items-center h-100  "> <img
                                                src="{{ asset('assets/images/inite-icon.svg') }}"
                                                class=" p-3 h-100 m-auto" alt=""> </div>
                                    </div> --}}
                                    </p>
                                </div>
                            </a>
                        </div>


                    </div>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="component" class="container-fluid py-3 pt-5">
                    <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
                        شاکرین&nbsp;دعمكم&nbsp;وتشريفكم
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="component" class="container-fluid py-3">
                    <p class="text-end text-dark fs-3 font-family-Almarai  m-0 px-3 py-2">
                        فريق عمل المرصد&nbsp;العربي&nbsp;للترجمة
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="component" class="container-fluid w-100 position-relative py-3"
                    style="background-color: #0A2C36;direction:ltr !important">
                    <div class="my-row " style="direction:ltr !important">
                        <div class="footer-web-view">
                            <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}" alt=""
                                style="direction:ltr !important">
                            <img src="{{ asset('assets/images/logo1.png') }}" alt=""
                                style="direction:ltr !important">
                            <img src="{{ asset('assets/images/logo2.png') }}" alt=""
                                style="direction:ltr !important">
                            <img src="{{ asset('assets/images/logo3.png') }}" alt=""
                                style="direction:ltr !important">
                        </div>
                        <table class="footer-mobile-view">
                            <tr>
                                <td>
                                    <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}"
                                        alt="" style="direction:ltr !important">
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/logo1.png') }}" alt=""
                                        style="direction:ltr !important">
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/logo2.png') }}" alt=""
                                        style="direction:ltr !important">
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/logo3.png') }}" alt=""
                                        style="direction:ltr !important">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</html>
