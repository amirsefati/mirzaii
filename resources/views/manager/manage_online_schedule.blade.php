@extends('manager.master')

@section('content')


<div class="row mt-3">
    <div class="col-md-12">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
            <div style="overflow-x: auto;">

                <table id="myTable">
                <tr class="header"  style="background:#E0D0C1">
                    <th style="width:10%;">کد</th>
                    <th style="width:30%;">کلاس</th>
                    <th style="width:35%;">تاریخ شروع</th>
                    <th style="width:20%;">لینک</th>

                </tr>
                @foreach($sch_list as $list)
                <tr>
                    <td>
                        {{$list->id}}
                    </td>
                    <td>
                        {{App\Models\Classify::where('id',$list->class_id)->first()->name}} - {{App\Models\Classify::where('id',$list->class_id)->first()->desc}}
                    </td>
                    <td>
                        {{$list->date_time}}
                    </td>
                    <td>
                        <a href="{{$list->link}}">
                            لینک کلاس
                        </a>
                    </td>
                    
                    
                </tr>
                
                @endforeach
                </table>
            </div>
    </div>
</div>



@endsection