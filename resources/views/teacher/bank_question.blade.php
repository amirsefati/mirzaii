@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست تمام سوال پرسیده شده از شما    
            </div>
            
            <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">

            <div style="overflow-x: auto;">

                <table id="myTable">
                        <thead class="thead-inverse">
                        <tr>
                            <th style="width:20%;">دانش آموز</th>
                            <th style="width:30%;">سوال</th>
                            <th style="width:30%;">پاسخ</th>
                            <th style="width:10%;">تاریخ پاسخ گویی</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $question) 
                                <tr>
                                    <td>{{App\Models\User::where('id',$question->student_id)->first()->name}} {{App\Models\User::where('id',$question->student_id)->first()->family}}</td>
                                    <td>{{$question->title}}</td>
                                    <td>{{App\Models\question::where('id',$question->id)->first()->question_to_answer[0]->answer}}</td>
                                    <td>{{App\Models\question::where('id',$question->id)->first()->question_to_answer[0]->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

</div>


@endsection