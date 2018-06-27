<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Upload File</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h2>Show File</h2>
        <table>

            @if(count($files) > 0)
                {{--@foreach($files->all() as $file)



                        <img src="{{asset('storage/upload/'. $file->name .'jpg')}}">


                    </tr>
                @endforeach--}}
            @endif
        </table>
    </div>
    @foreach($files as $file)



        <img src="{{asset('storage/upload/'.$file->name. '.jpg')}}" style="width: 500px" height="500px">
        {{--<img src="storage/upload/{{ $file->name }}">--}}
    @endforeach
</div>
</body>
</html>