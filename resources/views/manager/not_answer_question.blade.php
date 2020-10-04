@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
    
        <div class="card">
            <div class="card-header">پاسخ نداده ها</div>

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
                            <th style="width:30%;">عنوان </th>
                        </tr>
                        @foreach($not_answer as $question)
                        <tr>
                            
                        <td>{{App\Models\User::where('id',$question->student_id)->first()->name}} {{App\Models\User::where('id',$question->student_id)->first()->family}}</td>
                        <td>{{App\Models\User::where('id',$question->teacher_id)->first()->name}} {{App\Models\User::where('id',$question->teacher_id)->first()->family}}</td>
                            <td>{{$question->created_at}}</td>
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