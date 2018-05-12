@extends('../layouts/app')

@section('content')


    <h1>Show Company</h1>


  @foreach($companies as $company)
    <p> {{ $company->name }}</p>

    @endforeach


    @endsection