@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">پاسخ گویی به سوالات</div>
            <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">

                <div style="overflow-x: auto;">

                    <table id="myTable">      
                      <thead class="thead-inverse">
                        <tr>
                            <th style="width:10%;">نام دانش آموز</th>
                            <th style="width:20%;">عنوان سوال</th>
                            <th style="width:50%;">متن سوال</th>
                            <th style="width:10%;">تاریخ سوال</th>
                            <th style="width:10%;">پاسخ گویی</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($question_list as $question)
                            <tr>
                                <td>{{App\Models\User::find($question->student_id)->name}} {{App\Models\User::find($question->student_id)->family}}</td>
                                <td>{{$question->title}}</td>
                                <td>{{$question->desc}}</td>
                                <td>{{$question->created_at}}</td>
                                <td>
                                    <a href="/teacher/send_answer/{{$question->id}}">
                                        <img src="/images/ok.png" width="35px" alt="">
                                    </a>
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