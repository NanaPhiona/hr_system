@extends('layout/index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>New Employee Form</h3>
            </div>
            <div class="col-md-4">
                <a href="{{ route('employees')}}" class="btn btn-primary">Employee List</a>
            </div>
        </div>
       <div class="employee_form">
            <form action="{{ route('store_employee_records') }}" method="POST">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Emails" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="employee_id" class="form-label">Employee ID</label>
                            <input type="number" class="form-control" name="employee_id" id="employee_id" placeholder="Employee ID" required>
                        </div>
                    </div>
                    <div class= "col-md-6">
                        <div class="form-group">
                            <label for="date_of_hire" class="form-label">Date Of Hire</label>
                            <input type="date" name="date_of_hire"  class="form-control" id="date_of_hire" required>
                            </select>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Contact</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_of_birth" class="form-label">Date Of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" name="nationality"  class="form-control" id="nationality" placeholder="Nationality"  required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country"  class="form-control" id="country" placeholder="country" required>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" name="department"  class="form-control" id="department" placeholder="Department"  required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" name="position"  class="form-control" id="position" placeholder="Position" required>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary create_employee_link">Add Employee</button>
            </form>
        </div>
        
    </div>
@endsection
