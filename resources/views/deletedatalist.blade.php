<h1>Delete data from list</h1>
<table border="1">
 <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th><Button>All Delete</Button></th>
@foreach ($members as $item)
<tr>
    <td>{{$item['name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['address']}}</td>
    <td><a href={{"delete/".$item['id']}}>Delete</a>
     <a href={{"edit/".$item['id']}}>Edit</a></td>
</tr>
@endforeach
</table>

