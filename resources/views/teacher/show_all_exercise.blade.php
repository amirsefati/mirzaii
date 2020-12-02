@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            تکلیف های تصحیح نکرده
            </div>


            <div class="card-body">
                <form action="/teacher/select_search" method="POST">
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
                        <th style="width:20%;">  نام درس</th>
                        <th style="width:10%;">  عنوان جلسه </th>
                        <th style="width:10%;">  تکلیف </th>
                        <th style="width:15%;">  ارزشیابی توصیفی  </th>
                        <th style="width:20%;">   توضیحات  </th>
                        <th style="width:5%;">   ثبت  </th>

                        </tr>
                    </thead>
                    <tbody>

                    @foreach($exercise as $ex1)
                        @foreach($ex1 as $ex)
                            @if(strlen($ex) > 10)

                            <tr>
                            <td>{{App\Models\User::where('id',$ex->user_id)->first()->name}} {{App\Models\User::where('id',$ex->user_id)->first()->family}}</td>
                            <td>{{App\Models\Course::where('id',$ex->course_id)->first()->title}} - {{App\Models\Course::where('id',$ex->course_id)->first()->grade}}</td>
                            <td>{{App\Models\Assigment::where('id',$ex->assigment_id)->first()->title}}</td>
                            <td>
                                @foreach(json_decode($ex->file) as $file1)
                                    <a href="{{$file1}}">دانلود</a>
                                @endforeach
                            </td>
                            <td>
                            <form action="/teacher/add_mark_to_student_ok" method="POST">

                                @csrf
                                <input type="text" name="exercise_id" value="{{$ex->id}}" hidden>
                                        <select name="mark_send" class="form-control" id="">
                                            <option value="خیلی خوب">خیلی خوب</option>
                                            <option value="خوب">خوب</option>
                                            <option value="قابل قبول">قابل قبول</option>
                                            <option value="نیاز به تلاش بیشتر">نیاز به تلاش بیشتر</option>

                                        </select>

                                    
                            </td>

                            <td>
                            <input type="text" name="desc" class="form-control" placeholder="توضیحات تکمیلی">
                            
                            </td>
                            <td>
                            <button class="btn btn-success">ثبت</button>
                            </form>

                            </td>
                            </tr>
                            @else

                            @endif
                        @endforeach
                        @endforeach

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection