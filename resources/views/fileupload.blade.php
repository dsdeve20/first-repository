@include('layout.header')
<link rel="stylesheet" href="style/iconbar.css">

<h1>File Upload</h1>
<form action="{{ url('fileupload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload File</button>
</form>

@include('layout.footer')