@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                لیست کلاس ها 
            </div>


            <div class="card-body">
                
                <div style="overflow-x: auto;">

                <table id="myTable">
                    <thead>
                        <tr>
                        <th style="width:10%;">  کلاس </th>
                        <th style="width:40%;">  معلم کلاس </th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach($all_class as $ex)
                        <tr>
                        
                        <td><a href="/manager/all_exercise/{{$ex->id}}">{{$ex->name}} - {{$ex->desc}}</a></td>
                        
                        <td>
                            @foreach(\App\Models\Classify::where('id',$ex->id)->first()->classify_to_class as $teacher)
                                @if($teacher->level == '2')
                                    {{$teacher->name}} {{$teacher->family}} .
                                @endif
                            @endforeach
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