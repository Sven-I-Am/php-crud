<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="teachers">
        <div id="teacherDetail">
            <h3>Teacher detail</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php echo $teacher[0]["ID"]; ?></td>
                    <td><?php echo $teacher[0]["Name"]; ?></td>
                    <td><?php echo $teacher[0]["Email"]; ?></td>
                    <td class="button-cell">
                        <a class="button-Link editBtn" href="index.php?page=editTeacher&id=<?php echo $teacher[0]["ID"]; ?>">Edit</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link deleteBtn" href="index.php?page=deleteTeacher&id=<?php echo $teacher[0]["ID"]; ?>">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
<?php require 'includes/footer.php' ?>
