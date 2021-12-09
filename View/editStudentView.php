<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="students">
        <div id="editStudent">
            <form method="POST" action="index.php?page=studentEdit&id=<?php echo $student[0]["ID"]; ?>">
                <label>Student ID</label>
                <input type="text" name="studentId" value="<?php echo $student[0]["ID"] ?>" disabled>
                <label>Student Name</label>
                <input type="text" name="studentName" value="<?php echo $student[0]["Name"] ?>" placeholder="Enter student's name" required>
                <label>Student Email</label>
                <input type="email" name="studentEmail" value="<?php echo $student[0]["Email"] ?>" placeholder="Enter student's Email" required>
                <label>Class</label>
                <select class="className" name="studentClass">
                    <?php
                    foreach ($classes as $class) {?>
                        <option value="<?php echo $class["ID"]; ?>"><?php echo $class["Name"]; ?></option>
                    <?php } ?>

                </select>
                <input type="submit" class="button-Link addBtn" value="Save"></input>
                <a class="button-Link deleteBtn" href="index.php?page=deleteStudent&id=<?php echo $student[0]["ID"]; ?>">Delete</a>
            </form>
        </div>
    </section>
<?php require 'includes/footer.php' ?>