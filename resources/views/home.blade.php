@extends('layouts.app')

@section('content')
<div class="container" style="background-color:white; ">
<h3 class="action-title" class="admin" style="background-color:white;" >Welcome Administrator !!</h3>
<section  class="call-action-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call-action-content mt-5">
                        <h3 class="action-title"  class="admin">Get User!</h3>
                        <p class="text" style="text-align:center;">Search the user from here!!!</p>
                    </div> <!-- call action content -->
                </div>
                <div class="col-lg-7">
                    <div class="call-action-form mt-5">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="search" placeholder="Enter your user full name">
                            <div class="action-btn rounded-buttons">
                                <button class="main-btn rounded-three" type="submit">search</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>
    <div class="container">
      @if($informations->isNotEmpty())
          
              <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">email</th>
      <th scope="col">father's Name</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">position</th>
      <th scope="col">tel</th>
      <th scope="col">More</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($informations as $information)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $information->firstName }}</td>
      <td>{{ $information->surname }}</td>
      <td>{{ $information->email }}</td>
      <td>{{ $information->fatherName }}</td>
      <td>{{ $information->motherName }}</td>
      <td>{{ $information->position }}</td>
      <td>{{ $information->tel }}</td>
      <td class="btn btn-success"><a href="{{ url('/home/' .$information->id) }}">More</a></td>

    </tr>
          @endforeach
      @else 
          <div>
              <h2>No user found</h2>
          </div>
      @endif
      </div>
</div>
@endsection
