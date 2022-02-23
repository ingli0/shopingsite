<!--top scale-->
<?php
$product_shuffle= $product->getData();
shuffle($product_shuffle);

if($_SERVER['REQUEST_METHOD']=="POST"){
    //call method add to cart
    $Cart->addToCart($_POST['item_id'],$_POST['user_id']);
}
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top sales</h4>
        <hr>


        <div class="owl-carousel  owl-theme">
            <?php
            foreach ($product_shuffle as $item)
            {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?></h6>
                        <div class="rating text-warning font-size-12">
                    <span>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="far fa-star"></i>
                    </span>
                        </div>
                        <div class="price py-2">
                    <span>
                     <?php echo $item['item_price']?> €
                    </span>

                        </div>
                         <form method="post">
                             <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                             <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                             <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to cart</button>
                         </form>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>

        </div>


        <!--owl carousel-->

    </div>
</section>
<!--top scale-->