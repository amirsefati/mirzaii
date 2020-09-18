@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header"  style="background:#FCEEF4">افزودن دانش آموز دختر</h5>
                    <div class="card-body">
                        <form action="/manager/add_student_girl" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-4 mt-2">
                                    <label for="name">نام : </label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <div class="col-md-4 mt-2">
                                    <label for="family">نام خانوادگی : </label>
                                    <input type="text" class="form-control" name="family">
                                </div>

                                <div class="col-md-4 mt-2">
                                    <label for="father_name">نام پدر : </label>
                                    <input type="text" class="form-control" name="father_name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="identiry">کد ملی</label>
                                    <input type="text" class="form-control" name="identity_code">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="serial">سریال شناسنامه</label>
                                    <input type="text" class="form-control" name="serial">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 mt-3">
                                    <label for="gender">جنسیت</label>
                                    <select name="gender" class="form-control">
                                        <option value="دختر">دختر</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <label for="born_date">تاریخ تولد :</label>
                                    <input type="date" class="form-control" name="born_date">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="born_city">محل تولد :</label>
                                    <input type="text" class="form-control" name="born_city">
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="sadere">صادره :</label>
                                    <input type="text" class="form-control" name="sadere">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="father_work">شغل و محل کار پدر :</label>
                                    <input type="text" class="form-control" name="father_work">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="mother_work">شغل و محل کار مادر :</label>
                                    <input type="text" class="form-control" name="mother_work">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="father_graduate"> میزان تحصیلات پدر :</label>
                                    <input type="text" class="form-control" name="father_graduate">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="father_field">رشته تحصیلی :</label>
                                    <input type="text" class="form-control" name="father_field">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="mother_graduate">میزان تحصبلات مادر :</label>
                                    <input type="text" class="form-control" name="mother_graduate">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="mother_field">رشته تحصیلی :</label>
                                    <input type="text" class="form-control" name="mother_field">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="father_phone">همراه پدر :</label>
                                    <input type="text" class="form-control" name="father_phone">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="mother_phone">همراه مادر :</label>
                                    <input type="text" class="form-control" name="mother_phone">
                                </div>

                                <div class="col-md-4 mt-3">
                                    <label for="phone">تلفن  :</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <label for="address">نشانی کامل منزل :</label>
                                    <textarea class="form-control" name="address" id="" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mt-3">
                                    <label for="img">عکس پرسنلی</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3">
                                    <label for="doc">آپلود کارت ملی</label>
                                    <input type="file" name="doc" class="form-control">
                                </div>
                                <div class="col-md-4 mt-3" style="text-align: center;">
                                    <button type="submit" class="btn btn-success mt-4 pr-5 pl-5 ">ارسال اطلاعات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection