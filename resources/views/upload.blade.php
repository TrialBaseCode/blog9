<h1>Upload File</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file"  name="file">
  <button type="submit">Upload file</button>
</form>