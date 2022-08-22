@extends('admin.layouts.layout')

@section('content')
    <table>
        <tr>
            <th> S/N </th>
            <th> Name </th>
            <th> email </th>
            <th> gender </th>
            <th> category </th>
            <th> View Details/Verify User </th>
        </tr>
        @forelse($applicants as $applicant)
            <tr>
                <td> {{ $applicant->id }} </td>
                <td> {{ $applicant->user->name  }} </td>
                <td> {{ $applicant->user->email  }} </td>
                <td>
                    @if($applicant->gender == 1)
                        Male
                    @else
                        Female
                    @endif
                </td>
                <td> {{ $applicant->category->name }} </td>
                <td> <a href="#" class="btn btn-primary"> View Details </a> <a href="#" class="btn btn-primary"> Verify </a> </td>
            </tr>
        @empty
            No Users
        @endforelse
    </table>
@endsection
