@extends('student.master2')

@section('content2')

<form action="/student/update_user_settings_profile" method="POST" >
@csrf
<div class="row mt-5">
    <div class="col-md-1"></div>
    <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
        <div class="card">
            <div class="card-header" style="direction: rtl;">تنظیمات کاربری</div>
            <div class="card-body" style="direction: rtl;">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="name">نام کاربری :</label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="name">نام خانوادگی :</label>
                        <input type="text" class="form-control" value="{{Auth::user()->family}}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="password">گذرواژه : </label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="password">تکرار گذر واژه : </label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="row">   
                    <div class="col-md-12 mt-5" style="text-align: center;">
                        <button class="btn btn-warning pl-5 pr-5">اصلاح</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

@endsection