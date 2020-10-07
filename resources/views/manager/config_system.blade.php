@extends('manager.master')

@section('content')

<form action="/manager/homepage_config_system" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">تنظیمات کلی سیستم</div>

            <div class="card-body">
               

               <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">شماره تلفن :</span>
                            </div>
                            <input name="phone" value="{{App\Models\Homepage::where('config_name','phone')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> فکس :</span>
                            </div>
                            <input name="fax" value="{{App\Models\Homepage::where('config_name','fax')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> کانال تلگرام :</span>
                            </div>
                            <input name="telegram" value="{{App\Models\Homepage::where('config_name','telegram')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> ایمیل :</span>
                            </div>
                            <input name="email" value="{{App\Models\Homepage::where('config_name','email')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> تعداد دانش آموزان :</span>
                            </div>
                            <input name="count_student" value="{{App\Models\Homepage::where('config_name','count_student')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> تعداد کلاس ها :</span>
                            </div>
                            <input name="count_class" value="{{App\Models\Homepage::where('config_name','count_class')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">  تعداد معلمین  :</span>
                            </div>
                            <input name="count_teacher" value="{{App\Models\Homepage::where('config_name','count_teacher')->where('gender',Auth::user()->gender)->first()->config_value}}" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

               </div>

               <div class="row mt-4">
                   <div class="col-md-4"></div>
                   <div class="col-md-4" style="text-align: center;">
                       <button class="btn btn-success pl-5 pr-5">ذخیره</button>
                   </div>
               </div>
            </div>
        </div>
    
    </div>
</div>
</form>

@endsection