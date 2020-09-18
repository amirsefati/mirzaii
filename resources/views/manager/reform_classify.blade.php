@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">

            <table id="myTable">
            <tr class="header"  style="background:#EEF8FC;">
                <th style="width:10%;">عکس</th>
                <th style="width:30%;">نام</th>
                <th style="width:20%;">نام پدر</th>
                <th style="width:30%;">کلاس</th>
                <th style="width:10%;">جداسازی</th>

            </tr>
            @foreach($list_student as $student)
                @if(strlen(App\Models\User::find($student->id)->class_to_classify) > 20)
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
                        <td>{{App\Models\User::find($student->id)->class_to_classify[0]->kind}} -
                        {{App\Models\User::find($student->id)->class_to_classify[0]->name}}
                        {{App\Models\User::find($student->id)->class_to_classify[0]->desc}}
                        </td>
                        <td>    
                            <a href="reform_student_class/{{$student->id}}">
                                <img src="/images/del_user.ico" width="30px" alt="">
                            </a>
                        </td>
                        
                    </tr>
                @endif
            @endforeach
            </table>
    </div>
</div>


@endsection