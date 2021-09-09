<?php 
    if(isset($_POST['register_btn'])){
        echo $regd_username=get_safe_value($con,$_POST['regd_username']);
        echo $regd_email=get_safe_value($con,$_POST['regd_email']);
        echo $regd_password=get_safe_value($con,$_POST['regd_password']);
        echo $regd_password_cnf=get_safe_value($con,$_POST['regd_password_cnf']);
        if($regd_password===$regd_password_cnf){
            // check if user exists already and redirect with status code login instead else register
            $check_user_sql="select * from auth where user_email='$regd_email'";
            $check_user_query=mysqli_query($con,$check_user_sql);
            $check_user=mysqli_num_rows($check_user_query);
            
            if($check_user>0){
                $_SESSION['status']='email already existing login in instead';
                $_SESSION['status_code']='bg-purple-200';
                header('location:'.SITE_PATH.'login');
            }else{
                $_SESSION['status']='please check you email to activate your account';
                $_SESSION['status_code']='bg-yellow-200';

                $register_sql="INSERT into auth(user_email,user_name,user_role,user_status,password) VALUES('$regd_email','$regd_username','6','0','$regd_password');";
                $register_query=mysqli_query($con,$register_sql);
                header('location:'.SITE_PATH.'register');
                die();
            }

        }else{
            $_SESSION['status']='passwords do not match';
            $_SESSION['status_code']='bg-red-300';
            header('location:'.SITE_PATH.'register');
            die();
        }
    }
    
    if(isset($_POST['login_btn'])){
        $login_email=get_safe_value($con,$_POST['login_email']);
        $login_password=get_safe_value($con,$_POST['login_password']);

        $res=mysqli_query($con,"select * from auth where user_email='$login_email' and password='$login_password'");
        $check_user=mysqli_num_rows($res);

        if($check_user>0){
            $row=mysqli_fetch_assoc($res);
            if($row['user_status']==1){
                $_SESSION['USER_LOGIN']='yes';
                $_SESSION['USER_ID']=$row['id'];
                $_SESSION['USER_EMAIL']=$row['user_email'];
                $_SESSION['USER_NAME']=$row['user_name'];
                $_SESSION['USER_ROLE']=$row['user_role'];
                //  Admin - 0
                if($_SESSION['USER_ROLE']=='0'){
                    $_SESSION['IS_ADMIN']='YES';
                    $_SESSION['ADD_PRODUCTS']='YES';
                    $_SESSION['EDIT_BLOG']='YES';
                    $_SESSION['CUSTOMER_SUPPORT']='YES';
                    $_SESSION['EDIT_ORDERS']='YES';
                    $_SESSION['EDIT_DELIVERY']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // shop admin - 1
                else if($_SESSION['USER_ROLE']=='1'){
                    $_SESSION['IS_ADMIN']='YES';
                    $_SESSION['IS_VENDOR']='YES';
                    $_SESSION['ADD_PRODUCTS']='YES';
                    $_SESSION['CUSTOMER_SUPPORT']='YES';
                    $_SESSION['EDIT_ORDERS']='YES';
                    $_SESSION['EDIT_DELIVERY']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // team member - 2
                else if($_SESSION['USER_ROLE']=='2'){
                    $_SESSION['IS_ADMIN']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // customer support - 3
                else if($_SESSION['USER_ROLE']=='3'){
                    $_SESSION['CUSTOMER_SUPPORT']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // vendor - 4
                else if($_SESSION['USER_ROLE']=='4'){

                    $_SESSION['IS_VENDOR']='YES';
                    $_SESSION['ADD_PRODUCTS']='YES';
                    $_SESSION['EDIT_ORDERS']='YES';
                    $_SESSION['EDIT_DELIVERY']='YES';

                    header('location:'.SITE_PATH.'dashboard');

                }
                // Blog Writer -5
                else if($_SESSION['USER_ROLE']=='6'){
                    $_SESSION['EDIT_BLOG']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // delivery boy -7
                else if($_SESSION['USER_ROLE']=='7'){
                    $_SESSION['EDIT_DELIVERY']='YES';
                    header('location:'.SITE_PATH.'dashboard');
                }
                // Customer -6 
                else{
                    header('location:'.SITE_PATH.'');
                }
            }else{
                // echo 'deactive';
                $_SESSION['status']='your accunt is not active';
                $_SESSION['status_code']='bg-red-300';
                header('location:'.SITE_PATH.'login');
                die();
            }
        }
    }

    if(isset($_POST['logout_btn'])){
        unset ($_SESSION['USER_LOGIN']);
        unset ($_SESSION['USER_ID']);
        unset ($_SESSION['USER_EMAIL']);
        unset ($_SESSION['USER_NAME']);

        unset ($_SESSION['IS_ADMIN']);
        unset ($_SESSION['ADD_PRODUCTS']);
        unset ($_SESSION['EDIT_BLOG']);
        unset ($_SESSION['CUSTOMER_SUPPORT']);
        unset ($_SESSION['EDIT_ORDERS']);
        unset ($_SESSION['EDIT_DELIVERY']);
        unset ($_SESSION['IS_VENDOR']);
    
        unset ($_SESSION['status_code']);
        unset ($_SESSION['status']);

        header('location:'.SITE_PATH.'');
        die();
    }

    if(isset($_POST['rest_status_session'])){
        unset ($_SESSION['status_code']);
        unset ($_SESSION['status']);

        // header('location:'.SITE_PATH.'');
        // die();
    }
?>