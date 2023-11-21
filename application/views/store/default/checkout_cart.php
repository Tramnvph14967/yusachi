<?php if ($products) { ?>
    <form id="checkout-cart-form">
        <input type="hidden" name="checkout_page" value="true">
        <ul class="cart-header">
            <li><?= __('store.product') ?></li>
            <li class="cart-item-price"><?= __('store.price') ?></li>
            <li><?= __('store.quantity') ?></li>
            <li><?= __('store.total') ?></li>
            <li></li>
        </ul>

        <?php foreach ($products as $key => $product) { ?>
            <ul class="cart-items-row">
                <li>
                    <div class="cart-item">
                        <div class="img-cart">
                            <a href="<?= $product['link'] ?>">
                                <img src="<?= !empty($product['product_featured_image']) ? $product['product_featured_image'] : base_url('assets/store/default/img/1.png'); ?>" alt="<?= __('store.product_image') ?>">
                            </a>
                        </div>
                        <div class="cart-item-content">
                            <?php
                            $combinationString = "";
                            if (isset($product['variation']) && !empty($product['variation'])) {
                                $variation = json_decode($product['variation'], true);
                                foreach ($variation as $key => $value) {
                                    $separator = ($combinationString === "") ? "" : ", ";
                                    $combinationString .= $separator . ($key === 'colors' ? explode("-", $value)[1] : $value);
                                }
                            }
                            ?>
                            <a href="<?= $product['link'] ?>">
                                <h3 style="color:#f16e9c;font-size: 16px;font-weight:400"><?= $product['product_name'] ?> <?= $combinationString ? "({$combinationString})" : "" ?></h3>
                            </a>
                            <p class="product-description text-muted"><?= $product['product_short_description'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing' ?></p>
                        </div>
                    </div>
                </li>
                <li class="cart-item-price text-center">
                    <span class="cart-sale-price" style="color:#f16e9c; font-size:16px;font-weight:400">
                        <?= !empty($product['product_msrp']) ? '<small style="    color: #f16e9c;
    font-size: 16px;
    font-weight: 400;" class="cart-regular-price">' . c_format($product['product_msrp'] + $product['variation_price']) . '</small><br/>' : '' ?>
                        <?= c_format($product['product_price'] + $product['variation_price']) ?>
                    </span>
                </li>
                <li>
                    <?php if (!in_array($product['product_type'], ['downloadable', 'video', 'videolink'])) { ?>
                        <div id="field1" class="cart-counter" style="border:1px solid #f16e9c;">
                            <button type="button" class="sub minus" style="color:#f16e9c;">-</button>
                            <input class="qty-input" style="color:#f16e9c;font-weight:400" name="quantity[<?= $product['cart_id'] ?>]" type="text" value="<?= $product['quantity'] ?>" min="1">
                            <button type="button" class="add plus" style="color:#f16e9c">+</button>
                        </div>
                    <?php } else { ?>
                        <?= $product['quantity'] ?>
                    <?php } ?>
                </li>
                <li>
                    <span class="cart-mini-total-item" style="color:#f16e9c; font-size:16px;font-weight:400"><?= c_format($product['total']) ?></span>
                </li>
                <li>
                    <a href="<?= $cart_url . "?remove=" . $product['cart_id'] ?>">
                        <img style="weight:26px;height:26px" src="<?= base_url('assets/store/default/img/delete.png') ?>" alt="<?= __('store.image') ?>">
                    </a>
                </li>
            </ul>
        <?php } ?>
        <!-- 
        <ul class="cart-footer-row">
            <?php foreach ($totals as $key => $value) { ?>
                <li>
                    <span><?= $value['title'] ?></span>
                    <span><?= c_format($value['amount']) ?></span>
                </li>
            <?php } ?>
        </ul> -->
    </form>

    <div class="row my-4 container">
        <div class="col-8 mx-auto mt-3">
            <a style="background-color: #d26779" href="<?= $base_url ?>" class="btn btn-checoutcart bg-main text-light mb-4"><img src="<?= base_url('assets/store/default/'); ?>img/shopar.png" alt="icon"> <?= __('store.continue_shopping') ?></a>
        </div>
        <div class="col-4 border p-3 text-custom-secondary d-flex flex-column">
            <h3 style="color:#f16e9c" class="h5">Tổng giỏ hàng</h3>


            <?php foreach ($totals as $key => $value) { ?>
                <div class="d-flex justify-content-between mt-3">
                    <h4 style="color:#f16e9c" class="h6"><?= $value['title'] ?></h4>
                    <span style="color:#f16e9c"><?= c_format($value['amount']) ?></span>
                </div>
            <?php } ?>

            <div class="d-flex justify-content-between mt-3 custom-full-underline">
                <h4 style="color:#f16e9c" class="h6">Shipping:</h4>
                <span style="color:#f16e9c">Free</span>
            </div>

        </div>
    </div>
<?php } else { ?>
    <script type="text/javascript">
        window.location = '<?= $base_url . "cart" ?>';
    </script>
<?php } ?>