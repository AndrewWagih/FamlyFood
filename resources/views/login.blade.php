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
      
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
      
            <button type="submit">Login</button>
          </form>
        </div>

      </div>
</body>
</html>