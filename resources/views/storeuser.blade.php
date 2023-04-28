<style>
   div{
    padding-bottom: 10px;
   }
</style>


<h1>Add New Member</h1>

@if(session('username'))
    <h3>Data saved for {{session('username')}}</h3>
@endif
<form action="storecntrl" method="POSt">
    @csrf
    <div>
        <input type="text" name="username" placeholder="Enter the name">
    </div>
    <div>
        <input type="password" name="password"   placeholder="Enter the password">
    </div>
    <div>
        <input type="email" name="email" placeholder="Enter user email">
    </div>
    <button type="submit">Add User</button>
</form>