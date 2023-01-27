<?php

namespace App\Http\Controllers;

use App\Http\Resources\Employee as EmployeeResource;
use App\Models\Children;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $employeeResource = EmployeeResource::collection($employees);
        return response()->json([
            'data' => $employeeResource
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'hp' => 'required',
            'city' => 'required',
            'province' => 'required'
        ]);

        Employee::create($validated);
    }

    public function addChildren(Request $request)
    {
        Children::create([
            'employee_id' => $request->employee_id,
            'name' => $request->name,
            'age' => $request->age,
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
