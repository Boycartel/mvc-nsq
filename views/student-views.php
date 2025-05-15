<!DOCTYPE html>
<html>
<head>
    <title>Student Registry</title>
</head>
<body>
    <h1>Student Registry</h1>

    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>

    <form action="/store" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="matric_no" placeholder="Matric No." required>
        <button type="submit">Add Student</button>
    </form>

    <hr>

    <h2>All Students</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Matric No.</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <form action="/update/<?= $student['id'] ?>" method="POST">
                <td><input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required></td>
                <td><input type="text" name="matric_no" value="<?= htmlspecialchars($student['matric_no']) ?>" required></td>
                <td>
                    <button type="submit">Update</button>
            </form>
            <form action="/delete/<?= $student['id'] ?>" method="POST" style="display:inline;">
                <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
            </form>
                </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
