@extends('teacher.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">لیست کلاس ها شما</div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">نام کلاس</th>
                    <th scope="col">نوع کلاس</th>
                    <th scope="col">پایه</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($class_list as $class)
                        <tr>
                        <th>
                            <a href="list_student_class/{{$class->id}}">{{$class->name}}</a>    
                        
                        </th>
                        <td>{{$class->kind}}</td>
                        <td>{{$class->desc}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection