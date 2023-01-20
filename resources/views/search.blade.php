<!DOCTYPE html>
<html>
<head>
    <title>Rib</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
   
<div class="container" >
    <h1>Search the users</h1>   
    <form action="{{ route('search') }}" method="GET">
    <input type="text" class="form-control" name="search" required/>
    <button type="submit">Search</button>
</form>
</div>
<div class="container">
@if($users->isNotEmpty())
    @foreach ($users as $user)
        <div class="user-list">
            <p>{{ $user->firstName }}  {{ $user->surname }} </p>
        </div>
    @endforeach
@else 
    <div>
        <h2>No user found</h2>
    </div>
@endif
</div>
   
</body>
</html>