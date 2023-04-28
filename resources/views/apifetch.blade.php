<h1>User list</h1>

<table border="1">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>email</th>
      <th>Profile Photo</th>
    </tr>
   
    @foreach ($collection as $item)
     <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['firstName']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item['image']}} alt=""></td>
    </tr>
    @endforeach


  </table>