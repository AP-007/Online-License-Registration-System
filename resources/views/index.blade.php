@extends('layouts.layout')

@section('content')
    @if(\Session::has('error'))
        <div style="color: red;"> {{ \Session::get('error') }} </div>
    @endif
    <section class="text-gray-600 body-font" style="background-color: #ffffff;">
        <div class="container mx-auto flex px-5 py-24 flex-row items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0" class="hover:text-gray-700">
                <img class="object-cover object-center rounded" alt="hero"
                     src="{{ asset('images/Nepal_Header_GIF.GIF')  }}">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Online License System
                    <br class="hidden lg:inline-block">
                </h1>
                <p class="mb-8 leading-relaxed"> All the interested and eligible citizens are requested to login or reigster and fillup the online driving license application in order to be eligible for appearing in the Driving Licence examination. Please read the procedures below to know the full procedures or Login or register below.  </p>
                <div class="flex justify-center">
                    @guest()
                    <button
                        class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg"><a
                            href="{{route('login')}}">Login</a></button>
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg"><a
                            href="{{route('register')}}">Register</a></button>
                    @endguest
                    @auth()
                            <a href="{{route('logout')}}" class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </a>
                        @endauth
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font" style="
   color: white;
   background-color: #4b4b61;
   ">
        <div class="container px-5 py-24 mx-auto" style="
      color: white;
      ">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20" style="
         color: white;
         "> Steps to be followed
            </h1>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6" style="
         color: white;
         ">
                <div class="p-4 md:w-1/3 flex" style="
            color: white;
            ">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                        <span style="font-size: 25px;"> 1 </span>
                    </div>
                    <div class="flex-grow pl-6" style="
               color: white;
               ">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="
                  color: white;
                  "> Registration And Login </h2>
                        <p class="leading-relaxed text-base"> To get started, You need to register with your details and then login to access the registration form. </p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                        <span style="font-size: 25px;"> 2 </span>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="
                  color: white;
                  "> Fill the Application Form </h2>
                        <p class="leading-relaxed text-base">
                            After Logging in, you need to fill up an application from in order to book an appointment date. On that date you need to be present at your selected office for biometrics scan and verification.
                        </p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                        <span style="font-size: 25px;"> 3 </span>
                    </div>
                    <div class="flex-grow pl-6" style="
               color: white;
               ">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2" style="
                  color: white;
                  "> Exam </h2>
                        <p class="leading-relaxed text-base">
                            After the verification process is complete, You will be assigned an exam date for the written. You need to be physically present at that date and pass the written exam for appearing in the practical exam or the trial. After you have passed the trial exam, You will get yours copy of driving licence.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font" style="
   color: white;
   background-color: #404042;
   ">
        <div class="container px-5 py-24 mx-auto" style="
      color: white;
      ">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest" style="
            color: white;
            ">OUR TEAM</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    You may reach out to our technical team anytime you face problems registering or any technical gliches in the system.
                </p>
            </div>
            <div class="flex flex-wrap -m" style="
         color: white;
         ">
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('images/suman.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900" style="
                     color: white;
                     "> Suman kathet </h2>
                            <h3 class="text-gray-500 mb-3" style="
                     color: white;
                     "> Tech Lead </h3>
                            <p class="mb-4">Light up light up skechers</p>
                            <span class="inline-flex">
                     <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                           </path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                           </path>
                        </svg>
                     </a>
                  </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2" style="
            color: white;
            ">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('images/profile.jpg') }}">
                        <div class="flex-grow sm:pl-8" style="
                  color: white;
                  ">
                            <h2 class="title-font font-medium text-lg text-gray-900" style="
                     color: white;
                     "> Adarsha Poudel </h2>
                            <h3 class="text-gray-500 mb-3" style="
                     color: white;
                     "> Senior Software Engineer </h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                            <span class="inline-flex">
                     <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                           </path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                           </path>
                        </svg>
                     </a>
                  </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('images/female_profile.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900" style="
                     color: white;
                     "> Samikshya gautam </h2>
                            <h3 class="text-gray-500 mb-3" style="
                     color: white;
                     "> Software Engineer </h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                            <span class="inline-flex">
                     <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                           </path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                           </path>
                        </svg>
                     </a>
                  </span>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                             src="{{ asset('images/female_profile.jpg') }}">
                        <div class="flex-grow sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900" style="
                     color: white;
                     "> Prakriti Basnet </h2>
                            <h3 class="text-gray-500 mb-3" style="
                     color: white;
                     "> System Engineer </h3>
                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                            <span class="inline-flex">
                     <a class="text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                           </path>
                        </svg>
                     </a>
                     <a class="ml-2 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                           <path
                               d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                           </path>
                        </svg>
                     </a>
                  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
