<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="http://127.0.0.1:8000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hr-system</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
    </li>
    <li>  
      <button class="btn btn-outline-success notification-icon" type="submit"><span class="material-symbols-outlined">notifications</span></button>
    </li>
    <li>
      <button class="btn btn-outline-success"><span class="material-symbols-outlined">person</span></button>
    </li>
  </ul>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-success notification-icon" type="submit"><span class="material-symbols-outlined">
                notifications
                </span></button>
                <button class="btn btn-outline-success"><span class="material-symbols-outlined">person</span></button>
            </form>
          </div>
        </div>
      </nav> --}}

      {{-- <div class="row mt-0">
        <div class="col-md-4 sidebar">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8"></div>
      </div> --}}
    <div class="row">
      <div class="col-md-2">
        <div class="sidebar">
          <ul class="nav flex-column sidebar">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('employees')}}">Employees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('analytics') }}">Analytics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('attendances') }}">Payroll</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('benefits') }}">Benefits</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('departments') }}">Departments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('attendances') }}">Attendances</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('leave') }}">Vacations</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('recruitments' )}}">Recruitments</a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('settings') }}">Settings</a>
            </li>
          </div>
      </div>
      <div class="col-md-10">
        <h1>@yield('title')</h1>
        @yield('content')
      </div>
    </div>
    
</body>
</html>