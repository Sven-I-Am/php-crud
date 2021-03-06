<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="classes">
        <div id="editClasses">
            <form method="POST" action="index.php?page=classEdit&id=<?php echo $oneClass[0]["ID"]; ?>">
                <label>Class ID</label>
                <input type="text" name="classId" value="<?php echo $oneClass[0]["ID"] ?>" disabled>
                <label>Class Name</label>
                <input type="text" name="className" value="<?php echo $oneClass[0]["Name"] ?>" placeholder="Enter student's name" required>
                <label>Location</label>
                <input type="text" name="location" value="<?php echo $oneClass[0]["Location"] ?>" placeholder="Enter student's name" required>
                <label>Teacher Name</label>
                <select class="teacherName" name="teacherName">
                        <?php 
                        foreach ($allTeachers as $teacher) { ?>
                            <option value="<?php echo $teacher["ID"]; ?>"><?php echo $teacher["Name"]; ?></option>
                        <?php } ?>
                    </select>
                <input type="submit" class="button-Link addBtn" value="Save"></input>
                <a class="button-Link deleteBtn" href="index.php?page=deleteClass&id=<?php echo $oneClass[0]["ID"]; ?>">Delete</a>
            </form>
        </div>
    </section>
<?php require 'includes/footer.php' ?>