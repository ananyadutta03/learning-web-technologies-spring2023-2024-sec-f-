<html>
<head>
    <title>Lab-2-8</title>
</head>
<body>
<form method="post" action="../Controller/Details1check.php" enctype="">
    <table style="height: 400px;"align="center" border="1" cellspacing="0">
        <tr>
            
            <th colspan="3"><h2>PERSONAL PROFILE</h2></th>
        </tr>
        <tr><td><label for="firstName">First Name:</label><br></td>
            <td><input type="text" id="firstName" name="firstName"><br></td>
            <td style="width: 15px;"></td>
        </tr>
        <tr><td><label for="lastName">Last Name:</label><br></td>
            <td><input type="text" id="lastName" name="lastName"><br></td>
            <td style="width: 15px;"></td>
        </tr>
        <tr>
            <td><label for="email">EmailID:</label><br></td>
            <td><input type="text" id="email" name="email"><br></td>
            <td style="width: 10px;"></td>
        </tr>
        <tr> 
            <td>Gender</td>
            <td><input type="radio" name="gender" value="" />Male
                <input type="radio" name="gender" value="" />Female
                <input type="radio" name="gender" value="" />Other </td>
                <td style="width: 15px;"></td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birth:</label><br></td>
           <td> <select id="dobDay" name="dobDay">
            <option value="">Day</option>
            <?php for($i = 1; $i <= 31; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <select id="dobMonth" name="dobMonth">
            <option value="">Month</option>
            <?php for($i = 1; $i <= 12; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <select id="dobYear" name="dobYear">
            <option value="">Year</option>
            <?php for($i = 2016; $i >= 1900; $i--): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select><br></td>
        <td style="width: 15px;"></td>
        </tr>
        <tr><td><label for="phone">Phone:</label><br></td>
            <td><input type="text" id="phone" name="phone"><br></td>
            <td style="width: 15px;"></td>
        </tr>
        <tr><td><label for="password">Password:</label><br></td>
            <td><input type="password" id="password" name="password"><br></td>
            <td style="width: 15px;"></td>
        </tr>
        <tr><td><label for="confirmPassword">Confirm Password:</label><br></td>
            <td><input type="password" id="confirmPassword" name="confirmPassword"><br></td>
            <td style="width: 15px;"></td>
        </tr>
        <tr><td colspan="3" align="right"><input type="submit" name="submit" value="Submit"/><input type="reset" name="reset" value="Reset" /></td></tr>
    </table>
</form>
</body>
</html>