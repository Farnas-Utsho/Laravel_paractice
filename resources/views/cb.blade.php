<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>
<body>
    <form action="{{ route('name') }}" method="post">
        @csrf
        @csrf
        <label for="table_name">Class Name:</label>
        <input type="text" name="table_name" id="table_name" required>

        <p>Select Columns:</p>
        <label>Bangla
            <input type="radio" name="column1" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column1" value="0"> No
        </label>
        <br>
        <label>
            Math
            <input type="radio" name="column2" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column2" value="0"> No
        </label>
        <br>
        <label>English
            <input type="radio" name="column3" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column3" value="0"> No
        </label>
        <br>
        <label>Physics
            <input type="radio" name="column4" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column4" value="0"> No
        </label>
        <br>
        <label>Cemestry
            <input type="radio" name="column5" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column5" value="0"> No
        </label>
        <br> <label>ICT
            <input type="radio" name="column6" value="1"> Yes
        </label>
        <label>
            <input type="radio" name="column6" value="0"> No
        </label>
        <br>


        <button type="submit">Create Table</button>
    </form>

</body>
</html>
