@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                    <a class="btn btn-success" href="\company">
                        <b> Back </b>
                    </a>
                <div>
            <br>
            <div class="card">
                <div class="card-header"> Create </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('company.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Name </label>

                            <div class="col-md-6">
                                <input name="name" id="Name" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"> Email </label>

                            <div class="col-md-6">
                                <input name="email" id="email" type="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right"> Website </label>

                            <div class="col-md-6">
                                <input name="website" id="website" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <input type="file" name="logo">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    create
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
