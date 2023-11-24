<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style> nav .w-5{
    display: none;
   }
   </style>
    <title>Inforamtion</title>
</head>
<body>
<div class="conatiner">
    <div class="row">
        <div class="column-4">
            <table class="table table-bordered">
              <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Gender</th>
                <th>Password</th>
              </tr>
              @foreach ($data as $user=>$x )
                <tr>
                    <td class="td">{{ $x->user_id }}</td>
                    <td class="td">{{ $x->username }}</td>
                    <td class="td">{{ $x->first_name }}</td>
                    <td class="td">{{ $x->last_name }}</td>
                    <td class="td">{{ $x->gender }}</td>
                    <td class="td">{{ $x->password }}</td>
                </tr>
            @endforeach

            </table >
            <div class="mt-5">{{ $data ->links('pagination::bootstrap-5')}}</div>

        </div>
    </div>
</div>
</body>
</html>

