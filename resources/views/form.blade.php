<!DOCTYPE html>
<html>
    <head>
        <body>
            <h1>Buat Account Baru</h1>
            <h3>Sign Up Form</h3>
            <p>First name:</p>
            <p>
            <form action='/welcome' id='welcome'>
            <input type="text" name="username" placeholder="First name..." />
            </p>
            <p>Last name:</p>
            <p>
                <input type="text" name="username" placeholder="Last name..." />
                </p> 
            <p>Gender</p>
            <p>
                <label><input type="radio" name="Jenis_Kelamin" value="Male" />Male</label>
            </P>
                <label><input type="radio" name="Jenis_Kelamin" value="Female" />Female</label>
            </p>
            <p>Nationality</p>

                <select name="Nationality">
                    <option value="Indonesian">Indonesian</option>
                    <option value="Japan">Japan</option>
                    <option value="Australia">Australia</option>
                </select>      
            <p>Languange Spoken</p>
            <p>
                <label><input type="checkbox" name="Bahasa Indonesia" value="Bahasa Indonesia" />Bahasa Indonesia</label><br>
                 <label><input type="checkbox" name="English" value="English" />English</label><br>
                <label><input type="checkbox" name="Other" value="Other" />Other</label><br>
            <p>Bio</p>
                <textarea name="Bio" rows="10" cols="50"></textarea><br>
                <a href='/welcome' >
                    <input type="submit" name="submit" value="Sign Up" />
                </a>
        </head>    
    <body>
</html>