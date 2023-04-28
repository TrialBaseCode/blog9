<h1>Update Member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    <div>
        <input type="text" name="name" value="{{$data['name']}}">
    </div>
    <div>
        <input type="text" name="address" value="{{$data['address']}}" >
    </div>
    <div>
        <input type="text" name="email" value="{{$data['email']}}" >
    </div>
    <Button type="submit">Update</Button>
  
</form>