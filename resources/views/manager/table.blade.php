@extends('manager.master')

@section('content')

<div class="row" >
    <div class="col-md-6" >
        <div class="card" style="border-radius: 15px;">
            <div class="card-header" style="border-radius: 15px;">
                <div class="col-md-8">
                    <p class="pb-0 pt-2">لیست کارها</p>
                </div>
                <div class="col-md-4" style="text-align: left;">
                    <a href="/manager/add_task">
                        <button class="btn btn-warning pt-1 pb-1">افزودن</button>
                    </a>
                </div>
            </div>

            <div class="card-body" >
                <form action="/manager/add_task" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="search">جست و جو :</label>
                        <input type="text" class="form-control">
                        @foreach($task_list as $task)
                            <div class="row todo_list_row p-2 mr-2 ml-2 mt-2" style="background:{{$task->color}}">
                                <div class="col-md-10">
                                    @if($task->del == 1)
                                    <p class="todo_list_title">{{$task->title}}</p>
                                    <p class="todo_list_desc">{{$task->desc}}</p>
                                    @else
                                    <p class="todo_list_title"><del>{{$task->title}}</del></p>
                                    <p class="todo_list_desc"><del>{{$task->desc}}</del></p>
                                    @endif
                                </div>
                                <div class="col-md-2" style="text-align:left;">
                                    @if($task->del == 1)
                                        <a href="/manager/done_it/{{$task->id}}">
                                            <img src="/images/read_it.png" width="35px" alt="">
                                        </a>
                                    @else
                                        <img src="/images/done_it.png" width="38px" alt="">

                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection