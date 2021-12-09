<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section id="classes">
        <div id="classDetail">
            <h3>Class detail</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Teacher</th>
                    <?php if($oneClass[0]["ID"] != 1) { ?>
                        <th>Edit</th>
                        <th>Delete</th>
                    <?php } ?> 
                </tr>
                <tr>
                    <td><?php echo $oneClass[0]["Name"]; ?></td>
                    <td><?php echo $oneClass[0]["Location"]; ?></td>
                    <td><?php echo $oneClass[0]["TeacherName"]; ?></td>
                    <?php if($oneClass[0]["ID"] != 1) { ?>
                        <td class="button-cell">
                            <a class="button-Link editBtn" href="index.php?page=editClass&id=<?php echo $oneClass[0]["ID"]; ?>">Edit</a>
                        </td>
                        <td class="button-cell">
                            <a class="button-Link deleteBtn" href="index.php?page=deleteClass&id=<?php echo $oneClass[0]["ID"]; ?>">Delete</a>
                        </td>
                    <?php } ?>
                </tr>
            </table>

            <h4>List of Students</h4>
            <?php 
            if(count($oneClass[0]["StudentName"])>0){
                ?>
            
           <table>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                  </tr>
                   <?php
                   foreach ($oneClass[0]["StudentName"] as $student){ ?>
                    <tr>
                        <td><?php echo $student["ID"] ; ?></td>
                        <td><?php echo $student["Name"] ; ?></td>
                    </tr>
                    <?php } ?>
           </table>
           <?php } ?>
        </div>
    </section>
<?php require 'includes/footer.php' ?>