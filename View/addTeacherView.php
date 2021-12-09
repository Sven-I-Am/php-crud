<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="teachers">
        <div id="addTeacher">
            <div>
                <form method="POST" action="index.php?page=teacherAdd">
                    <label>Teacher Name</label>
                    <input type="text" name="teacherName" value="" placeholder="Enter teacher's name" required>
                    <label>Teacher Email</label>
                    <input type="email" name="teacherEmail" value="" placeholder="Enter teacher's Email" required>
                    <input type="submit" class="button-Link addBtn" name="saveTeacher" id="" value="Save new teacher">
                </form>
            </div>
        </div>
    </section>
<?php require 'includes/footer.php' ?>