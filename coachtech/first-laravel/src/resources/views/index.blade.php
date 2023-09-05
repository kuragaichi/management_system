<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
</head>

<body>
    @extends('layouts.default')
    <style>
        th {
            background-color: #289ADC;
            color: white;
            padding: 5px 40px;
        }

        tr:nth-child(odd) td {
            background-color: #ffffff;
        }

        td {
            padding: 25px 40px;
            background-color: #eeeeee;
            text-align: center;
        }

        svg.w-5.h-5 {
            /*paginateメソッドの矢印の大きさ調整のために追加*/
            width: 30px;
            height: 30px;
        }
    </style>
    @section('title' 'index.blade.php')
    @section('content')
    <table>
        <tr>
            <th>Date</th>
        </tr>
        @foreach ($authors as $author)
        <tr>
            <td>
                {{$author->getDetail()}}
            </td>
        </tr>
        @endforeach
    </table>
    {{$authors->links()}}
    endsection
</body>

</html>