@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               لیست  دروس کلاس
            </div>
            <div class="pr-3 pt-2">
                 کلاس {{App\Models\Classify::find($id)->name}} 

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

                        @foreach($course_list as $ex)
                        <tr>
                        <td><a href="/manager/all_exercise/course/{{$ex->id}}">{{$ex->title}} {{$ex->grade}}</a> </td>
                        
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