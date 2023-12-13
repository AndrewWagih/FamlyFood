<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        invitation
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
        .footer-mobile-view{
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
            .footer-web-view
            {
                display: none;
            }
            .footer-mobile-view{
                display: block;
            }
        }
    </style>
</head>

<body dir="rtl">

    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <td>
                <div id="component" class="container-fluid py-3">
                    <p class="text-end m-0 px-3 py-2">
                        <span style="color: #F3A58F" class="fs-1 fw-bold font-family-Almarai">
                            دعوة خاصة
                            <br>
                        </span>
                        <span style="color: #F3A58F" class="text-danger-subtle fs-1 fw-bold font-family-Almarai">
                            المرصد العربي للترجمة
                        </span>
                    </p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
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
        </td>
        </tr>
        <tr>
            <td>
            <div id="component3" class="container-fluid py-3">
                <p class="text-end text-dark fs-4 font-family-Almarai  m-0 px-3 py-2">
                    :بإمكانكم الاطلاع علي تفاصيل الدعوة, ومن ثم الرد والقبول او الاعتذار عبر الراد بالقبول أو الاعتذار عبر
                    الرابط التالي </p>
            </div>
        </td>
        </tr>
        <tr>
            <td>
            <div class="pe-4 ps-0 py-3">
                <div id="component4" class="container-fluid  me-0 " style=" width:350px;">
        
        
                    <div class="">
        
        
                        <a href="https://elmarsid.gamifiersa.com/invitation/1" class="" style="    text-decoration: none;">
                            <p class="" style="background-color: #0A2C36 ; width:330px;height: 65px;color: white;
                                font-size: calc(1.3rem + .6vw)!important;
                                text-decoration: none !important; padding:0 10px">
                                <img src="{{('assets/images/email/email-icon.png')}}" alt="" style="height: 100% !important;margin;auto !important"> 
                                رابط التسجيل
                                
                            </p>
        
        
                        </a>
                    </div>
        
        
                </div>
        
            </div>
        </td>
        </tr>
        <tr>
            <td>
            <div id="component" class="container-fluid py-3 mt-5">
                <p class="text-end text-secondary fs-3 font-family-Almarai  m-0 px-3 py-2">
                    تتطلع إلى حضوركم ومشاركتكم الحدث الثقافي المميز.
                    <br>
                    <br>
                    شاگرین دعمكم وتشريفكم.
                    <br>
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
            <div id="component" class="container-fluid w-100 position-relative py-3" style="background-color: #0A2C36;direction:ltr !important" >
                <div class="my-row " style="direction:ltr !important" >
                    <div class="footer-web-view">
                        <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}" alt=""  style="direction:ltr !important"  >
                        <img src="{{ asset('assets/images/logo1.png') }}" alt=""  style="direction:ltr !important" >
                        <img src="{{ asset('assets/images/logo2.png') }}" alt=""  style="direction:ltr !important" >
                        <img src="{{ asset('assets/images/logo3.png') }}" alt=""  style="direction:ltr !important" >
                    </div>
                    <table class="footer-mobile-view">
                        <tr>
                            <td>
                                <img class="rectangle" src="{{ asset('assets/images/Rectangle.png') }}" alt=""  style="direction:ltr !important"  >
                            </td>
                            <td>
                                <img src="{{ asset('assets/images/logo1.png') }}" alt=""  style="direction:ltr !important" >
                            </td>
                            <td>
                                <img src="{{ asset('assets/images/logo2.png') }}" alt=""  style="direction:ltr !important" >
                            </td>
                            <td>
                                <img src="{{ asset('assets/images/logo3.png') }}" alt=""  style="direction:ltr !important" >
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        </tr>
    </table>

</body>

</html>
