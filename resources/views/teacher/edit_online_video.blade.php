@extends('teacher.master')

@section('content')

<form action="/teacher/edit_online_video" method="POST">
@csrf
<input type="text" name="video_id" value="{{$video->id}}" hidden>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                ویرایش جلسه آنلاین کد ({{$video->id}}#)
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <label for="">عنوان جلسه :</label>
                        <input type="text" name="title" placeholder="{{$video->title}}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="">شرح جلسه :</label>
                        <input type="text" name="desc" placeholder="{{$video->desc}}" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="date">اصلاح تاریخ شروع کلاس :</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text cursor-pointer" id="date3-1" data-mdpersiandatetimepicker="" data-uniqueid="1602707529387" data-original-title="" title="">تاریخ</span>
                            
                            </div>
                            <input type="text" id="inputDate3-1" value="{{$video->date_time}}" name="date_time" class="form-control" placeholder="تاریخ و زمان تشکیل کلاس" aria-label="date3-1" aria-describedby="date3-1" required>
                        </div>
                        <span style="font-size: 16px;color:red;" id="inputDate3-1text"></span>

                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-12" style="text-align: center;">
                        <button class="btn btn-warning pl-5 pr-5">ویرایش جلسه</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>

@endsection