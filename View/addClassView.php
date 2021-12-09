<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="classes">
        <div id="addClass">
            <div>
                <form method="POST" action="index.php?page=classAdd">
                    <label>Class Name</label>
                    <input type="text" name="className" value="" placeholder="Enter class' name" required>
                    <label>Location</label>
                    <input type="text" name="loction" value="" placeholder="Enter Location" required>
                    <label>Teacher</label>
                    <select class="teacherName" name="teacherName">
                        <?php 
                        foreach ($allTeachers as $teacher) { ?>
                            <option value="<?php echo $teacher["ID"]; ?>"><?php echo $teacher["Name"]; ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" class="button-Link addBtn" name="saveClass" id="" value="Save new class">
                </form>
            </div>
        </div>
    </section>
        

<?php require 'includes/footer.php' ?>