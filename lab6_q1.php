<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <h1>My Details</h1>
</head>
<body>
    <?php
        $name = "NOR ZULAIKHA BINTI ALIAS";
        $matricNumber = "AI220205";
        $course = "BIT";
        $yearOfStudy = "2";
        $address = "BESUT, TERENGGANU";
    ?>

 <table border='2'>
    <tr>
        <td>Name:</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number:</td>
        <td><?php echo "$matricNumber"; ?></td>
    </tr>
    <tr>
        <td>Course:</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year of Study:</td>
        <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>