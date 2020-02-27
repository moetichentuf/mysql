<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php
?>
<form method="post">
    <label>first name:</label><br>
    <input type="text" id="first-name" name="first-name" placeholder="first name" required><br>
    <label>last name:</label><br>
    <input type="text" id="last-name" name="last-name" placeholder="last title" required><br>
    <label>user name:</label><br>
    <input type="text" id="user-name" name="user-name" placeholder="user title" required><br>
    <label>linkedin:</label><br>
    <input type="text" id="linkedin" name="linkedin" placeholder="linkedin " required><br>
    <label>github:</label><br>
    <input type="text" id="github" name="github" placeholder="github " required><br>
    <label>email:</label><br>
    <input type="text" id="email" name="email" placeholder="email " required><br>
    <label>avatar:</label><br>
    <input type="text" id="avatar" name="avatar" placeholder="avatar "  required><br>
    <label>video:</label><br>
    <input type="text" id="video" name="video" placeholder="video " required><br>
    <label>quote:</label><br>
    <input type="text" id="quote" name="quote" placeholder="quote "required><br>
    <label>quote author:</label><br>
    <input type="text" id="quote-author" name="quote-author" placeholder="quote author " required><br>
    <label>preferred language:</label><br>
    <input type="text" id="preferred-language" name="preferred-language" placeholder="preferred language " required><br>
    <br>

    <button value="Submit" name="add"> ADD</button>
</form>

<table style="width:100%" border="1px">
    <tr>
        <h2>Student record</h2>
    </tr>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Preferred language</th>
        <th>Personal page</th>
    </tr>
    <?php
    $conn = new Connection;
    $erick= $conn->openConnection();
    $fetch = $erick->query('SELECT id, firstName, lastName, email, preferred_language FROM student_table')->fetchAll();

    forEach ($fetch as $row) {
        echo '<tr>';
        echo '<td>'. $row['id'] .'</td>';
        echo '<td>'. $row['firstName'] .'</td>';
        echo '<td>'. $row['lastName'] .'</td>';
        echo '<td>'. $row['email'] .'</td>';
        echo '<td>'. $row['preferred_language'] .'</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>