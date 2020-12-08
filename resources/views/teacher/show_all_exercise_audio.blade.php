@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            تکلیف های تصحیح نکرده
            </div>


            <div class="card-body">

                <div class="row">
                   <div class="col-md-4">
                        <label for="name">نام دانش آموزش</label>
                        <input type="text" class="form-control" value="{{App\Models\User::where('id',$ex->user_id)->first()->name}} {{App\Models\User::where('id',$ex->user_id)->first()->family}}" disabled>
                   </div>

                   <div class="col-md-4">
                        <label for="name">نام درس</label>
                        <input type="text" class="form-control" value="{{App\Models\Course::where('id',$ex->course_id)->first()->title}} - {{App\Models\Course::where('id',$ex->course_id)->first()->grade}}" disabled>
                   </div>

                   <div class="col-md-4">
                        <label for="name">تکلیف</label>
                        <input type="text" class="form-control" value="{{App\Models\Assigment::where('id',$ex->assigment_id)->first()->title}}" disabled>
                   </div>
                </div>

                <div class="row mt-3 mb-3 pr-2">
                    <div class="col-md-12">
                        <label for="">لیست تکالیف</label> <br>
                        @foreach(json_decode($ex->file) as $file1)
                            <a href="{{$file1}}">دانلود</a>
                        @endforeach
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-4">
                        <label for="mark_send">ارسال توضیحات</label>
                        <select id="markww" class="form-control" id="">
                            <option value="{{$ex->mark}}">{{$ex->mark}} (انتخاب شده)</option>
                            <option value="خیلی خوب">خیلی خوب</option>
                            <option value="خوب">خوب</option>
                            <option value="قابل قبول">قابل قبول</option>
                            <option value="نیاز به تلاش بیشتر">نیاز به تلاش بیشتر</option>
                        </select>
                    </div>

                    <div class="col-md-8">
                        <label for="mark_send">ارسال توضیحات کامل</label>
                        <input type="text" id="descww" value="{{$ex->status}}"   class="form-control">
                        <input type="text" id="id_f" value="{{$ex->id}}" hidden>
                        
                    </div>
                </div>                            
                

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="audio_control_recorder_sefati p-3">
                            <div id="controls">
                                <button class="btn btn-success" type="button" id="recordButton">ضبط</button>
                                <button class="btn btn-warning" type="button" id="pauseButton" disabled>وقفه</button>
                                <button class="btn btn-danger"  type="button" id="stopButton" disabled>اتمام ضبط</button>
                            </div>
                            <br>
                            <p>فایل ضبط شده</p>
                            <ol id="recordingsList"></ol>
                            
                        </div>
                    </div>
                </div>                     

                </div>
            </div>
        </div>
    </div>
</div>


@endsection