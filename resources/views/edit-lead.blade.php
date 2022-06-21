<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Deals</title>
</head>
<body>
<div class="container">
    <div class="mt-5 text-right">
        <a href="{{route('home')}}" class="btn btn-primary">Back</a>
    </div>
    <h1 class="title mt-1 text-center">Leads</h1>

    <h3 class="title mt-5">Add Lead</h3>
    <div class="mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success" style="background:white">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('edit-lead') }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="kid_name">Kid Name</label>
                <input type="text" class="form-control" id="kid_name" name="kid_name" placeholder="Enter Kid Name">
            </div>
            <div class="form-group">
                <label for="kid_grade">Kid Grade</label>
                <input type="text" class="form-control" id="kid_grade" name="kid_grade" placeholder="Enter Kid Grade">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <form action="{{ route('destroy-lead') }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary">Delete Lead</button>
        </form>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("document").ready(function(){
        setTimeout(function(){
            $("div.alert").remove();
        }, 5000);

    });
</script>
</html>
