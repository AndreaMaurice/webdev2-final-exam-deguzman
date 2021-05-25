@extends('layouts.app')
@section('content')
    <div class="text-center m-20 bg-white p-5 rounded">
        <h1 class="text-5xl py-5 font-bold">
            Lists of Bible Study Requests
        </h1>
        <p class="pb-10">Go back to <a href="/" class="text-blue-500 hover:text-blue-900">homepage &rarr;</a> </p>

        <table id="bsrequest" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Bible Study Date & Time</th>
                    <th>Bible Study Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bsrequests as $bsrequest)
                <tr>
                    <td>{{ $bsrequest->lname }}, {{ $bsrequest->fname }}</td>
                    <td>{{ $bsrequest->bsdate }} | {{ $bsrequest->bstime }}</td>
                    <td>{{ $bsrequest->location }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="h-screen bg-image bg-scroll"></div>
@endsection
