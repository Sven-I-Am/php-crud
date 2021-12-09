<?php require 'View/includes/header.php' ?>
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
                    <th>Teacher</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php echo $student[0]["Name"]; ?></td>
                    <td><?php echo $student[0]["Email"]; ?></td>
                    <td><a class="table-Link" href="index.php?page=viewClass&id=<?php echo $student[0]["Class"]; ?>"><?php echo $student[0]["ClassName"]; ?></a></td>
                    <td><a class="table-Link" href="index.php?page=viewTeacher&id=<?php echo $student[0]["Teacher"][0]["ID"]; ?>"><?php echo $student[0]["Teacher"][0]["Name"]; ?></td>
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
<?php require 'View/includes/footer.php' ?>