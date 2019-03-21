@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <a class="btn btn-success" href="\employee">
                    <b> Back </b>
                </a>
            <div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> First Name </th>
                        <th scope="col"> Last Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Phone </th>
                        <th scope="col"> Company </th>
                        <th scope="col">  </th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $employee->firstName }} </td>
                        <td> {{ $employee->lastName }} </td>
                        <td> {{ $employee->email }} </td>
                        <td> {{ $employee->phone }} </td>
                        <td> {{ $employee->company }} </td>
                    </tr>
                </tbody>

            </table>

               
        </div>
    </div>
</div>
@endsection
