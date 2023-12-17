<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        :root {
            --infoBlue: #2e86de;
            --infoBlueLight: #eff6fc;
            --successGreen: #329f5d;
            --successGreenLight: #eff7f2;
            --errorRed: #c2160a;
            --errorRedLight: #faedec;
            --warningOrange: #fa7f05;
            --warningOrangeLight: #fff5eb;
            --bodyTextColour: #212121;
        }


        .alert {
            margin-block: 2.5rem;
            padding: 1.25rem;
            display: grid;
            grid-gap: 1.25rem;
            grid-template-columns: max-content auto;
            border-radius: 4px;
            border-width: 4px;
            border-left-style: solid;
            transition: 0.12s ease;
            position: relative;
            overflow: hidden;
            &:before {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                mix-blend-mode: soft-light;
                background: linear-gradient(
                    90deg,
                    rgba(255, 255, 255, 0) 30%,
                    rgba(255, 255, 255, 1) 56%,
                    rgba(2, 0, 36, 0.1) 82%
                );
                z-index: 1;
            }
            .icon,
            .content {
                z-index: 2;
            }
            .icon {
                line-height: 1;
            }
            .title {
                font-weight: 700;
                margin-bottom: 0.75rem;
            }
            .content {
                max-width: 60ch;
            }
            &.alert--info {
                background-color: var(--infoBlueLight);
                border-left-color: var(--infoBlue);
                .icon {
                    color: var(--infoBlue);
                }
            }
            &.alert--success {
                background-color: var(--successGreenLight);
                border-left-color: var(--successGreen);
                .icon {
                    color: var(--successGreen);
                }
            }
            &.alert--error {
                background-color: var(--errorRedLight);
                border-left-color: var(--errorRed);
                .icon {
                    color: var(--errorRed);
                }
            }
            &.alert--warning {
                background-color: var(--warningOrangeLight);
                border-left-color: var(--warningOrange);
                .icon {
                    color: var(--warningOrange);
                }
            }
        }

@media (max-width: 767px) {
	.alert {
		grid-template-columns: auto;
		padding: 1rem;
		grid-gap: 0.75rem;
		.icon {
			font-size: 1.5rem;
		}
		.title {
			margin-bottom: 0.5rem;
		}
	}
}


    
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
          <h2>Admin Login</h2>
        @if (\Session::has('error-message'))
        <div class="alert alert--error">
            <i class="fa fa-times-circle fa-2xl icon"></i> 
            <div class="content">
                <div class="title">ERROR</div>
                <div class="body">
                    {!! \Session::get('error-message') !!}
                </div>
            </div>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert--error">
            <i class="fa fa-times-circle fa-2xl icon"></i> 
            <div class="content">
                <div class="title">ERROR</div>
                <div class="body">
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                </div>
            </div>
        </div>
        @endif
        

          <form method="POST" action="{{route('login.request')}}">
            @csrf
            <label for="email">email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
            <div style="
            position: relative;
            display: block;
            width: 93%;
        ">
                <label for="password" style="display: block;width:100%">Password</label>
                <input type="password" id="password" class="password" name="password" placeholder="Enter your password" style="display: block;width:100%">
                <span toggle=".password" class="fa fa-fw fa-eye field-icon toggle-password showPassword" style="    float: left;
                margin-top: -36px;
                position: absolute;
                right: 0;
                z-index: 2;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                </span>
            </div>

            <button type="submit">Login</button>
          </form>
        </div>

      </div>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script>
      $(".toggle-password").click(function() {
        console.log('23232');
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });    
    </script>
</body>
</html>