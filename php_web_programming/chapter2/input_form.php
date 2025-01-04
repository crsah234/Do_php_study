<html>
    <head>
        <meta charset="utf-8">
    </head>
<body>
    <form name="multi_input" method="post" action="form.php">
        Name : <input type="text" name="name"><br>
        Password : <input type="text" name="password"><br>
        SEX : <input type="radio" name="sex" value="male">Male
        <input type="radio" name="sex" value="female">Female <br>

<!--        Select , option-->
        Major : <select name="major" size="1">
            <option> Computer1 </option>
            <option> Computer2 </option>
            <option> Computer3 </option>
            <option> Computer4 </option>
            <option> Computer5 </option>
            <option> Computer6 </option>
            <option> Computer7 </option>
            <option> Computer8 </option>
        </select>
        <br>
        Programming Language :
        <input type="checkbox" name="lang" value="Python">Python
        <input type="checkbox" name="lang" value="C">C
        <input type="checkbox" name="lang" value="Java">Java
        <input type="checkbox" name="lang" value="Javascript">Javascript
        <br>
        Story :
        <textarea name="comment" rows="5" cols="45"></textarea><br>
        <input type="submit" value="SUBMIT">
        <input type="reset" value="RESET">
    </form>

</body>

</html>
