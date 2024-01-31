<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('backend.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'descriptions' => 'nullable',
            'type' => 'required',
            'profile' => 'required|mimes:png,jpg,svg|file|max:1024',
        ]);

        $data['about'] = $request->descriptions;
        $data['image'] = store_file($request->file('profile'), 'employees');

        Employee::create($data);
        toast('Employee Created Successfully Done...', 'success');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Employee $employee
     * @return Employee|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(Employee $employee)
    {
        return view('backend.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'descriptions' => 'nullable',
            'type' => 'required',
            'profile' => 'sometimes|mimes:png,jpg,svg|file|max:1024',
        ]);
        $data['about'] = $request->descriptions;

        if ($request->hasFile('profile')){
            Storage::disk('public')->delete('/employees/'.$employee->profile);
            $data['image'] = store_file($request->file('profile'), 'employees');
        }

        $employee->update($data);
        toast('Employee Update Successfully Done...', 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     * @param Employee $employee
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Employee $employee)
    {
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
            $employee->delete();
            toast('Employee Deleted Successfully Done...', 'success');
            return back();
        }
    }
}
