<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas febri formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>

    <form action="welcome" method="get">
        <label for="fname">First name :</label><br></br>
        <input type="text" id="fname" name="fname" value=""><br></br>
        <label for="lname"> Last name :</label><br></br>
        <input type="text" id="lname" name="lname" value=""><br></br>

        <form>
        <label>Gender</label><br></br>
        <input type="radio" id="male" name="fav_language" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="fav_language" value="Female">
        <label for="female">Female</label><br><br>

        <label for="negara">Nationality</label><br></br>
        <select id="negara" name="negara">
            <option value="Indonesia">Indonesia</option>
            <option value="Amerika">Amerika</option>
            <option value="Inggris">Inggris</option>
        </select><br></br>

        <label>Language Spoken</label><br></br>
        <input type="checkbox" id="buatbox1" name="buatbox" value="Indonesia">
        <label for="buatbox">Bahasa Indonesia</label><br>
        <input type="checkbox" id="buatbox2" name="buatbox" value="English">
        <label for="buatbox">English</label><br>
        <input type="checkbox" id="buatbox3" name="buatbox" value="Other">
        <label for="buatbox">Other</label><br></br>

         <p>Bio</p>
         <textarea name="massage" rows="10" cols="35"></textarea><br>
         <input type="submit" value="Sign Up">
        </form>    
    </body>