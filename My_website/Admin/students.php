<?php
include('./adminheader.php');
?>
<?php
$conn = new mysqli('localhost', 'root', '', 'lms_db');
?>

<div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">List of Students</p>
    <?php
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
    
    ?>
        <table class="table">   
        <thead>
            <tr>
            <th scope="col">Student NAME</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
       <?php while($row = $result->fetch_assoc()){
        echo '<tr>';
           echo '<th scope="row">'.$row['Stu_Name'].'</th>';
            echo '<td>'.$row['address'].'</td>';
            echo '<td>'.$row['Stu_email'].'</td>';
            echo '<td>';
             echo' <button
                type="submit"
                class="btn btn-info mr-3"
                name="view"
                value="View"
                >
                <i class="fa fa-pen">Edit</i>

            </button>
                <button
                type="submit"
                class="btn btn-secondary"
                name="delete"
                value="Delete"
                >
                <i class="far fa-trash-alt"> Delete</i>
                </button>
            </td>
        </tr>';
         } ?>
    </tbody>
</table>
    <?php } else{
        echo "0 Result";
    }?>
</div>
</div>
    <!-- div Row close from header -->
