<!DOCTYPE html>
<html>
<head>
<title>User Registration Form</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    {{--  body {
        display: flex;
        justify-content: center;
    }  --}}

    .one
    {
        margin-top: 70px;
    }

    .form-one
    {
        border-radius: 0.45rem;
        background-color: #eeeeee;
        padding: 40px;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }

    .heading
    {
        text-align: center;
        padding-bottom: 10px;
        font-size: 30px;
    }


    span {
        color: red;
    }

</style>

<body>
    <div class="container">

        {{--  <a href="{{ route('bookingDetails') }}"><button type="submit" class="btn btn-primary">Book Slot</button></a>  --}}

        <div class="one">
            <form action="" method="" class="row g-3 form-one">
                @csrf

                <h5 class="heading ">User Detail of mobile: <span style="color: red">{{ $user->mobile }}</span> </h5>

                <div class="col-md-12">
                    <label class="form-label">User Name</label>
                    <input type="text" name="user_name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Mobile</label>
                    <input type="tel" pattern="[0-9]{5}[0-9]{5}" name="mobile" value="{{ $user->mobile }}" class="form-control" placeholder="Eg: 9922785687">
                </div>
                {{--  <div class="col-md-6">
                    <label class="form-label">Blood Group</label>
                    <input type="text" name="blood_group" class="form-control">
                </div>  --}}
                <div class="col-md-6">
                    <label class="form-label">Blood Group</label>
                    <input type="text" name="blood_group" value="{{ $user->blood_group }}" class="form-control">
                </div>


                {{--  <div class="col-12">
                    <a href="{{ back()->withInput() }}" class="float-start"><button type="" class="btn btn-primary">Go Back</button></a>
                    <a href="{{ route('user.list') }}" class="float-end"><button type="" class="btn btn-primary">User List</button></a>
                </div>  --}}

            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
