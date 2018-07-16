{{--@extends('../layouts/app')--}}

{{--@section('content')--}}

    <p><a href="/companies/"> Back to Companies Index </a></p>
    <h1>Show Company</h1>

    <h3> Company Name: {{ $company->name }}</h3>
    <h3> Company Mail: {{ $company->email }}</h3>
    <h3> Company Phone: {{ $company->phone }}</h3>
    <h3> Web Site: {{ $company->website }}</h3>
    <h3> Company Address: {{ $company->address }}</h3>


{{--@endsection--}}