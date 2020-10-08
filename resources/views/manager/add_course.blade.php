@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="/manager/add_course" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">افزودن درس</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label for="title">عنوان درس :</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="desc">شرح درس :</label>
                        <input type="text" class="form-control" name="desc">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="grade">پایه درس :</label>

                        <select name="grade" class="form-control">
                            <option value="">لیست پایه ها</option>
                            <option value="پایه اول">پایه اول</option>
                            <option value="پایه دوم">پایه دوم</option>
                            <option value="پایه سوم">پایه سوم</option>
                            <option value="پایه چهارم">پایه چهارم</option>
                            <option value="پایه پنجم">پایه پنجم</option>
                            <option value="پایه ششم">پایه ششم</option>
                        </select> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-3">
                        <label for="img">کاور درس :</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="col-md-3 mt-3">
                        <label for="show">  جنیست :</label>
                        <select name="show" class="form-control">
                            @if(Auth::user()->gender == 'پسر')
                                <option value="1">پسرانه</option>
                            @else
                                <option value="2">دخترانه</option>
                            @endif

                        </select>
                    </div>

                    <div class="col-md-6 mt-3" style="text-align: center;">
                        
                        <button class="btn btn-success pr-5 pl-5 mt-4">افزودن درس</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection