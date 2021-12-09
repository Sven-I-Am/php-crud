<?php require 'includes/header.php'?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="teachers">
        <div id="showteachers">
            <h3>Teacher overview</h3>
            <div class="button-div">
                <a class="button-Link addBtn" href="index.php?page=addTeacher">Add a teacher</a>
            </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                foreach ($teachers as $teacher){ ?>
                    <tr>
                        <td><?php echo $teacher["ID"]; ?></td>
                        <td><a class="table-Link" href="index.php?page=viewTeacher&id=<?php echo $teacher["ID"]; ?>"><?php echo $teacher["Name"]; ?></a></td>
                        <td><?php echo $teacher["Email"]; ?></td>
                        <td class="button-cell">
                            <a class="button-Link viewBtn" href="index.php?page=viewClass&id=<?php echo $teacher["ID"]; ?>">View</a>
                        </td>
                        <td class="button-cell">
                            <?php if($teacher["ID"] != 1){ ?>
                                <a class="button-Link editBtn" href="index.php?page=editTeacher&id=<?php echo $teacher["ID"]; ?>">Edit</a>
                            <?php } ?>
                        </td>
                        <td class="button-cell">
                            <?php if($teacher["ID"] != 1){ ?>
                                <a class="button-Link deleteBtn" href="index.php?page=deleteTeacher&id=<?php echo $teacher["ID"]; ?>">Delete</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
<?php require 'includes/footer.php' ?>