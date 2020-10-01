@extends('student.master2')

@section('content2')
<form action="/student/send_question" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="student_id" value="{{$user_info->id}}" hidden>
<div class="row mt-4" style="direction: rtl;">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <a href="/student">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="margin:3px;font-size: 12px;">میز کار</span> <span style="margin:3px;font-size: 12px;">پنل دانش آموز {{$user_info->name}} {{$user_info->family}}</span>
        </a>
        <div class="p-1"></div>
        <div class="card">
            <div class="card-header" style="text-align: right;direction:rtl">
                ارسال سوال
            </div>
            <div class="card-body pr-4 pl-4 pt-2">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="title">  عنوان سوال : </label>
                        <input type="text"name="title" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="desc">  شرح سوال  :</label>
                        <textarea name="desc" class="form-control" rows="5">

                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="upload_file">آپلود عکس :</label>
                        <input type="file" class="form-control" name="upload_file" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
                    </div>
                    <div class="col-md-4 mt-3">
                        <label for="techer">انتخاب معلم :</label>
                        <select name="techer_id" class="form-control">
                            @foreach($list_class as $teacher)
                                @if($teacher->level > 1)
                                <option value="{{$teacher->id}}"> {{$teacher->name}} {{$teacher->family}} </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mt-3" style="text-align: center;">
                        <button class="btn btn-success pr-5 pl-5 mt-4"> ارسال سوال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection