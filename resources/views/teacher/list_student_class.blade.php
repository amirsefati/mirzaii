@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">لیست دانش آموزان کلاس ( {{$class_info->kind}} - {{$class_info->name}} - {{$class_info->desc}} )</div>
            <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
            <div style="overflow-x: auto;">

            <table id="myTable">
                <thead>
                    <tr>
                    <th scope="col"> عکس</th>
                    <th scope="col"> نام دانش آموز</th>
                    <th scope="col"> نام پدر</th>
                    <th scope="col">  شماره تلفن</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($list_student as $std)
                        @if($std->level == 1)
                        <tr>
                        <td style="padding:0px"><img src="{{$std->profile_img}}" width="60px" alt=""></td>
                        <td>{{$std->name}} {{$std->family}}</td>

                        <td>{{$std->father_name}}</td>
                        <td>{{$std->phone}}</td>

                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection