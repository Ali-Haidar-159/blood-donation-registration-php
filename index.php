<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form of a Donor</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-bg"></div>
    <div class="wrapper">
        <form  action="submit.php" method="POST">
            <h2>Registration Form of a Donor</h2>
            <div class="columns">
                <!-- Left column -->
                <div class="column left">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required maxlength="25">
                    </div>
                    <div class="form-group">
                        <label for="nid">NID:</label>
                        <input type="text" name="nid" id="nid" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="gender" value="Male" required> Male</label>
                            <label><input type="radio" name="gender" value="Female"> Female</label>
                            <label><input type="radio" name="gender" value="Other"> Other</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="text" name="contact" id="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea name="address" id="address" required maxlength="150"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="blood_type">Blood Type:</label>
                        <select name="blood_type" id="blood_type" required>
                            <option value="">Select one</option>
                            <option>A+</option><option>A-</option>
                            <option>B+</option><option>B-</option>
                            <option>AB+</option><option>AB-</option>
                            <option>O+</option><option>O-</option>
                        </select>
                    </div>
                    <div class="form-group double">
                        <div>
                            <label for="height">Height:</label>
                            <input type="number" name="height" id="height" min="100" max="250" required placeholder="cm">
                        </div>
                        <div>
                            <label for="weight">Weight:</label>
                            <input type="number" name="weight" id="weight" min="30" max="200" required placeholder="kg">
                        </div>
                    </div>
                </div>
                <!-- Right column -->
                <div class="column right">
                    <div class="form-group">
                        <label>Donated Blood before?:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="donated_before" value="Yes" required> Yes</label>
                            <label><input type="radio" name="donated_before" value="No"> No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="allergy">Allergy Details:</label>
                        <textarea name="allergy_details" id="allergy" maxlength="150" placeholder="I have no allergy issue."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="disease">Serious Disease History:</label>
                        <textarea name="disease_history" id="disease" maxlength="150" placeholder="HbsAg/Hcv/HIV/Hepatitis/Covid"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Has anemia?:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="anemia" value="Yes" required> Yes</label>
                            <label><input type="radio" name="anemia" value="No"> No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cardiac Patient?:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="cardiac" value="Yes" required> Yes</label>
                            <label><input type="radio" name="cardiac" value="No"> No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Under Medication?:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="medication" value="Yes" required> Yes</label>
                            <label><input type="radio" name="medication" value="No"> No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <div class="input-icon">
                            <input type="password" name="password" id="password" required minlength="8" maxlength="20">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <div class="input-icon">
                            <input type="password" name="confirm_password" id="confirm_password" required minlength="8" maxlength="20" onpaste="return false;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-row">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    
</html>