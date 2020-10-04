@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="card">
            <h5 class="card-header">اختصاص معلم به کلاس </h5>
            <form action="teacher_to_class" method="POST">
            @csrf
            <div class="cart-body p-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">انتخاب معلم  : </label>
                        <select class="form-control" name="teacher">
                            <option value="">لیست معلم ها </option>
                            @foreach($list_teacher as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}} {{$teacher->family}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="">انتخاب کلاس  : </label>
                        <select class="form-control" name="class">
                            <option value="">لیست کلاس ها </option>
                            @foreach($list_class as $class)
                                <option value="{{$class->id}}">{{$class->kind}}انه -- {{$class->name}} - {{$class->desc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 " style="text-align: center;">
                        <button class="btn btn-success pr-4 pl-4">اختصاص</button>
                    </div>
                </div>
                
            
            </div>
            </form>
        </div>

        <table id="myTable">
            <tr class="header"  style="background:#EEF8FC;">
                <th style="width:10%;">عکس</th>
                <th style="width:20%;">نام</th>
                <th style="width:20%;">کدملی</th>

                <th style="width:40%;">کلاس</th>
                <th style="width:20%;">حذف</th>

            </tr>
            @foreach($list_teacher as $teacher)
            <tr>
                <td style="padding:0px">
                    <img src="{{$teacher->profile_img}}" style="width:65px" alt="">
                </td>
                <td>
                    <a href="find_student/{{$teacher->identity_code}}">
                    {{$teacher->name}} {{$teacher->family}}
                    </a>
                </td>
                <td>
                    {{$teacher->identity_code}}
                </td>
                <td>
                    <div style="display: none;">
                        {{$lst = App\Models\User::find($teacher->id)->class_to_classify}}
                    </div>
                    
                    @foreach($lst as $lst_teacher)
                        {{$lst_teacher->kind}} - {{$lst_teacher->name}} - {{$lst_teacher->desc}} |
                    @endforeach
                </td>

                <td>
                    @foreach($lst as $lst_teacher)
                        <a href="/manager/delete_class_from_teacher/{{$lst_teacher->id}}/{{$teacher->id}} " style="font-size: 9px;color:red"> 
                            {{$lst_teacher->name}} 
                        </a> -
                    @endforeach
                </td>

                
            </tr>
            
            @endforeach
            </table>
    </div>
</div>


@endsection