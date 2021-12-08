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
                <select class="teacherName" id="teacherName" name="teacherName">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                </select>
                <input type="submit" class="button-Link addBtn" value="Save"></input>
                <a class="button-Link deleteBtn" href="index.php?page=deleteClass&id=<?php echo $oneClass[0]["ID"]; ?>">Delete</a>
            </form>
        </div>
    </section>
<?php require 'includes/footer.php' ?>