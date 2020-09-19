@extends('manager.master')

@section('content')

<div class="row ">
    <div class="col-md-12">
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="student_to_class_boy" method="POST">
            @csrf
            <div class="card-header">کلاس بندی پسرانه</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <p>برای کلاس بندی در ابتدا کلاس را انتخاب کنید سپس نام دانش آموزان را به کمک جست جو 
                            انتخاب کنید.
                        </p>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success pr-3 pl-3">کلاس بندی</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="class">انتخاب کلاس : </label>
                        <select name="class" class="form-control" id="">
                            <option value="">لیست کلاس ها </option>
                            @foreach($class_list as $class)
                                <option value="{{$class->id}}">{{$class->kind}}انه - {{$class->name}} - {{$class->desc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12" style="padding:5px 15px 5px">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">

            <table id="myTable">
            <tr class="header"  style="background:#EEF8FC">
                <th style="width:10%;">انتخاب</th>
                <th style="width:50%;">نام</th>
                <th style="width:20%;">نام پدر</th>
                <th style="width:10%;">عکس</th>

            </tr>
            @foreach($boy_list as $student)
                <div style="display: none;">
                    {{$check = App\Models\User::find($student->id)->class_to_classify}}
                </div>
                @if(strlen($check) < 50)
                    <tr>
                        <td><input type="checkbox" name="student[]" value="{{$student->id}}" style="width:35px;height:35px"></td>
                        
                        <td>
                            <a href="find_student/{{$student->identity_code}}">
                            {{$student->name}} {{$student->family}}
                            </a>
                        </td>
                        <td>{{$student->father_name}}</td>
                        <td style="padding:0px">
                            <img src="{{$student->profile_img}}" style="width:65px" alt="">
                        </td>
                    </tr>
                @endif
            @endforeach
            </table>
            </form>
    </div>
</div>

@endsection