@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <a class="btn btn-success" href="\employee">
                    <b> Back </b>
                </a>
            <div>
            <br>
            <div class="card">
                <div class="card-header"> Edit </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                        @method('PATCH')
                        @csrf


                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right"> First Name </label>

                            <div class="col-md-6">
                                <input name="firstName" id="firstName" type="text" class="form-control" value="{{$employee->firstName}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right"> Last Name </label>

                            <div class="col-md-6">
                                <input name="lastName" id="lastName" type="text" class="form-control"  value="{{$employee->lastName}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"> Email </label>

                            <div class="col-md-6">
                                <input name="email" id="email" type="email" class="form-control"  value="{{$employee->email}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"> Phone </label>

                            <div class="col-md-6">
                                <input name="phone" id="phone" type="tel" class="form-control"  value="{{$employee->phone}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"> Company </label>
                            <div class="col-md-6 offset-md-4">
                                <select class="custom-select" name="company">
                                    @foreach($companies as $c)
                                        <option value="{{$c->id}}" {{ ($employee->company == $c->id) ? 'selected' : '0'}} > {{ $c->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
