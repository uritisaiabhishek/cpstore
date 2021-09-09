<?php
    if(isset($_SESSION['status'])){
        ?>
        <div class="my-2 p-5 <?php echo $_SESSION['status_code']; ?> flex justify-between items-center">
            <?php echo $_SESSION['status']; ?>
            <form method="post">
                <button type="submit" name="rest_status_session" class="w-5 h-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
        </div>
        <?php
    }
?>