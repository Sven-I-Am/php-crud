<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <h3>Student overview</h3>
    <p><a href="index.php?page=info">Back to Homepage</a></p>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href=""></a></td>
                <td>
                    <form method="" action="">
                        <button type="submit" id="edit" name="edit" value="edit" class="btn btn-primary">Edit</button>
                    </form>
                </td>
                <td>
                    <form method="" action="">
                        <button type="submit" id="delete" name="delete" value="delete" class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        <div class="new">
            <form method="">
                <label>Student Name</label>
                <input type="text" name="studentName" id="sName" value="" placeholder="Enter student's name">
                <label>Student Email</label>
                <input type="text" name="studentEmail" id="sEmail" value="" placeholder="Enter student's Email">
                <label>Class</label>
                <select class="className" id="className">
                    <option></option>
                </select>
            </form>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="add" id="add" value="">Add a new student</button>
        </div>
</section>
<?php require 'includes/footer.php'?>