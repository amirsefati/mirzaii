@extends('manager.master')

@section('content')

<form action="/manager/homepage_intro_book" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">  افزودن کتاب </div>
        
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="title"> عنوان کتاب :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="col-md-8">
                        <label for="desc">  خلاصه کتاب  :</label>
                        <input type="text" class="form-control" name="desc" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="img">تصویر  کتاب :</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="etc">تصویر کامل کتاب :</label>
                        <input type="file" name="etc" class="form-control">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="category">  دسته بندی کتاب :</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label for="etc_1"> شرح کتاب :</label>
                        <textarea name="etc_1" class="form-control" rows="9"></textarea>
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
                                <th style="width:20%;">دسته بندی </th>
                                <th style="width:30%;">عنوان</th>
                                <th style="width:40%;">متن کتاب</th>
                                <th style="width:10%;">حذف</th>

                            </tr>
                            @foreach($intro_book as $intro_book)
                            <tr>

                                <td>{{$intro_book->title}}</td>
                                <td>{{$intro_book->desc}}</td>
                                <td>{{$intro_book->etc_1}}</td>
                                <td>
                                    <a href="/manager/delete_config/homepage_intro_book/{{$intro_book->id}}">
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