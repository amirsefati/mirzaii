@extends('manager.master')

@section('content')

<form action="/manager/homepage_slider" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">  اسلایدر اصلی صفحه </div>
        
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="title">  متن روی اسلایدر :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-8">
                        <label for="desc">  متن انتهایی :</label>
                        <input type="text" class="form-control" name="desc" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="img">تصویر  اسلایدر :</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="category"> دسته بندی اسلایدر :</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="etc_1"> متن اسلایدر (توضیح اضافی) :</label>
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
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس متن رویداد ">
                        <div style="overflow-x: auto;">

                            <table id="myTable">
                            <tr class="header"  style="background:#00A6A6">
                                <th style="width:20%;">عکس اسلایدر</th>
                                <th style="width:20%;">عنوان</th>
                                <th style="width:30%;">متن اسلایدر</th>
                                <th style="width:10%;">نمایش</th>

                                <th style="width:10%;">حذف</th>

                            </tr>
                            @foreach($slider as $slider)
                            <tr>
                                <td>
                                    <img src="{{$slider->img}}" width="70px" alt="">    
                                    
                                </td>

                                <td>{{$slider->title}}</td>
                                <td>{{$slider->desc}}</td>
                                <td>
                                    @if($slider->show == 1)
                                    <a href="/manager/show_slider/{{$slider->id}}">
                                        <img src="/images/show.png" width="45px" alt="نمایش">
                                    </a>
                                    @else
                                    <a href="/manager/hide_slider/{{$slider->id}}">
                                        <img src="/images/hide.png" width="45px" alt="مخفی کردن">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="/manager/delete_config/{{$slider->id}}">
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