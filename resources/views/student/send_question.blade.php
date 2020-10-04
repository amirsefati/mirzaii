@extends('student.master2')

@section('content2')

<div class="row">
    <div class="col-md-12" style="text-align: center;">
        <a href="/student">
            <button class="btn btn-danger m-2 pl-4 pr-4">بازگشت</button>
        </a>
    </div>
</div>
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
                        <select name="teacher_id" class="form-control">
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

<div class="row mt-4" style="direction: rtl;">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header" style="direction: rtl;">
                سوالات شما
            </div>
            <div class="card-body" >
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th style="width: 20%;">سوال شما</th>
                            <th style="width: 30%;">متن سوال</th>
                            <th style="width: 30%;">پاسخ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $question)
                                <tr>
                                    <td>{{$question->title}}</td>
                                    <td>{{$question->desc}}</td>
                                    <td>
                                        @if(App\Models\question::where('id',$question->id)->first()->question_to_answer->count() > 0)
                                            <p style="color:green;">
                                                {{App\Models\question::where('id',$question->id)->first()->question_to_answer[0]->answer}}
                                            </p>
                                        @else
                                            <p style="color: red;">هنوز پاسخی داده نشده</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection