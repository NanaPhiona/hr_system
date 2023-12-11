@extends('layout/index')
@section('title')
    <div class="row">
        <div class="col-md-8">
            <form class="d-flex" role="search" id="employee_search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="col-md-4" id="add-new-employee">
            <a href="{{ route('create_employee_records')}}" class="btn btn-primary">New Employee</a>
        </div>
    </div>
    <div class="container" id="employee_list">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Employee ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Country</th>
                <th scope="col">Gender</th>
                <th scope="col">Department</th>
                <th scope="col">Position</th>
                <th scope="col">Date Of Hire</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>markjohn@gmail.com</td>
                <td>0784567345</td>
                <td>Mengo</td>
                <td>12/08/1980</td>
                <td>Uganda</td>
                <td>Male</td>
                <td>SOftware Engineering</td>
                <td>Junior Developer</td>
                <td>07/11/2022</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>markjohn@gmail.com</td>
                <td>0784567345</td>
                <td>Mengo</td>
                <td>12/08/1980</td>
                <td>Uganda</td>
                <td>Male</td>
                <td>SOftware Engineering</td>
                <td>Junior Developer</td>
                <td>07/11/2022</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>markjohn@gmail.com</td>
                <td>0784567345</td>
                <td>Mengo</td>
                <td>12/08/1980</td>
                <td>Uganda</td>
                <td>Male</td>
                <td>SOftware Engineering</td>
                <td>Junior Developer</td>
                <td>07/11/2022</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection