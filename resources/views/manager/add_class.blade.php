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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">افزودن کلاس</h5>
                    <div class="card-body">
                        <form action="/manager/add_class" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mt-4">
                                    <label for="name">نام کلاس : </label>
                                    <input type="text" class="form-control" name="name" placeholder="">
                                </div>

                                <div class="col-md-4 mt-4">
                                    <label for="kind"> جنسیت کلاس : </label>
                                    <select name="kind" class="form-control">
                                        <option value="">انتخاب کنید ... </option>
                                        <option value="پسر">پسر</option>
                                        <option value="دختر">دختر</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mt-4">
                                    <label for="desc">پایه کلاس : </label>
                                    <select name="desc" class="form-control">
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

                            <div class="row mt-4">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="text-align: center;">
                                    <button type="submit" class="btn btn-success">افزودن کلاس</button>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">نام کلاس</th>
                        <th scope="col">جنسیت کلاس</th>
                        <th scope="col">پایه کلاس</th>
                        <th scope="col">اصلاح</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($class_list as $list)
                            <tr>
                            <td>{{$list->name}}</td>
                            <td>{{$list->kind}}</td>
                            <td>{{$list->desc}}</td>
                            <td>
                                <a href="edit_class/{{$list->id}}">
                                    <img src="/images/edit.png" width="20px" alt="">
                                </a>
                                
                                <a href="delete_class/{{$list->id}}">
                                    <img src="/images/delete.png" width="20px" alt="">
                                </a>

                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection