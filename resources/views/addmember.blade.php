<h1>Add Members</h1>
<form action="" method="POST">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Enter Name" >
    </div>
    <div>
        <input type="email" name="email" placeholder="Entre Email">
    </div>
    <div>
        <input type="text" name="address" placeholder="Enter The address">
    </div>
    <button type="submit">Add Member</button>
</form>