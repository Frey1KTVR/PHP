
<h1> method GET</h1>
<form name="form1" method="GET" action="">
    <table border="1" >
        <tbody>
            <tr>
                <td>Your name</td>
                <td><input type="text" name="user_name" value="" /></td>
            </tr>
            <tr>
                <td>Your year</td>
                <td><input type="text" name="user_year" value="" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="send data" name="send" /></td>
            </tr>
        </tbody>
    </table>

</form>


<?php

if($_GET['send']){

//method GET from1
$user_name=$_GET['user_name'];
$user_year=$_GET['user_year'];
if($user_year!="" && is_numeric($user_year))
{
    $age=date('Y')-$user_year;
}
else{
    $age="no data";
}
echo "<h2>results</h2>";
echo $user_name;
echo '<br>'.$age;
}

?>

<h1> method POST</h1>
<form name="form1" method="POST" action="">
    <table border="1" >
        <tbody>
            <tr>
                <td>Your name</td>
                <td><input type="text" name="user" value="<?php echo $_POST['user'];?>" /></td>
            </tr>
            
                <td></td>
                <td><input type="submit" value="send data2" name="send2" /></td>
            </tr>
        </tbody>
    </table>

</form>


<?php

if($_POST['send2']){

//method GET from1
$user=$_POST['user'];
if($user!="" && is_numeric($user_year))
{
    $age=date('Y')-$user_year;
}
else{
    $age="no data";
}
echo "<h2>results</h2>";
echo $user;

}

?>