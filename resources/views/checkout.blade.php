@include('layout.header')
<link rel="stylesheet" href="assets/style/checkout.css">
<!-- https://codepen.io/ryandelos/pen/qBxxLVz -->

<div class="checkout-container">
    <div class="child-checkout">
        <div class="left common-cls">
            <div class="left-content">
                <h2>Modern Home</h2>
                <p class="home-price">249.50 USD / 1 night</p>
                <hr>
                <p class="home-details">Entire home for 2 guest </br> Tue, July 23, 2022 to Thu, July 25, 2022</p>
                
            </div>
        </div>
        <div class="right common-cls">
            <div class="right-content">
                <h2 class="right-heading">Receipt Summary</h2>
                <table class="right-table">
                    <tr>
                        <td>249.50 x 2 nights</td>
                        <td style>499.00 USD</td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>0.00 USD</td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>0.00 USD</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>47.41 USD</td>
                    </tr>
                    <tr>
                        <td class="tamount">Total</td>
                        <td class="tamount">546.41 USD</td>
                    </tr>
                </table>
                <hr>
                <div class="checkoutform">
                    <h2 class="right-heading">Payment Information</h2>
                    <div class="form-group">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" id="fullname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cardnumber" class="form-label">Card Number</label>
                        <input type="text" name="cardnumber" id="cardnumber" placeholder="1111-2222-3333-4444" class="form-control">
                    </div>
                    <div class="form-group">
                        <h4 class="form-label" class="form-label">Expires on:</h4>
                        <div>
                            <label for="expiration-month">Month</label>
                            <select id="expiration-month" name="expiration-month" required="" class="input-other">
                                <option value="">Month:</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">Decemeber</option>
                            </select>
                            <label for="experation-year">Year</label>
                                 <select id="experation-year" name="experation-year" required="" class="input-other">
                                    <option value="">Year</option>
                                    <option value="">2023</option>
                                    <option value="">2024</option>
                                    <option value="">2025</option>
                                    <option value="">2026</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardnumber" class="form-label">Cvv</label>
                        <input type="text" name="cvv" id="cvv" placeholder="1234" class="input-other width-25">
                    </div>
                    <button type="submit" class="btn btn-grey">Book Securely</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')