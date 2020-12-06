@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست تکلیف ها درس ({{App\Models\Course::find($id)->title}})
            </div>
            <div class="pr-3 pt-2">
             کلاس {{App\Models\Course::find($id)->course_to_classify[0]->name}} / درس {{App\Models\Course::find($id)->title}} {{App\Models\Course::find($id)->grade}}

            </div>

            <div class="card-body">
                
                <div style="overflow-x: auto;">

                <table id="myTable">
                    <thead>
                        <tr>
                        <th style="width:10%;">  درس </th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($assignment_list as $ex)
                        @if(strlen($ex->file_doc) > 10  )
                        <tr>
                        <td><a href="/manager/all_exercise/course/assignment/{{$ex->id}}">{{$ex->title}} {{$ex->grade}}</a> </td>
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