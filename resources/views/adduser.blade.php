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
    <h1>Add New User</h1>
    {{-- @if ($errors->any())
    <ul  class="alert alert-danger" >

        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>

        @endforeach


   </ul>
    @endif --}}


<form action="{{ route('adduser') }}" method="post">
    @csrf

    <label for="">Name</label>
    <input type="text" name="username" value="{{ old('age') }}" class="form-control @error('username') is-invalid

    @enderror">
    <span class="text-danger">
        @error('username')
        {{ $message }}
    @enderror
</span>
    <br>
    <label for="">Password</label><br>
    <input type="password" name="pass" class="form-control @error('pass') is-invalid

    @enderror">
    <span class="text-danger">
        @error('pass')
        {{ $message }}
    @enderror
</span>

    <br>
    <label for="">Email</label>
    <input type="text" value="{{ old('age') }}" name="email" class="form-control @error('email') is-invalid

    @enderror">
    <span class="text-danger">
        @error('email')
        {{ $message }}
    @enderror
</span>
    <br>
    <label for="">Age</label>
    <input type="text"value="{{ old('age') }}" name="age"class="form-control @error('age') is-invalid

    @enderror">
    <span class="text-danger">
        @error('age')
        {{ $message }}
    @enderror
</span>
    <br>
    <label for="">City</label>
    <input type="text" value="{{ old('age') }}"  name="city" class="form-control @error('city') is-invalid

    @enderror">
    <span class="text-danger">
        @error('city')
        {{ $message }}
    @enderror
</span>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
