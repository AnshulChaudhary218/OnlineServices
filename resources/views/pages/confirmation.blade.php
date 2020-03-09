@extends('app')

@section('content')

 {{-- {{json_encode($temp_arr[0]->userId)}} --}}
    @foreach ($temp_arr as $item)
        <form action="/confirmation/{{$item->userId}}/{{$item->serviceId}}" method="post">   
            @csrf
            <div class="row">
                <div class="col-5">
                    userId:{{json_encode($item->userId)}}
                </div>
                <div class="col-5">
                    serviceId:{{json_encode($item->serviceId)}}
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" type="submit">confirm</button>
                </div>
            </div>
        </form>
        <br>
    @endforeach
@endsection