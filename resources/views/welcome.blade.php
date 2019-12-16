@extends('layouts/layout')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <h1>
        {{$foo}}
    </h1>

    @foreach ($numbers as $number)
        <tr>
            <td>
                <button id="incrementBtn">+</button>
            </td>
            <td>
                ID:{{$number->id}} |
            </td>
            <td>
                Current Value:{{$number->currentValue}}
            </td>
            <td>
                <button id="decrementBtn">-</button>
            </td>
        </tr>
    @endforeach

    <script>
      $(document).ready(function(){
            $('#incrementBtn').click(function(){
                var id ={{$number->id}};
                    
                $.ajax({
                    url:"{{route('addValue')}}",
                    method:'POST',
                    data:{
                        'id':id,
                        '_token': "{{ csrf_token() }}"},
                    dataType:'json',
                    success:function(data)
                    {
                        location.reload();
                    }
                });
           });
        });

        $(document).ready(function(){
            $('#decrementBtn').click(function(){
                var id ={{$number->id}};
                    
                $.ajax({
                    url:"{{route('subValue')}}",
                    method:'POST',
                    data:{
                        'id':id,
                        '_token': "{{ csrf_token() }}"},
                    dataType:'json',
                    success:function(data)
                    {
                        location.reload();
                    }
                });
           });
        });
    </script>

@endsection