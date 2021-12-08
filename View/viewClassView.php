<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="classes">
        <div id="classDetail">
            <h3>Class detail</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Teacher</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php echo $oneClass[0]["Name"]; ?></td>
                    <td><?php echo $oneClass[0]["Location"]; ?></td>
                    <td><?php echo $oneClass[0]["TeacherName"]; ?></td>
                    <td class="button-cell">
                        <a class="button-Link editBtn" href="index.php?page=editClass&id=<?php echo $oneClass[0]["ID"]; ?>">Edit</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link deleteBtn" href="index.php?page=deleteClass&id=<?php echo $oneClass[0]["ID"]; ?>">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </section>
<?php require 'includes/footer.php' ?>