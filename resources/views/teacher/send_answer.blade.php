@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                سوال دانش آموز   
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="name">نام دانش آموز</label>
                        <input type="text" class="form-control" value="{{App\Models\User::where('id',$question->id)->first()->name}} {{App\Models\User::where('id',$question->id)->first()->family}}" disabled>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="date">تاریخ ارسال</label>
                        <input type="text" class="form-control" value="{{$question->created_at}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="title">عنوان سوال :</label>
                        <input type="text" class="form-control" value="{{$question->title}}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="desc">شرح سوال :</label>
                        <textarea class="form-control" rows="5" disabled>
                            {{$question->desc}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="/teacher/send_answer" method="POST" enctype="multipart/form-data">
@csrf
    <input type="text" name="question_id" value="{{$question->id}}" hidden>
    <input type="text" name="teacher_id" value="{{Auth::user()->id}}" hidden>

    <div class="row mt-4 mb-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    پاسخ گویی به سوال
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="answer" rows="8" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 mt-2">
                            <label for="file">آپلود فایل</label>
                            <input type="file" class="form-control">
                        </div>

                        <div class="col-md-4 mt-4" style="text-align: center;">
                            <button class="btn btn-success mt-2 pr-5 pl-5">ارسال پاسخ</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

@endsection