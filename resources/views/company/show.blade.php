@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <a class="btn btn-success" href="\company">
                <b> Back </b>
            </a>
        <div>
        <br>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Website </th>
                        <th scope="col"> Logo </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $company->name }} </td>
                        <td> {{ $company->email }} </td>
                        <td> {{ $company->website }} </td>
                        <td> 
                            <img src="{{ asset('logos/' . $company->logo) }}" />
                        </td>
                    </tr>
                </tbody>

            </table>

               
        </div>
    </div>
</div>
@endsection
