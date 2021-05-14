@extends('layouts.app')

@section('content')

<div class="flex fixed h-screen w-full items-center" >
    
        <div id="ourmanna-verse" class="w-1/2 items-center content-center text-center py-10 px-32 text-white">
            <div id="mannaverse-container" class="bg-blue-500">       
                <p id="mannaverse"></p>
                <p id="mannaverse-reference">
                    <small id="mannaverse-version"><i>(NIV)</i></small>
                </p>
            </div>
        </div>
        
        <div class="bg-white w-1/2 h-full pt-10">
            <center>
                <h1 class="text-5xl font-bold ml-5 my-10">Request a <span class="text-blue-900">Bible Study</span> here!</h1>
                
                <form action="/thank-you" method="POST" class="w-80">
                    @csrf
                    <div class="grid grid-cols-2 gap-y-2 gap-x-0 text-left">
                        <div class="block pb-1">
                            <label for="fname">First Name:</label>
                        </div>
                        <div class="block pb-2">
                            <input type="text" name="fname" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="lname">Surname:</label>
                        </div>
                        <div class="block pb-2">
                        <input type="text" name="lname" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                        <label for="email">Email Address</label>
                        </div>
                        <div class="block pb-2">
                            <input type="email" name="email" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="phone">Phone Number:</label>
                            </div>
                            <div class="block pb-2">
                                <input type="tel" name="phone" id="" class="shadow-sm border-blue-400 border rounded">
                            </div>

                        <div class="block pb-1">
                            <label for="bdate">Birthdate:</label>
                        </div>
                        <div class="block pb-2">
                            <input type="date" name="bdate" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="religion">Religious Affiliation:</label>
                        </div>
                        <div class="block pb-2">
                            <input type="text" name="religion" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="bsdate">Bible Study Date:</label>
                        </div>
                        <div class="block pb-2">
                        <input type="date" name="bsdate" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="bstime">Bible Study Time:</label>
                        </div>
                        <div class="block pb-2">
                            <input type="time" name="bstime" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>

                        <div class="block pb-1">
                            <label for="location">Location/Address:</label>
                        </div>
                        <div class="block pb-5">
                            <input type="text" name="location" id="" class="shadow-sm border-blue-400 border rounded">
                        </div>
                    </div>
                    <div class="block">
                        <button type="submit" class="button bg-blue-400 border-blue-400 border rounded-md hover:border-blue-500 hover:text-white hover:bg-blue-500 p-2">Submit Request</button>
                    </div>
                    
                </form>
            </center>
        </div>
</div>
<div class="h-screen bg-image"></div>
@endsection

