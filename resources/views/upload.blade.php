<html>
<head></head>
<body>
    <h3>upload a file</h3>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="picture" id="image"> <br><br>
        <button type="submit"> upload file</button>
    </form>
</body>
</html>