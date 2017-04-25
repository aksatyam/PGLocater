<?php

if (isset($_POST['category']))
{
    $category = $_POST['category'];
    echo "$category";
}
?>
<html>
<body>
<form method="post" action="" name="form">  
 <select name="category">
    <option value="1">Adventure</option>
    <option value="2">Drama</option>
 </select>
 <input name="submit" type="submit">
</form>
</body>
</html>