@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
            <div style="overflow-x: auto;">
                <table id="myTable">
                <tr class="header"  style="background:#EEF8FC;">
                    <th style="width:10%;">عکس</th>
                    <th style="width:20%;">نام</th>
                    <th style="width:15%;">نام پدر</th>
                    <th style="width:15%;">کد ملی </th>
                    <th style="width:40%;">تلفن</th>
                    <th style="width:5%;">حذف</th>

                </tr>
                @foreach($list_student as $student)
                <tr>
                    <td style="padding:0px">
                        <img src="{{$student->profile_img}}" style="width:65px" alt="">
                    </td>
                    <td>
                        <a href="find_student/{{$student->identity_code}}">
                        {{$student->name}} {{$student->family}}
                        </a>
                    </td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->identity_code}}</td>
                    <td>پدر : {{$student->phone_father}} - مادر : {{$student->phone_mother}} - منزل : {{$student->phone}}</td>
                    <td>
                        <a href="/manager/delete_student_boy/{{$student->id}}">
                            <img src="/images/delete.png" width="25px" alt="">
                        </a>
                    </td>
                </tr>
                
                @endforeach
                </table>
        </div>
    </div>
</div>


@endsection