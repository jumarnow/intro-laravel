<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
    @csrf
        <label for="">First name:</label><br><br>
        <input name="depan" type="text"><br><br>
        <label for="">Last name:</label><br><br>
        <input name="belakang" type="text"><br><br>

        <label for="">Gender:</label><br><br>
        <input type="radio" name="gender" id="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female">
        <label for="female">Male</label><br>
        <input type="radio" name="gender" id="other">
        <label for="other">Other</label><br><br>

        <label for="">Nationally:</label><br><br>
        <select name="" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
        </select><br><br>

        <label for="">Language Spoken:</label><br><br>
        <input type="checkbox">
        <label for="">Bahasa Indonesia</label><br>
        <input type="checkbox">
        <label for="">English</label><br>
        <input type="checkbox">
        <label for="">Other</label><br><br>

        <label for="">Bio:</label><br><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <input type="Submit" value="Sign Up">
    </form>
</body>
</html>