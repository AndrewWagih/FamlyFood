<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    <style>
    *{
            box-sizing:border-box;
            /* outline:1px solid ;*/
    }
    body{
            background: #ffffff;
            background: linear-gradient(to bottom, #ffffff 0%,#e1e8ed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
                height: 100%;
                    margin: 0;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
            
    }

        .wrapper-1{
            width:100%;
            height:100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .wrapper-2{
            padding :30px;
            text-align:center;
        }
        h1{
                font-family: 'Kaushan Script', cursive;
            font-size:4em;
            letter-spacing:3px;
            color:#8992a4 ;
            margin:0;
            margin-bottom:20px;
        }
        .wrapper-2 p{
            margin:0;
            font-size:1.3em;
            color:#aaa;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing:1px;
        }
        .go-home{
            color:#fff;
            background:#8992a4;
            border:none;
            padding:10px 50px;
            margin:30px 0;
            border-radius:30px;
            text-transform:capitalize;
            box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
        }
        .footer-like{
            margin-top: auto; 
            background:#D7E6FE;
            padding:6px;
            text-align:center;
        }
        .footer-like p{
            margin:0;
            padding:4px;
            color:#8992a4;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing:1px;
        }
        .footer-like p a{
            text-decoration:none;
            color:#8992a4;
            font-weight:600;
        }

        @media (min-width:360px){
        h1{
                font-size:4.5em;
        }
        .go-home{
                margin-bottom:20px;
        }
        }

        @media (min-width:600px){
            .content{
                max-width:1000px;
                margin:0 auto;
            }
                
        }
    </style>
</head>
<body>
    <div class=content>
        <div class="wrapper-1">
          <div class="wrapper-2">
            <h1>{{__('Thank you !')}}</h1>
            {{-- <p>Thanks for your time</p> --}}
        {{-- <button class="go-home">
              go home
        </button> --}}
          </div>
        </div>
      </div>
      
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
</body>
</html>