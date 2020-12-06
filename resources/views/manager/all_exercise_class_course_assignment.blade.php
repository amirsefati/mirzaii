@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست تکلیف ها
            </div>

            <div class="pr-3 pt-2">
            
                کلاس {{App\Models\Course::where('id',App\Models\Assigment::find($id)->assigment_to_course[0]->id)->first()->course_to_classify[0]->name}}
                / <a href="/manager/all_exercise/course/{{App\Models\Assigment::find($id)->assigment_to_course[0]->id}}"> درس {{App\Models\Assigment::find($id)->assigment_to_course[0]->title}} </a>
                / <a href="/manager/all_exercise/course/{{App\Models\Assigment::find($id)->id}}"> جلسه {{App\Models\Assigment::find($id)->title}} </a>

            </div>

            <div class="card-body">
                
                <div style="overflow-x: auto;">

                <table id="myTable">
                    <thead>
                        <tr>
                        <th style="width:10%;">  نام دانش آموز </th>
                        <th style="width:20%;"> تکالیف </th>
                        <th style="width:25%;"> توضیحات </th>

                        <th style="width:35%;"> تکمیلی توضیحات </th>

                        <th style="width:10%;"> عملیات </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($exercise_list as $ex)
                        <tr>
                        <td>{{App\Models\User::where('id',$ex->user_id)->first()->name}} {{App\Models\User::where('id',$ex->user_id)->first()->family}}</td>
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
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection