<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="conatiner">
        <div class="row">
            <div class="column-4">
                <Table class="table table-bordered">
                    <tr class="">
                        {{-- <th>ID</th> --}}
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                        {{-- <th>City name</th> --}}
                    </tr>
                 @foreach ($data as $students=>$x )
                     <tr>

                    {{-- <td>{{$x->id  }}</td> --}}
                    <td>{{$x->name  }}</td>
                    <td>{{$x->Age  }}</td>
                    <td>{{$x->City  }}</td>
                {{-- <td>{{$x->city  }}</td> --}}

                     </tr>
                 @endforeach

                    </Table>
            </div>
        </div>
    </div>
</body>
</html>
