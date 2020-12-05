@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست تکلیف ها
            </div>


            <div class="card-body">
                <form action="/manager/select_search" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" name="search" value="{{session('key', '')}}" id="myInput" onkeyup="myFunction3()" placeholder=" جست جوی بر اساس عنوان جلسه  ">

                    </div>
                    <div class="col-md-1">  
                        <button class="btn btn-primary">ثبت درس</button>

                    </div>
                </div>
                </form>
                <div style="overflow-x: auto;">

                <table id="myTable">
                    <thead>
                        <tr>
                        <th style="width:10%;"> نام دانش آموز</th>
                        <th style="width:10%;">  کلاس </th>
                        <th style="width:20%;">  نام درس</th>
                        <th style="width:10%;">  عنوان جلسه </th>
                        <th style="width:10%;">  تکلیف </th>
                        <th style="width:15%;">  ارزشیابی توصیفی  </th>
                        <th style="width:15%">   توضیحات  </th>
                        <th style="width:5%;">  حذف  </th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($all_exercise as $ex)

                            @if(strlen($ex) > 10)

                            <tr>
                            <td>{{App\Models\User::where('id',$ex->user_id)->first()->name}} {{App\Models\User::where('id',$ex->user_id)->first()->family}}</td>
                            <td>{{App\Models\Course::where('id',$ex->course_id)->first()->course_to_classify[0]->name}}</td>
                            <td>{{App\Models\Course::where('id',$ex->course_id)->first()->title}} - {{App\Models\Course::where('id',$ex->course_id)->first()->grade}}</td>
                            @if(strlen(App\Models\Assigment::where('id',$ex->assigment_id)->first()) > 5)
                            <td>{{App\Models\Assigment::where('id',$ex->assigment_id)->first()->title}}</td>
                            @else
                            <td>
                                <p style="color:red">حذف شده</p>
                            </td>
                            @endif
                            <td>
                                @foreach(json_decode($ex->file) as $file1)
                                    <a href="{{$file1}}">دانلود</a>
                                @endforeach
                            </td>
                            <td>


                                        <select name="mark_send" class="form-control" id="">
                                            <option>{{$ex->mark}}</option>
                               
                                        </select>

                                    
                            </td>

                            <td>
                            <input type="text" name="desc" class="form-control" placeholder="توضیحات تکمیلی">
                            
                            </td>
                            <td>
                                <a href="/manager/delete_exercise/{{$ex->id}}">
                                    <button class="btn btn-danger">حذف</button>
                                </a>
                            </td>
                            </tr>
                            @else

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