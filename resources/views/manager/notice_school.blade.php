@extends('manager.master')

@section('content')

<form action="/manager/add_notice_school" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">مدیریت اطلاعیه های کلاس ها</div>
            <div class="card-body">

            <div class="row">
                <div class="col-md-12">
                    <label for="gender">برای کلاس :</label>
                    <select name="gender" class="form-control" id="">
                        <option value="پسر">پسرانه</option>
                        <option value="دختر">دخترانه</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-3">
                    <label for="title">عنوان  :</label>
                    <input type="text" name="title" class="form-control" >
                </div>

                <div class="col-md-4 mt-3">
                    <label for="category">دسته بندی  :</label>
                    <input type="text" name="category" class="form-control" >
                </div>

                <div class="col-md-4 mt-3">
                    <label for="order"> اهمیت  :</label>
                    <input type="text" name="order" class="form-control" placeholder="1" value="1">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-3">
                    <label for="desc">متن اطلاعیه : </label>
                    <textarea name="desc" class="form-control" rows="10"></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mt-3">
                    <label for="file">آپلود عکس :</label>
                    <input class="form-control" type="file" name="img">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="file"> قابلیت نمایش  :</label>
                    <select name="show" class="form-control" id="">
                        <option value="1">نمایش</option>
                        <option value="0">پنهان سازی</option>
                    </select>
                </div>

                <div class="col-md-4 mt-3" style="text-align: center;">
                    <button class="btn btn-success pl-5 pr-5 mt-4">ارسال اطلاعیه</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection