<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;


class ApplicantController extends Controller
{
    // display the applicants

    public function index()
    {
        $applicants = Applicant::all();
        return response()->json($applicants);
    }

    public function store(Request $request)
    {
        $validateRequest = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string'
        ]);

        $applicant = Applicant::create($validateRequest);
        return response()->json($applicant, 201);       
    }

    public function show(Applicant $applicant)
    {
        return response()->json($applicant);
    }

    public function update(Request $request, Applicant $applicant)
    {
        $validateRequest = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string'
        ]);

        $applicant->update($validateRequest);

        return response()->json($applicant, 200);
    }

    public function destroy(Applicant $applicant)
    {
        $applicant->delete();

        return response()->json("Selected Application was been Deleted", 201);
    }
}