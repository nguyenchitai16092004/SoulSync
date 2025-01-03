@extends('frontend.layouts.master')
<<<<<<< Updated upstream
@section('This page is the Shop.', 'Shop')
=======
@section('title', 'Cart')

>>>>>>> Stashed changes
@section('main')
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/pagination.css">
<div class="favorites">
    <h1 style="text-align: center">Your Cart</h1>
</div>

<div class="cart-container">
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<<<<<<< Updated upstream
                <td><img src="img/product-img/BTS - Lightstick.jpg" alt="Sản phẩm"></td>
=======
                <td><img src="img/product-img/BTS - Lightstick.jpg" alt="BTS Lightstick"></td>
>>>>>>> Stashed changes
                <td>BTS Official Light Stick</td>
                <td>1.827.680 VNĐ</td>
                <td class="quantity-buttons">
                    <button class="btn-minus">-</button>
                    <span class="quantity">1</span>
                    <button class="btn-plus">+</button>
                </td>
                <td>1.827.680 VNĐ</td>
                <td><button class="delete"><i class="fas fa-trash"></i></button></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Pagination -->
<nav aria-label="navigation">
    <ul class="pagination mt-50 mb-70">
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">21</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</nav>
<div class="container-cart">
    <div class="note btn-left">
        <h5>Add a note to your order</h5>
        <textarea placeholder="Your note"></textarea>
        <button class="update">Update</button>
    </div>
    <div class="total btn-right">
        <div class="container-text">
            <p class="left">Subtotal: </p>
            <p class="right">1.827.680 VND</p>
        </div>
        <button class="checkout">CHECK OUT</button>
        <div class="payment-methods">
            <img src="img/product-img/cash.jpg" alt="COD">
            <img src="img/product-img/vnpay.jpg" alt="vnpay">
        </div>
        <div class="terms">
            <input type="checkbox" id="terms">
            <label for="terms">I agree with the Term and Conditions.</label>
        </div>
    </div>
</div>
<div class="container-product">
    <h4>Before your checkout, have you considered</h4>
    <div class="line"></div>
    <div class="row">
<<<<<<< Updated upstream
        <div class="col-md-3 product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Sản phẩm 1">
            <p>[Poster] BTS – Proof</p>
        </div>
        <div class="col-md-3 product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Sản phẩm 2">
            <p>[Poster] BTS – Proof</p>
        </div>
        <div class="col-md-3 product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Sản phẩm 3">
            <p>[Poster] BTS – Proof</p>
        </div>
        <div class="col-md-3 product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Sản phẩm 4">
            <p>[Poster] BTS – Proof</p>
=======
        <div class="product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
        </div>
        <div class="product">
            <img src="img/product-img/[Poster] BTS – Proof.jpg" alt="Poster BTS Proof">
            <p>Poster BTS Proof</p>
            <span class="price">200,000 VNĐ</span>
>>>>>>> Stashed changes
        </div>
    </div>
</div>
@stop