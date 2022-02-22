<?php
    $item_id=$_GET['item_id']??1;
    foreach ($product->getData() as $item):
        if($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']??"./assets/product/1.png" ?>" alt="ophone" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknow"; ?></h5>
                <small>BY <?php echo $item['item_brand']??"Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                                <span>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="fas fa-star"></i>
                                  <i class="far fa-star"></i>
                                </span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">1.532 ratings| 23+ answered questions</a>
                </div>
                <hr class="m-0">

                <!--price section-->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P.</td>
                        <td><strike>1200</strike></td>
                    </tr>
                </table>
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>Deal price</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp; inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You save</td>
                        <td>$<span class="font-size-16 text-danger">150</span></td>

                        <!--policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <small class="fas fa-retweet border p-3 rounded-pill"></small>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">10 days<br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <small class="fas fa-truck border p-3 rounded-pill"></small>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Daily Tution <br>Deliverd</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <small class="fas fa-check-double border p-3 rounded-pill"></small>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">1 Year<br>Waranty</a>
                                </div>
                            </div>
                        </div>
                        <!--policy-->

                    </tr>
                </table>
                <!--price section-->
                <hr>
                <!--order-details-->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : mar 01 - mar 03</small>
                    <small>Solid by <a href="#">Daily Electronics</a>(4.3 out of 5 | 7.331 ratings)</small>
                    <small><i class="fas fas-map-marker-alt color-primary"></i>&nbsp;&nbsp;Delivery to customer -42420</small>
                </div>
                <!--order-details-->
                <div class="row">
                    <div class="col-6">
                        <!--color-->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!--color-->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!--SIZE-->
                <div class="size my-3">
                    <h6 class="font-baloo">size</h6>
                    <div class="dflex justify-content-between w-75">
                        <div class="div-font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="div-font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="div-font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!--SIZE-->
            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Descreption</h6>
                <hr>
                <p class="font-rale font-size-14">Η Apple παρουσιάζει το νέο iPhone 13 προσφέροντας πρωτοποριακές καινοτομίες σε κάμερα και τσιπ με μεγάλη διάρκεια ζωής της μπαταρίας

                    Διαθέτει κομψή και ανθεκτική σχεδίαση, προηγμένο νέο σύστημα διπλής κάμερας για κρυστάλλινες φωτογραφίες και βίντεο με ποικιλία φίλτρων για να διαλέξεις αυτό που σου ταιριάζει.

                    Το iPhone 13 διαθέτει επίσης εξαιρετικά γρήγορη απόδοση και αποδοτικότητα ισχύος με τον εξαπύρηνο επεξεργαστή A15 Bionic, φωτεινότερη οθόνη Super Retina XDR που ζωντανεύει το περιεχόμενο, απίστευτη ανθεκτικότητα με το μπροστινό κάλυμμα με το Ceramic Shield, μεγάλο χώρο αποθήκευσης στα 128 GB και προηγμένη εμπειρία 5G.

                    Επιπλέον, η διάρκεια ζωής της μπαταρίας σε αφήνει να απολαύσει Video playback έως και 19 ώρες και Audio playback έως 75 ώρες. Επιπλέον με χρήση του fast charging μπορείς να φορτίσεις έως και το 50% της μπαταρίας σε μόλις 30 λεπτά. Τέλος, διαθέτει ασυναγώνιστη αντοχή και ανθεκτικότητα IP68 στο νερό και στη σκόνη μέχρι 6 μέτρα για έως 30 λεπτά</p>
            </div>
        </div>
    </div>

</section>
<?php
        endif;
        endforeach;
    ?>