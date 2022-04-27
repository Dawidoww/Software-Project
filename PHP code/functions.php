<?php
/**
 * sanitise HTML for output
 */
function escape($data) {
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return ($data);
}
function starsHtml($stars)
{
    switch ($stars) {
        case 0:
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 1:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 2:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
// and so on up to case 5
    }
    function getAllProducts()
    {
        $products = [];
        $products[] = [
            'name' => 'Sandwich',
            'type' => 'Power',
            'description' => 'A filling, savoury snack of peanut butter and
    jelly.',
            'price' => 1.00];
        $products[] = [
            'name' => 'Slice of cheesecake',
            'type' => 'Power',
            'description' => 'Treat yourself to a chocolate covered cheesecake
slice.',
            'price' => 2.00];
        $products[] = [
            'name' => 'Pineapple',
            'type' => 'Power',
            'description' => 'A piece of exotic fruit.',
            'price' => 3.00];
        $products[] = [
            'name' => 'Jelly Donut',
            'type' => 'Power',
            'description' => 'The best type of donut - filled with sweet jam.',
            'price' => 4.50];
        $products[] = [
            'name' => 'Banana',
            'type' => 'Power',
            'description' => 'The basis for a good smoothie and high in
potassium.',
            'price' => 0.50];
        return $products;
    }

    function getShoppingCart()
    {
        // default is empty shopping cart array
        $cartItems = [];
        if (isset($_SESSION['cart'])) {
            $cartItems = $_SESSION['cart'];
        }
        return $cartItems;
    }
    function addItemToCart($planName)
    {
        $cartItems = getShoppingCart();
        $cartItems[$planName] = 'Power Up';
        $_SESSION['cart'] = $cartItems;
    }

    function removeItemFromCart($planName)
    {
        $cartItems = getShoppingCart();
        unset($cartItems[$planName]);
        $_SESSION['cart'] = $cartItems;
    }
}
