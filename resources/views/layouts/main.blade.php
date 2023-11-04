<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RankUP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8000/css/style.css">
    <link rel="stylesheet" href="http://localhost:8000/css/style2.css">
    <link rel="stylesheet" href="http://localhost:8000/css/style3.css">
    <style type="text/css">
        .ribbon {
            position: absolute;
            right: -5px;
            top: -5px;
            z-index: 1;
            overflow: hidden;
            width: 75px;
            height: 75px;
            text-align: right;
        }
    
        .col-bjconfirm {
            flex: 0 0 auto;
            width: 50%;
            font-size: 14px;
            text-align: right;
        }
        .btn-ordernow {
            color: #fff;
            background-color: #4b4e51;
            border-color: #4b4e51;
        }
        .btn-ordernow:hover{
            color: #fff;
            background-color: #535a62;
            border-color: #4b4e51;
        }
        .col-bjconfirm2 {
            flex: 0 0 auto;
            width: 50%;
            font-size: 14px;
            text-align: left;
        }
        .col-bjconfirm3 {
            flex: 0 0 auto;
            width: 100%;
            font-size: 11px;
            text-align: center;
        }
        .ap-otp-input {
            border: 3px solid #ebebeb;
            border-radius: 18px;
            width: 35px;
            height: 53px;
            margin: 4px;
            text-align: center;
            font-size: 35px;
        }
    
    
        .ap-otp-input:focus {
            outline: none !important;
            border: 3px solid #1f6feb;
            transition: 0.12s ease-in;
        }
        .list-group-item {
            user-select: none;
        }
        .dicek {
                font-size: 9px;
                font-style: italic;
                color: #676765;
            }
        .list-group-item:last-child {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }
    
        .list-group input[type="radio"] {
            display: none;
        }
        .list-group1 input[type="radio"] {
            display: none;
        }
        .list-group input[type="radio"]+.list-group-item {
            text-align: center;
            cursor: pointer;
            background-color: #282c30;
            color: #dcddeb;
            border-color: transparent;
            border: 2px solid #282c30;
            font-size: 12px;
        }
    
        .nominal-price {
            font-size: 10px;
            text-align: left;
        }
    
        .name-prod {
            color: #ffffff;
            text-align: left;
        }
    
        .list-group input[type="radio"]:checked+.list-group-item {
            color: #ef222243;
            font-size: 12px;
            border: 2px solid #c9c9c993;
            box-shadow: 0 0 2.22222vw #ababab, inset 0 2.40741vw 8.05556vw #adadad43, inset 0 -8.24074vw 11.48148vw #adadad43;
        }
    
    
    
        </style>
        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
</head>
<body>
    {{-- navbar --}}
    @include('partials.navbar')

    {{-- kontent --}}
     @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>