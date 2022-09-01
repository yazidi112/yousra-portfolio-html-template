<form action="" method="post">
    <textarea name="code" id="" cols="100" rows="20"></textarea>
    <input type="submit" value="ok">
</form>
<?php
if(isset($_POST['code'])){
    $code =  $_POST['code'];
    $code = str_replace("<","&lt;",$code);
    $code = str_replace(">","&gt;",$code);
    echo "<textarea>".$code."</textarea>";
}
