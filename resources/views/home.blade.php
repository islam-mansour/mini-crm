@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <a class="btn btn-success" href="{{ url('\employee') }}">
                    <b> employees </b>
                </a>
                <a class="btn btn-success" href="{{ url('\company') }}">
                    <b> companies </b>
                </a>
            <div>
            <br>
            <table class="table">

            @if(isset($employees))
                <div class="center">
                    <?php echo $employees->links() ?>
                </div>
                <thead>
                    <tr>
                        <th scope="col"> First Name </th>
                        <th scope="col"> Last Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Phone </th>
                        <th scope="col"> Company </th>
                        <th scope="col">  </th> 
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $e)
                    <tr>
                        <td> {{ $e->firstName }} </td>
                        <td> {{ $e->lastName }} </td>
                        <td> {{ $e->email }} </td>
                        <td> {{ $e->phone }} </td>
                        <td> {{ $e->getCompany($e->company)->name }} </td>
                        <td> <a class="btn btn-default" href="employee\{{$e->id}}"> show </a> </td>
                        <td> <a class="btn btn-default" href="employee\{{$e->id}}\edit"> edit </a> </td>

                        <td>
                            <form method="POST" action="/employee/{{$e->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

                <a class="btn btn-warning" href="employee\create"> Create New </a>

            @endif

            @if(isset($companies))
            <div class="center">
                <?php echo $companies->links() ?>
            </div>
            <thead>
                    <tr>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Logo </th>
                        <th scope="col"> Website </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $c)
                    <tr>
                        <td scope="row"> {{ $c->name }} </td>
                        <td> {{ $c->email }} </td>
                        <td> 
                            <img src="{{ asset('logos/' . $c->logo) }}" />
                        </td>
                        <td> {{ $c->website }} </td>
                        <td> <a class="btn btn-default" href="company\{{$c->id}}"> show </a> </td>
                        <td> <a class="btn btn-default" href="company\{{$c->id}}\edit"> edit </a> </td>

                        <td>
                            <form method="POST" action="/company/{{$c->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

                <a class="btn btn-warning" href="company\create"> Create New </a>

            @endif
            
            </table>

               
        </div>
    </div>
</div>
@endsection
