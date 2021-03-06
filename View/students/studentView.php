<?php require 'View/includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section id="students">
    <div id="showStudents">
        <h3>Student overview</h3>
        <div class="button-div">
            <a class="button-Link addBtn" href="index.php?page=addStudent">Add a student</a>
        </div>
        <form id="studentFilter" method="POST" action="index.php?page=students">
            <div>
            <label for="filterClass">Show only students in class:</label>
            <select class="filterClass" name="filterClass" id="filterClass">
                <?php
                foreach ($classes as $class) {?>
                    <option value="<?php echo $class["ID"]; ?>"><?php echo $class["Name"]; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="studentFilterButtons">
            <input type="submit" class="button-Link addBtn" value="Show results">
            </div>
            <div class="studentFilterButtons">
            <a href="index.php?page=students"class="button-Link deleteBtn">Remove filters</a>
            </div>
        </form>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Teacher</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach ($students as $student){ ?>
                <tr>
                    <td><?php echo $student["Name"]; ?></td>
                    <td><?php echo $student["Email"]; ?></td>
                    <td><a class="table-Link" href="index.php?page=viewClass&id=<?php echo $student["Class"]; ?>"><?php echo $student["ClassName"]; ?></a></td>
                    <td><a class="table-Link" href="index.php?page=viewTeacher&id=<?php echo $student["Teacher"][0]["ID"]; ?>"><?php echo $student["Teacher"][0]["Name"]; ?></a></td>
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
<?php require 'View/includes/footer.php' ?>