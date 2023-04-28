<h1>Member List</h1>
<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    @foreach ($members as $memlist)
    <tr>
        <td>{{$memlist['name']}}</td>
        <td>{{$memlist['email']}}</td>
        <td>{{$memlist['address']}}</td>
    </tr>
    @endforeach
</table>

<div>
    {{$members->links()}}
</div>