<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>🎓 Student Management System</h2>

<form action="insert.php" method="post">
    <input type="text" name="name" placeholder="Enter Name" required>
    <input type="text" name="email" placeholder="Enter Email" required>
    <input type="text" name="course" placeholder="Enter Course" required>
    <br><br>
    <input type="submit" value="Add Student">
</form>

<hr>

<h2>📋 Student Records</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['course']; ?></td>
    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

<hr>

<h2>🔍 Search Student</h2>

<form action="search.php" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <input type="submit" value="Search">
</form>

</div>

</body>
</html>