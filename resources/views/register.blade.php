<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sign Up</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form name="sign_up_form" action="/welcome" method="POST">
            @csrf
            <p>First name:</p>
                <input type="text" name = "namadepan">
            <p>Last name:</p>
                <input type="text" name = "namabelakang">
            <p>Gender:</p>
                <input type="radio" name = "gender" value="0"> Male <br>
                <input type="radio" name = "gender" value="1"> Female <br>
                <input type="radio" name = "gender" value="2"> Other
            <p>Nationality:</p>
            <select>
                <option value="ind">Indonesia</option>
                <option value="sin">Singapura</option>
                <option value="mal">Malaysia</option>
                <option value="aus">Australia</option>
            </select>
            <p>Language Speaker:</p>
            <input type="checkbox" name="language" value="0"> Bahasa Indonesia <br>
            <input type="checkbox" name="language" value="1"> English <br>
            <input type="checkbox" name="language" value="2"> Other
            <p>Bio:</p>
            <textarea cols="30" rows="7"></textarea> <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>