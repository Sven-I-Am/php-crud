<?php require 'View/includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="students">
        <div id="editStudent">
            <form method="POST" action="index.php?page=studentEdit&id=<?php echo $student[0]["ID"]; ?>">
                <label for="studentId">Student ID</label>
                <input type="text" name="studentId" id="studentId" value="<?php echo $student[0]["ID"] ?>" disabled>
                <label for="studentName">Student Name</label>
                <input type="text" name="studentName" id="studentName" value="<?php echo $student[0]["Name"] ?>" placeholder="Enter student's name" required>
                <label for="studentEmail">Student Email</label>
                <input type="email" name="studentEmail" id="studentEmail" value="<?php echo $student[0]["Email"] ?>" placeholder="Enter student's Email" required>
                <label for="studentClass">Class</label>
                <select class="className" name="studentClass" id="studentClass">
                    <?php
                    foreach ($classes as $class) {?>
                        <option value="<?php echo $class["ID"]; ?>"><?php echo $class["Name"]; ?></option>
                    <?php } ?>

                </select>
                <input type="submit" class="button-Link addBtn" value="Save">
                <a class="button-Link deleteBtn" href="index.php?page=deleteStudent&id=<?php echo $student[0]["ID"]; ?>">Delete</a>
            </form>
        </div>
    </section>
<?php require 'View/includes/footer.php' ?>