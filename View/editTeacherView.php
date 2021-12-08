<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="teachers">

        <div id="editTeacher">
            <form method="POST" action="index.php?page=editTeacher&id=<?php echo $teacher[0]["ID"]; ?>">
                <label>Teacher ID</label>
                <input type="text" name="teacherId" value="<?php echo $teacher[0]["ID"] ?>" disabled>
                <label>Teacher Name</label>
                <input type="text" name="teacherName" value="<?php echo $teacher[0]["Name"] ?>" placeholder="Enter teacher's name" required>
                <label>Student Email</label>
                <input type="email" name="teacherEmail" value="<?php echo $teacher[0]["Email"] ?>" placeholder="Enter teacher's Email" required>
                <input type="submit" class="button-Link addBtn" value="Save"></input>
                <a class="button-Link deleteBtn" href="index.php?page=deleteTeacher&id=<?php echo $teacher[0]["ID"]; ?>">Delete</a>
            </form>
        </div>
    </section>
<?php require 'includes/footer.php' ?><?php
