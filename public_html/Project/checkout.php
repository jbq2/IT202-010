<?php 
require_once(__DIR__ . "/../../partials/nav.php");

if(!is_logged_in()){
    flash("You must be logged in to purchase any items", "warning");
    die(header("Location: login.php"));
}
?>

<div>
    <h1 style="margin-bottom: 30px">Checkout</h1>
    <form method="POST" onsubmit=true>
        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="fname">First Name </label>
            <input type="text" name="fname">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="lname">Last Name </label>
            <input type="text" name="lname">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="address">Address </label>
            <input type="text" name="address">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="apartment">Apartment </label>
            <input type="text" name="apartment">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="city">City </label>
            <input type="text" name="city">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="state">State/Province </label>
            <select name="state">
                <!-- add all states as options -->
            </select>
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="country">Country </label>
            <select name="country">
                <!-- add all countries as options -->
            </select>
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="zip">ZIP Code </label>
            <input type="text" name="zip">
        </div>
    </form>
</div>

<style>
    .orderDetailsForm{
        display:block;
    }
    
    .orderDetailsLabel{
        display:block;
        margin-bottom:5px;
    }
</style>