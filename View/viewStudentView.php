<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="students">
        <div id="studentDetail">
            <h3>Student detail</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php echo $student[0]["Name"]; ?></td>
                    <td><?php echo $student[0]["Email"]; ?></td>
                    <td><?php echo $student[0]["ClassName"]; ?></td>
                    <td class="button-cell">
                        <a class="button-Link editBtn" href="index.php?page=editStudent&id=<?php echo $student[0]["ID"]; ?>">Edit</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link deleteBtn" href="index.php?page=deleteStudent&id=<?php echo $student[0]["ID"]; ?>">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
<?php require 'includes/footer.php' ?>