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
                    <h5 class="card-header"> ویرایش اطلاعات</h5>
                    <div class="card-body">
                        <form action="/manager/edit_student_detail" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-4 mt-2">
                                    <label for="name">نام : </label>
                                    <input type="text" class="form-control" name="name" value="{{$student->name}}">
                                </div>
                                @if($student->level == 1)
                                <div class="col-md-4 mt-2">
                                    <label for="family">نام خانوادگی : </label>
                                    <input type="text" class="form-control" name="family"  value="{{$student->family}}">
                                </div>
                                @else
                                <div class="col-md-8 mt-2">
                                    <label for="family">نام خانوادگی : </label>
                                    <input type="text" class="form-control" name="family"  value="{{$student->family}}">
                                </div>

                                @endif
                                <!-- student -->
                                @if($student->level == 1)
                                <div class="col-md-4 mt-2">
                                    <label for="father_name">نام پدر : </label>
                                    <input type="text" class="form-control" name="father_name"  value="{{$student->father_name}}">
                                </div>
                                @endif
                            </div>

                            <div class="row">
                                @if($student->level == 1)
                                <div class="col-md-4 mt-3">
                                    <label for="identiry">کد ملی</label>
                                    <input type="text" class="form-control" name="identity" value="{{$student->identity_code}}">
                                </div>
                                @else
                                <div class="col-md-8 mt-3">
                                    <label for="identiry">کد ملی</label>
                                    <input type="text" class="form-control" name="identity" value="{{$student->identity_code}}">
                                </div>

                                @endif

                                @if($student->level == 1)
                                <div class="col-md-4 mt-3">
                                    <label for="serial">سریال شناسنامه</label>
                                    <input type="text" class="form-control" name="serial" value="{{$student->serial_identity}}">
                                </div>
                                @endif
                                <div class="col-md-4 mt-3">
                                    <label for="serial">نوع دسترسی</label>
                                    <select name="level" class="form-control">
                                        @if($student->level == 2)
                                            <option value="2">معلم</option>
                                        @else
                                            <option value="1">دانش آموز</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mt-3">
                                    <label for="gender">جنسیت</label>
                                    <select name="gender" class="form-control">
                                        <option value="{{$student->gender}}">{{$student->gender}}</option>
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
                                        <input type="text" name="born_date" id="input_date_select" value="{{$student->date_born}}" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                                    </div>
                                    <small id="showDate_class" style="color:#A63D40">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="born_city">محل تولد :</label>
                                    <input type="text" class="form-control" name="born_city" value="{{$student->city_born}}">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="sadere">مدرسه :</label>
                                    <select name="sadere" class="form-control" id="" required>
                                        <option value="{{$student->sadere}}">
                                            @if($student->sadere == 1)
                                            دانش
                                            @else
                                            آفرینش
                                            @endif
                                        </option>
                                        <option value="1">دانش</option>
                                        <option value="2">آفرینش</option>
                                    </select>  
                                    <small>
                                        
                                    </small> 
                                
                                </div>
                            </div>
                            <!-- student -->
                            @if($student->level == 1)
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="father_work">شغل و محل کار پدر :</label>
                                    <input type="text" class="form-control" name="father_work" value="{{$student->father_work}}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="mother_work">شغل و محل کار مادر :</label>
                                    <input type="text" class="form-control" name="mother_work" value="{{$student->mother_work}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="father_graduate"> میزان تحصیلات پدر :</label>
                                    <input type="text" class="form-control" name="father_graduate" value="{{$student->father_greduate}}" >
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="father_field">رشته تحصیلی :</label>
                                    <input type="text" class="form-control" name="father_field" value="{{$student->father_study}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="mother_graduate">میزان تحصبلات مادر :</label>
                                    <input type="text" class="form-control" name="mother_graduate" value="{{$student->mother_greduate}}">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="mother_field">رشته تحصیلی :</label>
                                    <input type="text" class="form-control" name="mother_field" value="{{$student->mother_study}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="father_phone">همراه پدر :</label>
                                    <input type="text" class="form-control" name="father_phone"  value="{{$student->phone_father}}">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="mother_phone">همراه مادر :</label>
                                    <input type="text" class="form-control" name="mother_phone"  value="{{$student->phone_mother}}">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="phone">تلفن  :</label>
                                    <input type="text" class="form-control" name="phone"  value="{{$student->phone}}">
                                </div>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="address">نشانی کامل منزل :</label>
                                    <textarea class="form-control" name="address" id="" rows="3">{{$student->address}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="img">عکس پرسنلی</label>
                                    <img src="{{$student->profile_img}}" width="150px" alt="">

                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <img src="{{$student->doc_img}}" width="150px" alt="">

                                    <label for="doc">آپلود کارت ملی</label>
                                    <input type="file" name="doc" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3" style="text-align: center;">
                                    <button type="submit" class="btn btn-warning mt-4 pr-5 pl-5 ">ویرایش اطلاعات</button>
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