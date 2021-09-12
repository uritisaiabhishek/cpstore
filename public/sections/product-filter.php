
    <div class="sidebar_filter w-1/5 pl-5 pt-5">
        <h4>sort by Category</h4>
        <div class="p-5 my-1 bg-white shadow">
            <div>
                <input type="radio" name="product_category" onclick="product_filter('category','somecategory')">
                <label for="">category</label>
            </div>
        </div>
        <h4>price range</h4>
        <div class="p-5 my-1 bg-white shadow">
            <div>min</div>
            <div>max</div>
        </div>
        <h4>Sort By</h4>
        <div class="p-5 my-1 bg-white shadow">
            <div class="flex items-center">
                <input type="radio" name="product_sort" onclick="product_filter('sort','newst')">
                <label class="ml-1" for="">New First</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="product_sort" onclick="product_filter('sort','oldest')">
                <label class="ml-1" for="">old First</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="product_sort" onclick="product_filter('sort','price_high_low')">
                <label class="ml-1" for="">price high to low</label>
            </div>
            <div class="flex items-center">
                <input type="radio" name="product_sort" onclick="product_filter('sort','price_low_high')">
                <label class="ml-1" for="">Price low to high</label>
            </div>
        </div>
        <h4>Brand Name</h4>
        <div class="p-5 my-1 bg-white shadow"> 
            <div>
                <input type="checkbox">
                <label for="">Lee coupor</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="">Bata</label>
            </div>
        </div>
        <h4>Color</h4>
        <div class="p-5 my-1 bg-white shadow"> 
            <div>
                <input type="checkbox" onclick="product_filter('color','red')">
                <label for="">red</label>
            </div>
            <div>
                <input type="checkbox" onclick="product_filter('color','black')">
                <label for="">black</label>
            </div>
        </div>
        <h4>size</h4>
        <div class="p-5 my-1 bg-white shadow"> 
            <div>
                <input type="checkbox">
                <label for="">Lee coupor</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="">Bata</label>
            </div>
        </div>
        <h4>rating</h4>
        <div class="p-5 my-1 bg-white shadow"> 
            <div>
                <input type="checkbox">
                <label for="">Lee coupor</label>
            </div>
            <div>
                <input type="checkbox">
                <label for="">Bata</label>
            </div>
        </div>
        <h4>availability</h4>
        <div class="p-5 my-1 bg-white shadow"> 
            <div>
                <input type="radio">
                <label for="">Lee coupor</label>
            </div>
            <div>
                <input type="radio">
                <label for="">Bata</label>
            </div>
        </div>
    </div>