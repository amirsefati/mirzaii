@extends('manager.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">مدیریت اطلاعیه های  مدرسه ها</div>
            <div class="card-body">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس نام ">
            <div style="overflow-x: auto;">

                <table id="myTable">
                <tr class="header"  style="background:wheat">
                    <th style="width:10%;">عکس</th>
                    <th style="width:20%;">عنوان</th>
                    <th style="width:10%;">اولیت</th>
                    <th style="width:40%;">متن اطلاعیه</th>
                    <th style="width:10%;">عملیات</th>


                </tr>
                @foreach($notice_school as $notice_class)
                <tr>
                    <td><img src="{{$notice_class->img}}" width="60px" alt=""></td>
                    <td><p>{{$notice_class->title}}</p></td>
                    <td><p>{{$notice_class->order}}</p></td>
                    <td><p>{{$notice_class->desc}}</p></td>
                    <td>
                        <a href="/manager/delete_notification/{{$notice_class->id}}">
                            <img src="/images/delete.png" width="20px" alt="">
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


@endsection