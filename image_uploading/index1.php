<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.form-container{
    margin: 2em 4em;
    width: 40%;
}
.form-body{
    padding: 3em;
    background-color: #E9EBEE;
}
.form-item{
    margin: 1em;
}

.button {
    width: 30%;
    padding: 8px;
    background-color: hsl(134, 48%, 56%);
    color: white;
    border: none;
    border-radius: 5px;
}
.button:hover{
    transition: 0.5s;
    box-shadow: 2px 2px 8px 2px black;
}
</style>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="form-container">
        <fieldset class="form-body">
            <legend>Image Uploading</legend>
            <label for="file">Choose Image : </label> <br><br>
            <input type="file" name="file" id="file"> <br><br>
            <button class="button" type="submit" name="submit">Upload!</button>
        </fieldset>
    </form>
</body>
</html>