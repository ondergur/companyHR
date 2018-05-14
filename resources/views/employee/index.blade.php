
<h1>Employee Index</h1>

<ul>
    @foreach($employees as $employee)
        <li> {{ $employee->firstName }} {{$employee->lastName}}</li>

    @endforeach
</ul>