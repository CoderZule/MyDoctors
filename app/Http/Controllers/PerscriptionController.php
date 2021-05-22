<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Perscription;

class PerscriptionController extends Controller
{
    public function index()
    {

        date_default_timezone_set('Africa/Tunis');
        $bookings =  Booking::where('date', date('Y-m-d'))
            ->where('status', 1)->where('doctor_id', auth()->user()->id)->get();
        return view('perscription.index', compact('bookings'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['medicine'] = implode(',', $request->medicine);

        Perscription::create($data);
        return redirect()->back()->with('message', 'Prescription created');
    }


    public function show($userId, $date)
    {
        $perscription = Perscription::where('user_id', $userId)->where('date', $date)->first();
        return view('perscription.show', compact('perscription'));
    }


    //get all patients from prescription table 
    public function patientsFromPrescription()
    {
        $patients = Perscription::get();
        return view('perscription.all', compact('patients'));
    }
}
