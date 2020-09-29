@extends('manager.master')

@section('content')
<form action="/manager/add_task" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                افزودن کار
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="title">عنوان کار :</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="col-md-8">
                        <label for="desc">متن کار :</label>
                        <input type="text" class="form-control" name="desc">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="for_date">برای تاریخ :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text cursor-pointer" id="date_select" data-mdpersiandatetimepicker="" data-mdpersiandatetimepicker-group="rangeSelector1" data-fromdate="" data-uniqueid="1601319385285" data-original-title="" title="">تقویم</span>
                            </div>
                            <input type="text" name="for_date" id="input_date_select" class="form-control" placeholder="مشاهده برای تاریخ" aria-label="date4" aria-describedby="date4" readonly>
                        </div>
                        <small id="showDate_class" style="color:#A63D40">دوشنبه ۰۴ شهریور ۱۳۹۸</small>

                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="color">رنگ :</label>
                        <select name="color" class="form-control">
                            <option value="#D64550">قرمز</option>
                            <option value="#00A7E1">آبی</option>
                            <option value="#9A7AA0">بفنش</option>
                            <option value="#FF8C42">نارنجی</option>
                            <option value="#478978">سبز</option>
                            <option value="#550527">زرشکی</option>

                        </select>
                    </div>
                    
                    <div class="col-md-4 mt-3">
                        <label for="del">نمایش : </label>
                        <select name="del" class="form-control" id="">
                            <option value="1">نمایش</option>
                            <option value="0">خط خورده</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 mt-3" style="text-align: center;">
                        <button class="btn btn-success pr-5 pl-5">ارسال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>

<div class="row mt-4 mb-5">
<div class="col-md-12">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
            <div style="overflow-x: auto;">
                <table id="myTable">
                <tr class="header"  style="background:#EEF8FC;">
                    <th style="width:10%;">تاریخ</th>
                    <th style="width:40%;">عنوان</th>
                    <th style="width:40%;">متن</th>
                    <th style="width:40%;">حذف</th>

                </tr>
                @foreach($task_list as $task)
                <tr>
                   <td>{{$task->for_date}}</td>
                   <td>{{$task->title}}</td>
                   <td>{{$task->desc}}</td>
                   <td>
                       <a href="/manager/to_do_list_delete/{{$task->id}}">
                            <img src="/images/delete.png" width="25px" alt="">
                       </a></td>

                </tr>
                
                @endforeach
                </table>
        </div>
    </div>
</div>
@endsection