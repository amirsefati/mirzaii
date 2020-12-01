@extends('teacher.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست تمام تکالیف
            </div>

            <div class="card-body">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس عنوان جلسه ">
                <div style="overflow-x: auto;">

                <table id="myTable">
                    <thead>
                        <tr>
                        <th style="width:10%;"> نام دانش آموز</th>
                        <th style="width:15%;">  نام درس</th>
                        <th style="width:10%;">  عنوان جلسه </th>
                        <th style="width:10%;">  تکلیف </th>
                        <th style="width:20%;">  ارزشیابی توصیفی  </th>
                        <th style="width:20%;">   توضیحات  </th>
                        <th style="width:15;">    ویرایش   </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exercise as $ex)
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
                                <input type="text" name="page" value="backup" hidden>
                                <input type="text" name="exercise_id" value="{{$ex->id}}" hidden>
                                 
                                        <select name="mark_send" class="form-control" id="" required>
                                            <option value="{{$ex->mark}}"> ثبت شده ( {{$ex->mark}} )</option>
                                            <option value="خیلی خوب">خیلی خوب</option>
                                            <option value="خوب">خوب</option>
                                            <option value="قابل قبول">قابل قبول</option>
                                            <option value="نیاز به تلاش بیشتر">نیاز به تلاش بیشتر</option>

                                        </select>

                                    
                            </td>
                            <td>
                                <input type="text" class="form-control" name="desc" value="{{$ex->status}}">
                            </td>
                            <td>
                            <button class="btn btn-warning">ثبت تغییرات</button>
                                </form>
                            <a href="/teacher/delete_exrcisebt/{{$ex->id}}">
                                <button class="btn btn-danger p-1">حذف</button>
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