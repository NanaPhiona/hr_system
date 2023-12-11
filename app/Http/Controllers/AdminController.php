<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function employees(){
        return view('employees');
    }

    public function payroll(){
        return view('home');
    }

    public function benefits(){
        return view('home');
    }

    public function analytics(){
        return view('analytics');
    }

    public function departments(){
        return view('home');
    }

    public function attendances(){
        return view('home');
    }

    public function recruitment(){
        return view('home');
    }

    public function settings(){
        return view('home');
    }

    
    public function model_saving(){
        $employee_model = new Employees();
        $employee_model->employee_id = 4;
        $employee_model->name= 'Onyango Denis';
        $employee_model->email = 'Odenis@gmail.com';
        $employee_model->phone = '077767333';
        $employee_model->address = 'ARua';
        $employee_model->date_of_birth = Carbon::createFromFormat('m/d/Y', '4/10/1997');
        $employee_model->country = 'uganda';
        $employee_model->gender = 'female';
        $employee_model->department= 'Business Management';
        $employee_model->position= 'Business Manager';
        $employee_model->date_of_hire= Carbon::createFromFormat('m/d/Y', '23/07/2022');
        // $employee_model->save();
        die("Done Processing");
    }

    public function store_employee_records(Request $request)
{
    // Check if the user with the given email or name already exists
    $existingUser = Employees::where('email', $request->email)
        ->orWhere('name', $request->name)
        ->first();

    // If the user exists, redirect back to the employee registration page with an error message
    if ($existingUser) {
        return redirect()->route('create_employee_records')
            ->with('error', 'User already exists in the system.');
    }

    // Create a new instance of the Employees model and set its attributes
    $employee_model = new Employees();
    $employee_model->employee_id = $request->employee_id;
    $employee_model->name = $request->name;
    $employee_model->email = $request->email;
    $employee_model->phone = $request->phone;
    $employee_model->address = $request->address;
    $employee_model->date_of_birth = Carbon::createFromFormat('Y-m-d', $request->date_of_birth);
    $employee_model->country = $request->country;
    $employee_model->gender = $request->gender;
    $employee_model->department = $request->department;
    $employee_model->position = $request->position;
    $employee_model->date_of_hire = Carbon::createFromFormat('Y-m-d', $request->date_of_hire);

    try {
        // Save the employee record
        $employee_model->save();

        // Redirect back to the employee registration page with a success message
        return redirect()->route('create_employee_records')
            ->with('success', 'Employee has been added');
    } catch (\Throwable $error) {
        // Redirect to the analytics page with an error message
        return redirect()->route('analytics')->with('error', 'An expected error occurred.');
    }
}


    // public function store_employee_records(Request $request){
    //     $existingUser = Employees::where('email', $request->email)
    //         ->orWhere('name', $request->name)
    //         ->first();

    //     if ($existingUser){
    //         return redirect()->route('create_employee_records')
    //                 ->with('User already exists in the system.');
    //     }else{
    //         return 'User successfully added to the System';
    //     }

    //     $employee_model = new Employees();
    //     $employee_model->employee_id = $request->employee_id;
    //     $employee_model->name= $request->name;
    //     $employee_model->email = $request->email;
    //     $employee_model->phone = $request->phone;
    //     $employee_model->address = $request->address;
    //     $employee_model->date_of_birth = Carbon::createFromFormat('Y-m-d', $request->date_of_birth);
    //     $employee_model->country = $request->country;
    //     $employee_model->gender = $request->gender;
    //     $employee_model->department= $request->department;
    //     $employee_model->position= $request->position;
    //     $employee_model->date_of_hire= Carbon::createFromFormat('Y-m-d', $request->date_of_hire);

        
    //     // die('Done Saving....');

    //     try{
    //         $employee_model->save();
    //         return redirect()->intended('create_employee_records')
    //         ->with('success', 'Employee has been added');
    //     }
    //     catch(\Throwable $error){
    //         return redirect()->route('analytics')->with('error', 'An expected Error occured.');

    //     }
    // }

    // public function create_employee_records(){
    //     return view('employee_routes/create_employee_records');
    // }

}

//id	created_at	updated_at	name	employee_id	email		address		gender	country				

