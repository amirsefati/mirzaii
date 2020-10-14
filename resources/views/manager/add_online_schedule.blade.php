@extends('manager.master')

@section('content')

<form action="/manager/add_time_data_to_class" method="POST">
@csrf
<div>
    <input type="text" style="display: none;" name="gender" value="{{Auth::user()->gender}}">
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                زمان بندی کلاس ها آنلاین
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="class_list">لیست کلاس ها :</label>
                        <select name="class_id" class="form-control" id="" required>
                            <option value="">انتخاب کلاس</option>
                            @foreach($class_list as $class)
                                <option value="{{$class->id}}">{{$class->name}} - {{$class->desc}} - {{$class->kind}}انه</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="link">لینک تشکیل کلاس :</label>
                        <input type="text" name="link" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">انتخاب ساعت و تاریخ تشکیل کلاس :</label>
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text cursor-pointer" id="date3-1" data-mdpersiandatetimepicker="" data-uniqueid="1602707529387" data-original-title="" title="">تاریخ</span>
                            
                            </div>
                            <input type="text" id="inputDate3-1" name="date_time" class="form-control" placeholder="تاریخ و زمان تشکیل کلاس" aria-label="date3-1" aria-describedby="date3-1" required>
                        </div>
                        <span style="font-size: 16px;color:red;" id="inputDate3-1text"></span>

                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-md-12" style="text-align:center">
                        <button class="btn btn-success pl-5 pr-5">ارسال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


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