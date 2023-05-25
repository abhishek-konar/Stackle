<?php include ('./server.php'); ?>

<div class="wrapper">
    <div class="header">Your Address</div>
    <div class="cards_wrap">
            <div class="card_item">
                <div class="card_inner">
                    <div class="medium"></div>
                    <div class="film"></div>
                    <div class="film"></div>
                    <div class="film"> Land mark:</div>
                    <div class="film">Phone number</div>
                </div>
            </div>

<!--All address Details-->
        <?php
        error_reporting(0);
        session_start();
        $email=$_SESSION['em'];
        $c=mysqli_connect('localhost', 'root', '', 'abhishek');
        $q="SELECT * FROM address WHERE email='$email'";
        $res=mysqli_query($c, $q);

        while($row=mysqli_fetch_assoc($res)){
        $name=$row['name'];
        $phone=$row['phone'];
        $pin=$row['pin'];
        $area=$row['area'];
        $city=$row['city'];
        $land=$row['land'];
        $state=$row['state'];
        $phone=$row['phone'];
        echo "<div class='card_item'>".
                "<div class='card_inner'>".
                    "<div class='medium'>" .$name. "</div>
                    <div class='film'>".$area. ", </div>
                    <div class='film'>".$city. ", ". $state. " " .$pin. "</div>
                    <div class='film'> Land mark: ".$land. "</div>
                    <div class='film'>Phone number: ". $phone. "</div>
                    <input type='submit' value='Edit'>
                    <input type='submit' value='Delete'>
                </div>
            </div>";
}
?>

    </div>
</div>
