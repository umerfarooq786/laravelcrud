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
            <form action="{{ route('upload.file') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file">
                <br/>
                <input type="submit" class="btn btn-info">
            </form>
        </div>
        <div class="row">
            <h2>Show File</h2>
            <table>
            @if(count($files) > 0)
            @foreach($files->all() as $file)

            <tr>

                <td><img src="public/upload/{{ $file->name }}"></td>

            </tr>
            @endforeach
            @endif
            </table>
            {{--@foreach($files as $file )--}}
                {{--<tr class="active">--}}
                    {{--<td><img src="public/upload/{{ $file->name }}"></td>--}}
                    {{--<td>--}}
                        {{--<img src="{{ $file->name }}">--}}
                    {{--</td>--}}
                {{--</tr>--}}
             {{--@endforeach--}}
        </div>
    </div>
    </body>
</html>