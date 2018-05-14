{{--@extends('../layouts/app')--}}

{{--@section('content')--}}

<head></head>
<body>
    <h1>Company Index</h1>

<ul>
  @foreach($companies as $company)
    <li> <a href="/company/{{$company->id}}">{{ $company->name }} </a> </li>

    @endforeach
</ul>

{{ $companies->links() }}

</body>
    {{--@endsection--}}