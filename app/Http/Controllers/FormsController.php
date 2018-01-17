<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function simpleForm(Request $request) {

        $this->validate($request, [
            'firstName' => 'required|min:3'
        ]);

        var_dump($request->all());
        var_dump($request->except('_token'));
        var_dump($request->only(['firstName', 'utm']));

        $userName = $request->input('name', '(anonymous)');

        var_dump($userName);
    }

    public function arrayForm(Request $request) {
        $employeeZeroFirstName = $request->input('employees.0.firstName');
        $allLastNames = $request->input('employees.*.lastName');
        $employeeOne = $request->input('employees.1');

        var_dump($employeeZeroFirstName, $allLastNames, $employeeOne);
    }

    public function pictureUploadForm(Request $request) {
        var_dump($request->all());

        if ($request->hasFile('profile_picture') &&
            $request->file('profile_picture')->isValid()) {
            var_dump($request->file('profile_picture'));
        }
    }
}
