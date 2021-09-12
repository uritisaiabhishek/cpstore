<section class="shop my-10 flex">
    <?php include('sections/product-filter.php'); ?>
    <div class="products_container w-full px-5 grid grid-flow-row grid-cols-4 gap-3">
        <?php
            $get_product=get_product($con);
        ?>
        <?php if(count($get_product)>0){?>
            <?php 
                foreach($get_product as $list){
            ?>
            <div class="bg-white shadow relative">
                <img src="https://dummyimage.com/400x400" alt="">
                <div class="p-5">
                    <p>brand name</p>
                    <a><?php echo $list['product_title'] ?></a>
                    <div>1200 <span>3000</span></div>
                    <button>Add to cart</button>
                    <button class="absolute top-3 right-2 bg-indigo-200 p-2 text-sm text-blue-900">Add to wishlist</button>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

    </div>
</section>