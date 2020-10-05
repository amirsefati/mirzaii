@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">لیست اسامی کلاس ها</div>
            <div class="card-body">
            <form action="select_class_to_show_list_post" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="class">انتخاب کلاس</label>
                        <select name="class" class="form-control" required>
                            <option value="">لیست کلاس ها</option>
                            @foreach($class_list as $class)
                                <option value="{{$class->id}}">{{$class->kind}} - {{$class->name}} {{$class->desc}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <button  class="btn btn-success pr-5 pl-5">درخواست لیست کلاس</button>
                    </div>

                </div>
            </div>
            </form>

        </div>
    </div>
</div>

@endsection