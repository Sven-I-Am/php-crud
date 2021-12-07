<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="students">
        <div id="addStudent">
            <div>
                <form method="POST" action="index.php?page=studentAdd">
                    <label>Student Name</label>
                    <input type="text" name="studentName" value="" placeholder="Enter student's name" required>
                    <label>Student Email</label>
                    <input type="email" name="studentEmail" value="" placeholder="Enter student's Email" required>
                    <label>Class</label>
                    <select class="className" name="studentClass">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="submit" class="button-Link addBtn" name="saveStudent" id="" value="Save new student">
                </form>
            </div>
        </div>
    </section>
<?php require 'includes/footer.php' ?>