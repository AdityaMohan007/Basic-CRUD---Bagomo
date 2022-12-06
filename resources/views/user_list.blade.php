<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        {{--  display: flex;
        justify-content: center;  --}}
    }

    .one {
        {{--  border: 3px solid rgb(0, 0, 0);  --}}
        {{--  border-radius: 0.45rem;  --}}
        {{--  background-color: #eeeeee;  --}}
        {{--  padding: 40px;  --}}
        {{--  width: 50%;  --}}
    }

    .heading {
        margin-top: 50px;
        text-align: center;
        padding-bottom: 20px;
        font-size: 30px;
    }

</style>

<body>
    <div class="container">
        <div>
            <h5 class="heading">User Details</h5>
        </div>

        <div class="one">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Blood Group</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                     <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->blood_group }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
