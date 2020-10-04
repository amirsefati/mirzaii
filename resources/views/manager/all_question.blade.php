@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
    
        <div class="card">
            <div class="card-header" >تمام سوالات</div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس معلم ">
                        <div style="overflow-x: auto;">

                        <table id="myTable">
                        <tr class="header"  style="background:lightblue">
                            <th style="width:10%;">دانش آموز</th>
                            <th style="width:10%;">معلم</th>
                            <th style="width:10%;">تاریخ سوال </th>
                            <th style="width:5%;"> پاسخ </th>

                            <th style="width:30%;">عنوان </th>

                        </tr>
                        @foreach($not_answer as $question)
                        <tr>
                            
                            <td>{{App\Models\User::where('id',$question->student_id)->first()->name}} {{App\Models\User::where('id',$question->student_id)->first()->family}}</td>
                            <td>{{App\Models\User::where('id',$question->teacher_id)->first()->name}} {{App\Models\User::where('id',$question->teacher_id)->first()->family}}</td>
                            <td>{{$question->created_at}}</td>
                            <td>@if($question->status == 2)
                                <a href="#"  data-toggle="popover" title="پاسخ" data-content="{{App\Models\question::where('id',$question->id)->first()->question_to_answer[0]->answer}}" >
                                    <img src="/images/ok.png" width="35px" alt="" >
                                </a>
                                @else
                                    <img src="/images/err.png" width="35px" alt="">
                                @endif
                            </td>

                            <td>{{$question->title}}</td>

                        </tr>
                        
                        @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection