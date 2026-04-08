<link rel="stylesheet" href="style.css">

<div class="container">
<h2>✏ Update Student</h2>

<form method="post">
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
    <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>
    <input type="submit" name="update" value="Update">
</form>
</div>