<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v26.0.2/dist/font-face.css" rel="stylesheet" type="text/css" />   

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/manager.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">


    <title>ورود</title>
</head>
<body class="p-3">
    <div class="container cart_login">
        <form action="/login" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 col-xs-12 input_right_padding">
                <div class="row mt-5">
                    <div class="col-md-12" style="text-align: center;">
                        <p>به مدرسه میرزایی خوش آمدید</p>
                        <p>برای ورود به سایت لطفا از کد ملی خود استفاده کنید</p>

                        <p style="color:red">{{$err}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mt-5">
                        <label for="code_meli">کد ملی :</label>
                        <input type="text" name="code_meli" class="form-control"  oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mt-2">
                        <label for="code_meli">گذرواژه : </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-10 mt-2" style="text-align: center;">
                        <button type="submit" class="btn btn-success pr-5 pl-5">ورود</button>
                    </div>
                </div>
            </div>
            </form>
            <div class="col-md-6 hide_in_mobile" style="text-align:center;padding-top:5%">
                <img src="/images/login-vector.png" width="85%" alt="">
            </div>
        </div>
        
    </div>
</body>
</html>