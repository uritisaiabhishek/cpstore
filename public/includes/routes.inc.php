<?php
    if(isset($_GET['parameter']) && $_GET['parameter']!=''){
            
        if($urlArr[0]=='blog'){
            echo "blog page";
            if(!isset($urlArr[1])){
                include('pages/blog.php');
            }else{
                include('pages/single.php');
            }
        }
        
        else if($urlArr[0]=='shop'){
            if(isset($urlArr[1])){
                if($urlArr[1]=='category'){
                    include('pages/product_categories.php');
                }else{
                    include('pages/product.php');
                }
            }else{
                include('pages/shop.php');
            }
        }
        
        else if($urlArr[0]=='contact'){
            include('pages/contact.php');
        }
        
        else if($urlArr[0]=='login'){
            include('authentication/login.php');
        }

        else if($urlArr[0]=='register'){
            include('authentication/register.php');
        }

        else if($urlArr[0]=='cart'){
            include('pages/cart.php');
        }

        else if($urlArr[0]=='dashboard'){
            include('admin/dashboard.php');
        }
        
        else{
            $check_profile=mysqli_num_rows(mysqli_query($con,"select user_name from auth where user_name='".$urlArr[0]."'"));
            // check username for profile page
            if($check_profile>0){
                include('pages/profile.php');
            }

            // check page name for content pages
            $check_page=mysqli_num_rows(mysqli_query($con,"select page_title_slug from pages where page_title_slug='".$urlArr[0]."'"));
            if($check_page>0){
                include('pages/pages.php');
            }

            if($check_profile === 0 && $check_page === 0){
                include('pages/errorpage.php');
            }
        }
    }else{
        include('pages/home.php');
    }
?>