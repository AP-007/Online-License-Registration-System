<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Applicant;
use App\Models\Category;
use App\Models\Citizenship;
use App\Models\District;
use App\Models\Exam;
use App\Models\Passport;
use App\Models\State;
use App\Models\Trainer;
use App\Models\User;
use App\Models\Witness;
use App\Models\Zone;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $state = State::all();
        $zones = Zone::all();
        return view('application', compact('zones', 'state', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = new Carbon();
        $before = $dt->subYears(16)->format('Y-m-d');
        $validatedRequest = $request->validate([
            'dob' => 'required|date|before:' . $before,
            'gender' => 'nullable|boolean',
            'occupation' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'blood_group' => 'required|string|max:3',
            'citizenship_number' => 'required|string|max:255',
            'district' => 'integer|required',
            'issue_date' => 'required|date|before:today',
            'passport_number' => 'sometimes',
            'passport_country' => 'required_with:passport_number',
            'witness_f_name' => 'required|string',
            'witness_m_name' => 'sometimes',
            'witness_l_name' => 'required|string',
            'relationship' => 'boolean',
            'identity_mark' => 'sometimes',
            'trainer_name' => 'sometimes',
            'trainer_licence' => 'required_with:trainer_name',
            'p_zone' => 'required|integer',
            'p_district' => 'required|integer',
            'p_village' => 'required|string',
            'p_ward' => 'required|numeric|max:33',
            'p_tole' => 'required|string',
            'p_mobile' => 'required|string|size:10',
            't_zone' => 'required|integer',
            't_district' => 'required|integer',
            't_village' => 'required|string',
            't_ward' => 'required|numeric|max:33',
            't_tole' => 'required|string',
            't_mobile' => 'required|string|size:10',
            'category' => 'required|integer'
        ]);

//        dd($validatedRequest);
// Applicant
        $applicant = new Applicant();
        $applicant->identity_marks = $validatedRequest['identity_mark'];
        $applicant->blood_group = $validatedRequest['blood_group'];
        $applicant->date_of_birth = $validatedRequest['dob'];
        $applicant->education = $validatedRequest['education'];
        $applicant->occupation = $validatedRequest['occupation'];
        $applicant->gender = $validatedRequest['gender'];
        $applicant->user_id = auth()->user()->id;
        $applicant->category_id = $validatedRequest['category'];
        $applicant->save();

        //Permanent Address
        $permanent_address = new Address();
        $permanent_address->type = "Permanent";
        $permanent_address->tole = $validatedRequest['p_tole'];
        $permanent_address->ward_no = $validatedRequest['p_ward'];
        $permanent_address->mobile_no = $validatedRequest['p_mobile'];
        $permanent_address->village = $validatedRequest['p_village'];
        $permanent_address->district_id = $validatedRequest['p_district'];
        $permanent_address->applicant_id = $applicant->id;
        $permanent_address->save();

        //Temporary Address
        $temporary_address = new Address();
        $temporary_address->type = "Temporary";
        $temporary_address->tole = $validatedRequest['t_tole'];
        $temporary_address->ward_no = $validatedRequest['t_ward'];
        $temporary_address->mobile_no = $validatedRequest['t_mobile'];
        $temporary_address->village = $validatedRequest['t_village'];
        $temporary_address->district_id = $validatedRequest['t_district'];
        $temporary_address->applicant_id = $applicant->id;
        $temporary_address->save();

        //witness
        $witness = new Witness();
        if(isset($validatedRequest['witness_m_name'])) {
            $witness->name = $validatedRequest['witness_f_name'] . " " . $validatedRequest['witness_m_name'] . " " . $validatedRequest['witness_l_name'];
        } else {
            $witness->name = $validatedRequest['witness_f_name'] . " " . $validatedRequest['witness_l_name'];
        }
        $witness->relationship = $validatedRequest['relationship'];
        $witness->applicant_id = $applicant->id;
        $witness->save();

        //citizenship
        $citizenship = new Citizenship();
        $citizenship->number = $validatedRequest['citizenship_number'];
        $citizenship->issue_district = $validatedRequest['district'];
        $citizenship->issue_date = $validatedRequest['issue_date'];
        $citizenship->applicant_id = $applicant->id;
        $citizenship->save();

        //passport
        if(isset($validatedRequest['passport_number'])) {
            $passport = new Passport();
            $passport->number = $validatedRequest['passport_number'];
            $passport->country = $validatedRequest['passport_country'];
            $passport->applicant_id = $applicant->id;
            $passport->save();
        }

        //Trainer
        if(isset($validatedRequest['trainer_name'])) {
            $trainer = new Trainer();
            $trainer->number = $validatedRequest['trainer_name'];
            $trainer->license_no = $validatedRequest['trainer_licence'];
            $trainer->appplicant_id = $applicant->id;
            $passport->save();
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }

    public function show_result() {
        $applicant = Applicant::where('user_id', auth()->user()->id)->get();
        $exam = Exam::where('applicant_id', $applicant->id)->orderBy('date', 'DESC')->first();
        return redirect('/verified', compact($exam));
    }

    public function verified() {
        $applicant = Applicant::where('user_id', auth()->user()->id)->get();
        $exam = Exam::where('applicant_id', $applicant->id)->orderBy('date', 'DESC')->first();
        return redirect('/verified', compact($exam));
    }

    public function unverified_users() {
        $applicants = Applicant::where('is_verified', 0)->get()->load('user', 'category');
//        dd($applicants);
        return view('admin.unverified', compact('applicants'));
    }
}
