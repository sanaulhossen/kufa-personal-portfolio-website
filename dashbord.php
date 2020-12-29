<?php
session_start();

    require 'auth_checking.php';
    require 'dashbord_assets/header.php';
    require 'dashbord_assets/sidebar.php';
?>



            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Title</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
                                <span class="breadcrumb-item active">Breadcrumb 2</span>
                            </nav>
                        </div>
                        <div>
                            <?php echo $_SESSION['login']; ?>
                        </div>
                    </div>
                    <!-- Content goes Here -->
                </div>

                <!-- Content Wrapper END -->

                
    
<?php
    require 'dashbord_assets/footer.php';
?>