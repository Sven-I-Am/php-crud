<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="classes">
        <div id="showClasses">
            <h3>Classes overview</h3>
        </div>
        <div class="button-div">
            <a class="button-Link addBtn" href="index.php?page=addStudent">Add a class</a>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Teacher</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach ($classes as $eachClass){ ?>
                <tr>
                    <td><?php echo $eachClass["Name"]; ?></td>
                    <td><?php echo $eachClass["Location"]; ?></td>
                    <td><?php echo $eachClass["TeacherName"]; ?></td>
                    <td class="button-cell">
                        <a class="button-Link viewBtn" href="index.php?page=viewStudent&id=<?php echo $student["ID"]; ?>">View</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link editBtn" href="index.php?page=editStudent&id=<?php echo $student["ID"]; ?>">Edit</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link deleteBtn" href="index.php?page=deleteStudent&id=<?php echo $student["ID"]; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
    </section>
<?php require 'includes/footer.php' ?>