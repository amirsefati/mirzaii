@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">لیست اسامی کلاس ها</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12" style="text-align:center">
                        <p style="font-size:18px"> کلاس {{$class_info->name}} {{$class_info->desc}}  </p>
                        <p>{{$class_info->kind}}انه</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" >
                        نام معلم :    
                        @foreach($list as $teacher)        
                            @if($teacher->level > 1)
                              {{$teacher->name}} {{$teacher->family}} ،
                            @endif
                        @endforeach
                    </div>
                   
                </div>

                <div class="row mt-4">
                   
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">عکس</th>
                                <th scope="col">نام</th>
                                <th scope="col">نام پدر</th>
                                <th scope="col">شماره شناسنامه</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $teacher)
                                    @if($teacher->level == 1)
                                        <tr>
                                        <th style="padding:1px">
                                            <img src="{{$teacher->profile_img}}" width="65px" alt="">
                                        </th>
                                        <td>{{$teacher->name}} {{$teacher->family}}</td>
                                        <td>{{$teacher->father_name}}</td>
                                        <td>{{$teacher->identity_code}}</td>
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