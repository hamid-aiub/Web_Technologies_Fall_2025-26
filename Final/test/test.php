
<?php

$courseName = "Web Technologies";
$section = "D";
$cars =array("Volvo","BMW","Toyota");
// var_dump($cars);
$len = count($cars);
echo "length of the array is $len </br>";
for ($i = 0; $i < $len; $i++) {
    echo "Index: $i, Value: $cars[$i] </br>";
}
?>


<html>

<h1>Hello World</h1>
<?php echo"This is $courseName course(Section:$section)";?>

<form >
    <table>
        <tr>
            <td>
                <label>Name</label>
            </td>
            <td>    <input type="text" id="name"/></td>
        </tr>
        <tr>
            <td>Select Dept</td>
            <td><select>
            <option>CSE</option>
            <option>DS</option>
            <option>CNCS</option>
            </select></td>
        </tr>
    </table>
</form>
<html>