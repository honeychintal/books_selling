<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'dbconnect.php';
    $err1=false;
    $err2=false;
    $err3=false;
    session_start();
    $username = $_SESSION['uid'];
    $bookname = $_POST["booknam"];
    $isbn = $_POST["poisbn"];
    $auth = $_POST["authname"];
    $ogpirce = $_POST["ogpric"];
    $exprice = $_POST["expric"];
    $description = $_POST["describe"];
    $gener1 = $_POST["genr1"];
    $gener2 = $_POST["genr2"];
    $gener3 = $_POST["genr3"];
    $gener4 = $_POST["genr4"];

    $imgname1 = $_FILES["bookpic1"]["name"];
    $imgerr1 = $_FILES["bookpic1"]["error"];
    $imgtemp1 = $_FILES["bookpic1"]["tmp_name"];
    $imgtype1 = $_FILES["bookpic1"]["type"];
    $imgext1 = explode('.',$imgname1);
    $imgactualext1= strtolower(end($imgext1));
 
    $imgname2 = $_FILES["bookpic2"]["name"];
    $imgerr2 = $_FILES["bookpic2"]["error"];
    $imgtemp2 = $_FILES["bookpic2"]["tmp_name"];
    $imgtype2 = $_FILES["bookpic2"]["type"];
    $imgext2 = explode('.',$imgname2);
    $imgactualext2= strtolower(end($imgext2));

    $imgname3 = $_FILES["bookpic3"]["name"];
    $imgerr3 = $_FILES["bookpic3"]["error"];
    $imgtemp3 = $_FILES["bookpic3"]["tmp_name"];
    $imgtype3 = $_FILES["bookpic3"]["type"];
    $imgext3 = explode('.',$imgname3);
    $imgactualext3= strtolower(end($imgext3));
    
    $allowed = array('jpg','jpeg','png');
    
    if(in_array($imgactualext1,$allowed))
    {
        #code
        if($imgerr1===0)
        {
            $img_new1= uniqid('',true).".".$imgactualext1;
            $filedestination1='../uploads/'.$img_new1;
        }
        else
        {
            $err1=true;
            $errmessg1="your input file encounter error file 1"; 
        }
    }
    else
    {
        $err1=true;
        $errmessg1="you cannot input file of this extension file 1";
    }

#for image 2
    if(in_array($imgactualext2,$allowed))
    {
        #code
        if($imgerr2===0)
        {
            $img_new2= uniqid('',true).".".$imgactualext2;
            $filedestination2='../uploads/'.$img_new2;
        }
        else
        {
            $err2=true;
            $errmessg2="your input file encounter error file 2"; 
        }
    }
    else
    {
        $err2=true;
        $errmessg2="you cannot input file of this extension file 2";
    }

#for image 3
if(in_array($imgactualext3,$allowed))
    {
        #code
        if($imgerr3===0)
        {
            $img_new3= uniqid('',true).".".$imgactualext3;
            $filedestination3='../uploads/'.$img_new3;
        }
        else
        {
            $err3=true;
            $errmessg3="your input file encounter error file 3"; 
        }
    }
    else
    {
        $err3=true;
        $errmessg3="you cannot input file of this extension file 3";
    }
if($err1==true)
{
    #code1
    header("Location: ../makepost.php?postsucess=false&poerror=$errmessg1");
}
else
{
    if($err2==true)
    {
        #code2
        header("Location: ../makepost.php?postsucess=false&poerror=$errmessg2");
    }
    else
    {
        if($err3==true)
        {
            #code3
            header("Location: ../makepost.php?postsucess=false&poerror=$errmessg3");
        }
        else
        {
            move_uploaded_file($imgtemp1,$filedestination1);
            move_uploaded_file($imgtemp2,$filedestination2);
            move_uploaded_file($imgtemp3,$filedestination3);

            $sql="INSERT INTO `postbook` (`b_name`, `b_isbn`, `b_auth`, `og_pr`, `ex_pr`, `descript`, `pic1`, `pic2`, `pic3`, `genr1`, `genr2`, `genr3`, `genr4`, `used`, `display`, `usenam`) VALUES('$bookname', '$isbn', '$auth', '$ogpirce', '$exprice', '$description', '$filedestination1', '$filedestination2', '$filedestination3', '$gener1', '$gener2', '$gener3', '$gener4', 'N', 'Y', '$username')";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                header("Location: ../index.php?postpsuccess=true");
                exit();
            }
            else
            {
                header("Location: ../index.php?postpsuccess=false");  
            }
        }
    }
}
    
}
?>