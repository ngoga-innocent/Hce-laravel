@extends('layouts.app')

@section('content')
<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>
  <!-- Navbar -->

  <!-- Background image -->
  <div id="intro-example" class="p-5 text-center bg-image">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Welcome</h1>
          <h5 class="mb-4">
            choose what you like to do!!!
          </h5>
          <a class="btn btn-outline-light btn-lg m-2" href="/form"
            role="button" rel="nofollow">fill form</a>
          <a class="btn btn-outline-light btn-lg m-2" href="/home"
             role="button">View all </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
@endsection
