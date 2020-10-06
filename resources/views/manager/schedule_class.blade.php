@extends('manager.master')

@section('content')

<form action="/manager/schedule_class" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">برنامه تشکیل کلاس ها</div>
        
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="title">پایه کلاس :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-8">
                        <label for="desc">توضیح :</label>
                        <input type="text" class="form-control" name="desc" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="img">تصویر اسلایدر :</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="etc">تصویر فایل :</label>
                        <input type="file" name="etc" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="etc_1">توضیح کامل :</label>
                        <textarea name="etc_1" class="form-control" rows="5"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3" style="text-align: center;">
                        <button class="btn btn-success pl-5 pr-5">ارسال</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</form>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                مدیریت 
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس توضیح کلاس ">
                        <div style="overflow-x: auto;">

                            <table id="myTable">
                            <tr class="header"  style="background:#00A6A6">
                                <th style="width:10%;">پایه</th>
                                <th style="width:20%;">توضیح</th>
                                <th style="width:30%;">توضیح کامل</th>
                                <th style="width:10%;">حذف</th>

                            </tr>
                            @foreach($sche_class as $sche)
                            <tr>
                                
                                <td>{{$sche->title}}</td>
                                <td>{{$sche->desc}}</td>
                                <td>{{$sche->etc_1}}</td>
                                <td>
                                    <a href="/manager/delete_config/{{$sche->id}}">
                                        <img src="/images/delete.png" width="25px" alt="">
                                    </a>
                                </td>
                            </tr>
                            
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection