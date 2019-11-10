@extends('layouts.print')
@section('content')
    <h2 style="margin-left: 25px;">Staff List 2</h2>
    <table style="margin: 0 20px !important; padding: 0 !important;">
        <thead>
        <tr>
            <th style="border-top: 1px solid #999999;">SL</th>
            <th style="border-top: 1px solid #999999;">Employee Name</th>
            <th style="border-top: 1px solid #999999;">Email</th>
            <th style="border-top: 1px solid #999999;">Mobile</th>
            <th style="border-top: 1px solid #999999;">Designation</th>
            <th style="border-top: 1px solid #999999;">Department</th>
            <th style="border-top: 1px solid #999999;">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projectStaff as $key=>$data)
            <tr>
                <td>
                    {{$data->id}}
                </td>
                <td>
                    {{$data->name}}
                </td>
                <td>
                    {{$data->email}}
                </td>
                <td>
                    {{$data->mobile}}
                </td>
                <td>
                    {{$data->designation}}
                </td>
                <td>
                    {{$data->department}}
                </td>
                <td>
                    {{$data->status}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection









