@extends('manager.master')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="row">

        <input class="col-md-5 mr-2" type="text" id="myInput2" onkeyup="myFunction2()" placeholder="جست و جو بر اساس درس  ">

        <input class="col-md-5 mr-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="جست و جو بر اساس معلم  ">
        

        </div>
        
            <div style="overflow-x: auto;">
                <table id="myTable">
                <tr class="header"  style="background:#EEF8FC;">
                    <th style="width:20%;">درس</th>
                    <th style="width:20%;">معلم</th>
                    <th style="width:30%;">عنوان جلسه</th>
                    <th style="width:30%;">محتوای جلسه</th>

                </tr>
                @foreach($assignments as $assignment1)

                @foreach($assignment1 as $assigment)
                <tr>
                    <td>
                    {{App\Models\Assigment::where('id',$assigment->id)->first()->assigment_to_course}} -    
                    {{App\Models\Assigment::where('id',$assigment->id)->first()->assigment_to_course}} 
                    </td>

                    <td>
                    {{App\Models\User::where('id',$assigment->teacher_created)->first()->name}} {{App\Models\User::where('id',$assigment->teacher_created)->first()->family}}
                    </td>

                    <td>
                    {{$assigment->title}} - {{$assigment->title}}
                    </td>

                    <td>
                        @if(strlen($assigment->file_video_2) > 10)
                        <a href="{{$assigment->file_video_2}}">
                            <img src="/images/video1.png" width="30px" alt="">
                        </a>
                        @endif

                        @if(strlen($assigment->file_video) > 10)
                        <a href="{{$assigment->file_video}}">
                            <img src="/images/video2.png" width="30px" alt="">
                        </a>
                        @endif

                        @if(strlen($assigment->file_doc_2) > 10)
                        <a href="{{$assigment->file_doc_2}}">
                            <img src="/images/file1.png" width="30px" alt="">
                        </a>
                        @endif

                        @if(strlen($assigment->img) > 10)
                        <a href="{{$assigment->img}}">
                            <img src="/images/file_2.png" width="40px" alt="">
                        </a>
                        @endif

                        @if(strlen($assigment->file_doc) > 10)
                        <a href="{{$assigment->file_doc}}">
                            <img src="/images/question.png" width="40px" alt="">
                        </a>
                        @endif
                    </td>
                </tr>
                
                @endforeach
                @endforeach
                </table>
        </div>
    </div>
</div>




@endsection