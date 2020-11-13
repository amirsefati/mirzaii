@extends('teacher.master')

@section('content')

<form action="/teacher/add_notice_class" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">مدیریت اطلاعیه های کلاس ها</div>
            <div class="card-body">

            <div class="row">
                <div class="col-md-12">
                    <label for="gender">برای کلاس :</label>
                    <select name="class_id" class="form-control" id="">
                        @foreach($class_list as $class)
                            <option value="{{$class->id}}">{{$class->desc}} - {{$class->name}} - {{$class->kind}}انه</option>
                        @endforeach
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
                    <label for="file">  رنگ اطلاعیه  :</label>
                    <select name="show" class="form-control" id="">
                        <option value="#92DCE5" style="color:#92DCE5">رنگ بندی اطلاعیه</option>
                        <option value="#F2C078" style="color:#F2C078">رنگ بندی اطلاعیه</option>
                        <option value="#A5C882" style="color:#A5C882">رنگ بندی اطلاعیه</option>
                        <option value="#0CA4A5" style="color:#0CA4A5">رنگ بندی اطلاعیه</option>
                        <option value="#FF8C42" style="color:#FF8C42">رنگ بندی اطلاعیه</option>
                        <option value="#DB3069" style="color:#DB3069">رنگ بندی اطلاعیه</option>
                        <option value="#7FB069" style="color:#7FB069">رنگ بندی اطلاعیه</option>
                        <option value="#F9C80E" style="color:#F9C80E">رنگ بندی اطلاعیه</option>
                        <option value="#EE7674" style="color:#EE7674">رنگ بندی اطلاعیه</option>
                        <option value="#BDC667" style="color:#BDC667">رنگ بندی اطلاعیه</option>

                        
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