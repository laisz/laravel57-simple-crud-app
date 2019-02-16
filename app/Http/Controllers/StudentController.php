<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
    	return view( 'welcome' );

    } // public function index() End here..

    public function list()
    {
        $students = Student::all();
        return view( 'list', compact( 'students' ) );

    } // public function index() End here..

    public function create()
    {
    	return view( "create" );

    } // public function create() End here...

    public function store( Request $request )
    {
    	
    	$this->validate( $request, [
    		"first_name" => "required",
    		"last_name" => "required",
    		"email" => "required",
    		"phone" => "required"
    	] );

    	$student = new Student;	// Creating Object of Student::class

    	// Inserting the the Individual Request Field's data to Individual Column
    	$student->first_name = $request->first_name;
    	$student->last_name = $request->last_name;
    	$student->email = $request->email;
    	$student->phone = $request->phone;

    	$student->save();	// Finally We're Assuring the Data Insertion...

    	return redirect( route( 'list' ) )->with( "successMsg", "Student Added Successfully" );	// Successful Message..

    } // public function store( Request $request ) End here..

    public function edit( $id = NULL )
    {
    	if( $id != NULL ) {
	    	$student = Student::find( $id );
	    	return view( "edit", compact( "student" ) );
	    } else {
	    	return redirect( route( 'list' ) );
	    }
    }

    public function update( Request $request, $id = NULL )
    {
    	
    	$this->validate( $request, [
    		"first_name" => "required",
    		"last_name" => "required",
    		"email" => "required",
    		"phone" => "required"
    	] );

    	$student = Student::find( $id );	// Creating Object of Student::class

    	// Updating the the Individual Request Field's data to Individual Column
    	$student->first_name = $request->first_name;
    	$student->last_name = $request->last_name;
    	$student->email = $request->email;
    	$student->phone = $request->phone;

    	$student->save();	// Finally We're Assuring the Data Insertion...

    	return redirect( route( 'list' ) )->with( "successMsg", "Student Updated Successfully" );	// Successful Message..

    }

    public function delete( $id = NULL )
    {
    	Student::find( $id )->delete();
    	return redirect( route( 'list' ) )->with( "successMsg", "Student Deleted Successfully" );
    }



} // class StudentController extends Controller End here...
