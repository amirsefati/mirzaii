@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">افزودن معلم </h5>
                    <div class="card-body">
                        <form action="/manager/add_teacher" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mt-2">
                                    <label for="name">نام : </label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="family">نام خانوادگی : </label>
                                    <input type="text" class="form-control" name="family">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="identiry">کد ملی</label>
                                    <input type="text" class="form-control" name="identity_code">
                                </div>

                               
                            </div>
                            <div class="row">

                                <div class="col-md-3 mt-3">
                                    <label for="gender">جنسیت</label>
                                    <select name="gender" class="form-control">
                                        <option value="">انتخاب کنید ...</option>
                                        <option value="پسر">پسر</option>
                                        <option value="دختر">دختر</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="born_date">تاریخ تولد :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text cursor-pointer" id="date_select" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-uniqueid="1601319385285" data-original-title="" title="">تقویم</span>
                                        </div>
                                        <input type="text" name="born_date" id="input_date_select" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                                    </div>
                                    <small id="showDate_class" style="color:#A63D40">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="born_city">محل تولد :</label>
                                    <input type="text" class="form-control" name="born_city">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="sadere">مدرسه :</label>
                                    <select name="sadere" class="form-control" id="">
                                        <option value="1">دانش</option>
                                        <option value="2">آفرینش</option>
                                    </select>
                                </div>
                            </div>
                                                        
                            <div class="row">
                            
                                <div class="col-md-4 mt-3">
                                    <label for="phone">تلفن  :</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="father_phone"> تلفن دوم :</label>
                                    <input type="text" class="form-control" name="father_phone">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="mother_phone"> تلفن سوم :</label>
                                    <input type="text" class="form-control" name="mother_phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="address">نشانی کامل منزل :</label>
                                    <textarea class="form-control" name="address" id="" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="img">عکس پرسنلی</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="doc">آپلود کارت ملی</label>
                                    <input type="file" name="doc" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3" style="text-align: center;">
                                    <button type="submit" class="btn btn-success mt-4 pr-5 pl-5 ">ارسال اطلاعات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection