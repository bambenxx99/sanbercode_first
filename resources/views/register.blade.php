<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/sanbercode" method="post">
        @csrf
        <label for="firstname">First Name</label><br>   
        <input type="text" id="firstname" name="firstname"><br>
        <label for="lastname">Last Name</label>   <br>
        <input type="text" id="lastname" name="lastname"><br><br>
        
        <label for="gender">Gender</label>   <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>


        <label for="nationality">Nationality :</label><br>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Australian">Australian</option>
        </select>
        <br>
        <br>
        <label for="language">Language Spoken :</label><br>
        
        <input type="checkbox" id="language" name="indonesia" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="language" name="english" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="language" name="other" value="other">
        <label for="other"> Other </label><br>
        <br>
        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" name="submit" id="">


    </form>
</body>
</html>