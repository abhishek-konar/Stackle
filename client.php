<?php include ("./admin.php");?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<div class="p-5" >
    <table id="example" class="table table-striped bg-light " style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>User Id</th>
                <th>Account Type</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php
                $c=mysqli_connect('localhost', 'root', '', 'abhishek');
                $q="SELECT * FROM user WHERE ac_type='User' OR ac_type='Seller'";
                $res=mysqli_query($c, $q);
                while($row=mysqli_fetch_assoc($res))
                {
                    $name=$row['name'];
                    $email=$row['email'];
                    $ac_type=$row['ac_type'];
                    echo 
                    "<tr>
                        <td>". $name. "</td>
                        <td>". $email. "</td>
                        <td>". $ac_type. "</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>


<script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>