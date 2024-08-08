<?php

if(isset($_POST['insert']))
{
    $nm=$_POST['yourname'];
    $dep=$_POST['youremail'];
    $add=$_POST['subject'];
    $mes=$_POST['message'];

    $con=mysqli_connect("localhost","root","","contactus");
    if($con)
    {
        $q="insert into cnt (yourname,youremail,subject,message)values('$nm','$dep','$add',$mes)";
        $b1=mysqli_query($con,$q);
        if($b1)
        {
            echo "Data inserted";
        }
        else
        {
            echo mysqli_error($con);
        }
    }
    else
    {
            echo "connection error";
    }

}
?>