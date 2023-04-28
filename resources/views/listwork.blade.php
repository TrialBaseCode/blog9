<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
    </tr>
    @endforeach
</table>