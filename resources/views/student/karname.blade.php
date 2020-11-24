@extends('student.master2')

@section('content2')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="card mt-5">
            <div class="card-header" style="direction: rtl;">
            کارنامه 
            </div>
            <div class="card-body" >
            <div style="overflow-x: auto;">

            <table class="table" style="width:100%" style="direction: rtl;">
                <tr class="header" >
                    <th style="width:15%;">توضیحات</th>
                    <th style="width:15%;">نمره</th>
                    <th style="width:30%;">عنوان تمرین</th>
                    <th style="width:30%;">عنوان درس</th>


                </tr>
                @foreach($karname as $dars)
                    <tr>
                        <td>{{$dars->status}}</td>
                        <td>
                            @if(strlen($dars->mark) > 3 )
                                <p style="font-size: 18px;">{{$dars->mark}}</p>
                            @else
                                <p>نمره ثبت نشده</p>
                            @endif

                        </td>
                        @if(App\Models\Assigment::where('id',$dars->assigment_id)->count() > 0)
                            <td>{{App\Models\Assigment::where('id',$dars->assigment_id)->first()->title}}</td>
                            <td>{{App\Models\Course::where('id',$dars->course_id)->first()->title}}</td>
                        @endif

                   </tr>
                
                @endforeach
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection