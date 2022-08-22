@extends('layouts.layout')

@section('content')

    <style>
        .container{
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .container .title::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .content form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }
        form .category{
            display: flex;
            width: 80%;
            margin: 14px 0 ;
            justify-content: space-between;
        }
        form .category label{
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        form .category label .dot{
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three{
            background: #9b59b6;
            border-color: #d9d9d9;
        }
        form input[type="radio"]{
            display: none;
        }
        form .button{
            height: 45px;
            margin: 35px 0
        }
        form .button input{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        form .button input:hover{
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
        @media(max-width: 584px){
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .category{
                width: 100%;
            }
            .content form .user-details{
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{
                width: 5px;
            }
        }
        @media(max-width: 459px){
            .container .content .category{
                flex-direction: column;
            }
        }
    </style>
    <div class="container w-3/4 ml-auto mr-auto px-5 py-9">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="title">Application Form</div>
        <div class="content">
            <form action="{{ route('application_submit') }}" method="post">
                @csrf
                <h3 class="mt-5 font-bold text-center"> Demographic Details </h3>
                <hr>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details"> Applicant Full name </span>
                        <input type="text" name="name" placeholder="Enter your citizenship number" disabled value="{{ auth()->user()->name }}">
                    </div>

                    <div class="input-box">
                        <span class="details"> Date Of Birth </span>
                        <input type="date" name="dob" required value="{{ old('dob') }}" >
                    </div>

                    <div class="input-box">
                        <span class="details"> Gender </span>
                        <select name="gender" id="gender">
                            <option value="0"> Male </option>
                            <option value="1"> Female </option>
                            <option value=""> Prefer not to say </option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details"> Occupation </span>
                        <input type="text" name="occupation" placeholder="Enter your Occupation" required  value="{{ old('occupation') }}">
                    </div>

                    <div class="input-box">
                        <span class="details"> Education </span>
                        <input type="text" name="education" placeholder="Enter your Occupation" required  value="{{ old('education') }}">
                    </div>

                    <div class="input-box">
                        <span class="details"> Blood Group </span>
                        <select name="blood_group" id="blood_group">
                            <option value="A+"> A+ </option>
                            <option value="B+"> B+ </option>
                            <option value="AB+"> AB+ </option>
                            <option value="O+"> O+ </option>
                            <option value="A-"> A- </option>
                            <option value="B-"> B- </option>
                            <option value="AB-"> AB- </option>
                            <option value="O-"> O- </option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Citizenship Number</span>
                        <input type="text" name="citizenship_number" placeholder="Enter your citizenship number" required  value="{{ old('citizenship_number') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Citizenship Issue Date</span>
                        <input type="date" name="issue_date" required  value="{{ old('citizenship_number') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Citizenship Issue District</span>
                        <select name="district" id="">
                            @foreach($zones as $zone)
                                @foreach($zone->districts as $district)
                                    <option value="{{ $district->id }}"> {{ $district->name }} </option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>



                    <div class="input-box">
                        <span class="details">Passport Number (Optional)</span>
                        <input type="text" name="passport_number" placeholder="Enter your Passport number" value="{{ old('passport_number') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Passport Issued Country (Optional)</span>
                        <input type="text" name="passport_country" placeholder="Enter your Passport Issued Country" value="{{ old('passport_country') }}">
                    </div>




                    <div class="input-box">
                        <span class="details">Witness First Name</span>
                        <input type="text" name="witness_f_name" placeholder="Enter your Witness first name" required value="{{ old('witness_f_name') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Witness Middle Name</span>
                        <input type="text" name="witness_m_name" placeholder="Enter your Witness middle name" value="{{ old('witness_m_name') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Witness Last Name</span>
                        <input type="text" name="witness_l_name" placeholder="Enter your last name" required value="{{ old('witness_l_name') }}" >
                    </div>

                    <div class="input-box">
                        <span class="details">Witness relationship</span>
                        <select name="relationship" id="relationship">
                            <option value="0"> Father </option>
                            <option value="1"> Husband </option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details">Identity Mark (Optional)</span>
                        <input type="text" name="identity_mark" placeholder="Identity mark" value="{{ old('identity_mark') }}">
                    </div>

                    <div class="input-box">
                        <span class="details">Trainer Name (Optional)</span>
                        <input type="text" name="trainer_name" placeholder="Enter your Trainer Name" value="{{ old('trainer_name') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Trainer License Number (Optional)</span>
                        <input type="text" name="trainer_licence" placeholder="Enter your trainer License number" value="{{ old('trainer_licence') }}">
                    </div>


                    <h3 class="mt-5 font-bold text-center display-block w-full"> Permanent Address </h3>
                    <hr class="w-full mb-7">

                    <div class="input-box">
                        <span class="details"> Zone </span>
                        <select name="p_zone" id="p_zone" onchange="showDistricts(this.value, 'p_district')">
                            <option disabled selected> Select your Zone </option>
                            @foreach($zones as $zone)
                                <option value="{{ $zone->id }}"> {{ $zone->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <select name="p_district" id="p_district">
                            <option disabled selected> Select your District </option>
{{--                            @foreach($zones as $zone)--}}
{{--                                @foreach($zone->districts as $district)--}}
{{--                                    <option value="{{ $district->id }}"> {{ $district->name }} </option>--}}
{{--                                @endforeach--}}
{{--                            @endforeach--}}
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Village</span>
                        <input type="text" name="p_village" placeholder="Enter your trainer License number" required value="{{ old('p_village') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Ward No.</span>
                        <input type="number" name="p_ward" placeholder="Enter your identity mark" required value="{{ old('p_ward') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Tole</span>
                        <input type="text" name="p_tole" placeholder="Enter your Trainer Name" required value="{{ old('p_tole') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number</span>
                        <input type="text" name="p_mobile" placeholder="Enter your identity mark" required value="{{ old('p_mobile') }}">
                    </div>


                    <h3 class="mt-5 font-bold text-center display-block w-full"> Temporary Address </h3>
                    <hr class="w-full mb-7">

                    <div class="input-box">
                        <span class="details"> Zone </span>
                        <select name="t_zone" id="t_zone"  onchange="showDistricts(this.value, 't_district')">
                            <option disabled selected> Select your Zone </option>
                        @foreach($zones as $zone)
                                <option value="{{ $zone->id }}"> {{ $zone->name }} </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <select name="t_district" id="t_district">
                            <option disabled selected> Select your District </option>
{{--                        @foreach($zones as $zone)--}}
{{--                            @foreach($zone->districts as $district)--}}
{{--                                <option value="{{ $district->id }}"> {{ $district->name }} </option>--}}
{{--                                @endforeach--}}
{{--                        @endforeach--}}
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Village</span>
                        <input type="text" name="t_village" placeholder="Enter your trainer License number" required value="{{ old('t_village') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Ward No.</span>
                        <input type="number" name="t_ward" placeholder="Enter your identity mark" required value="{{ old('t_ward') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Tole</span>
                        <input type="text" name="t_tole" placeholder="Enter your Trainer Name" required value="{{ old('t_tole') }}">
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number</span>
                        <input type="text" name="t_mobile" placeholder="Enter your identity mark" required value="{{ old('t_mobile') }}">
                    </div>

                </div>
                <h3 class="mt-5 font-bold text-center display-block w-full"> Exam Information </h3>
                <hr class="w-full mb-7">
                <div class="input-box">
                    <span class="details"> Select Category </span>
                    <select name="category" id="">
                        <option disabled selected> Select category </option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->symbol }} - {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        function showDistricts(zone, id) {
            $.ajax({
                type:'POST',
                url:'/getDistricts/',
                data: {
                    id : zone,
                    _token: '{{csrf_token()}}'
                },
                success:function(data) {
                    var parshed = JSON.parse(data);
                    console.log(parshed);
                    var select = $(`#${id}`);
                    var newSelect = document.createElement('select');
                    newSelect.setAttribute('name', id);
                    newSelect.setAttribute('id', id);
                    for(var i=0; i<parshed.length; i++) {
                        var option = document.createElement('option');
                        option.setAttribute('value', parshed[i].id);
                        option.innerHTML = parshed[i].name;
                        newSelect.append(option);
                    }
                    select.replaceWith(newSelect);
                }
            });
        }
    </script>
@endsection
