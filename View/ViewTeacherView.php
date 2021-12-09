<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="teachers">
        <div id="teacherDetail">
            <h3>Teacher detail</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td><?php echo $teacher[0]["ID"]; ?></td>
                    <td><?php echo $teacher[0]["Name"]; ?></td>
                    <td><?php echo $teacher[0]["Email"]; ?></td>
                    <td class="button-cell">
                        <a class="button-Link editBtn" href="index.php?page=editTeacher&id=<?php echo $teacher[0]["ID"]; ?>">Edit</a>
                    </td>
                    <td class="button-cell">
                        <a class="button-Link deleteBtn" href="index.php?page=deleteTeacher&id=<?php echo $teacher[0]["ID"]; ?>">Delete</a>
                    </td>
                </tr>
            </table>
<!--            <h4>List of Students</h4>-->
<!--            --><?php
//            if(count($teacher[0]["StudentName"])>0){
//                ?>
<!---->
<!--                <table>-->
<!--                    <tr>-->
<!--                        <th>ID</th>-->
<!--                        <th>Name</th>-->
<!--                    </tr>-->
<!--                    --><?php
//                    foreach ($oneClass[0]["StudentName"] as $student){ ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo $student["ID"] ; ?><!--</td>-->
<!--                            <td>--><?php //echo $student["Name"] ; ?><!--</td>-->
<!--                        </tr>-->
<!--                    --><?php //} ?>
<!--                </table>-->
<!--            --><?php //} ?>
        </div>
    </section>
<?php require 'includes/footer.php' ?>
