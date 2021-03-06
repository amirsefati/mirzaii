@extends('manager.master')

@section('content')

<form action="/manager/home_page_notice" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> اطلاعیه ها </div>
        
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="title"> عنوان :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-8">
                        <label for="desc"> متن اطلاعیه :</label>
                        <input type="text" class="form-control" name="desc" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="img">تصویر اطلاعیه :</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="etc"> آپلود عکس اطلاعیه :</label>
                        <input type="file" name="etc" class="form-control">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="category">  دسته بندی اطلاعیه  :</label>
                        <input type="text" class="form-control" name="category">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="etc_1"> متن کامل اطلاعیه :</label>
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
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس عنوان  ">
                        <div style="overflow-x: auto;">

                            <table id="myTable">
                            <tr class="header"  style="background:#00A6A6">
                                <th style="width:10%;">دسته بندی</th>
                                <th style="width:20%;">عنوان</th>
                                <th style="width:30%;">توضیح</th>
                                <th style="width:40%;">توضیح کامل</th>
                                <th style="width:10%;">حذف</th>

                            </tr>
                            @foreach($notice as $notice)
                            <tr>

                                <td>{{$notice->category}}</td>
                                <td>{{$notice->title}}</td>
                                <td>{{$notice->desc}}</td>
                                <td>{{$notice->etc_1}}</td>
                                <td>
                                    <a href="/manager/delete_config/home_page_notice/{{$notice->id}}">
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