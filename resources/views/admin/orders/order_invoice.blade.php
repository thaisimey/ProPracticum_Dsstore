<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Invoice</h2><h3 class="pull-right">Order # {{ $orderDetails->id }}</h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Billed To:</strong><br>
                {{ $userDetails->name }} <br>
                {{ $userDetails->address }} <br>
                {{ $userDetails->city }} <br>
                {{ $userDetails->state }} <br>
                {{ $userDetails->country }} <br>
                {{ $userDetails->pincode }} <br>
                {{ $userDetails->mobile }} <br>
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Shipped To:</strong><br>
                {{ $orderDetails->name }} <br>
                {{ $orderDetails->address }} <br>
                {{ $orderDetails->city }} <br>
                {{ $orderDetails->state }} <br>
                {{ $orderDetails->country }} <br>
                {{ $orderDetails->pincode }} <br>
                {{ $orderDetails->mobile }} <br></div>
            </address>
          </div>
       
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Payment Method:</strong><br>
              {{ $orderDetails->payment_method }}
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Order Date:</strong><br>
             {{ $orderDetails->created_at }}<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                    <tr>
                      <td style="width: 40%"><strong>Product Name/Code</strong></td>
                      <td style="width: 15%"class="text-center"><strong>Quantity</strong></td>
                      <td class="text-center"><strong>Product Price</strong></td>
                      <td class="text-right"><strong>Totals</strong> </td>

                    </tr>
                </thead>
                <tbody>

                  <?php $Subtotal = 0; ?>
                  
                   @foreach($orderDetails->orders as $pro)
                  
                  <tr>
                    <td>{{ $pro->product_name }} ({{ $pro->product_code }}) </td>
                    <td class="text-center">{{ $pro->product_qty }}</td>
                    <td class="text-center">$ {{ $pro->product_price }}</td>
                    <td class="text-right">$ {{ $pro->product_price * $pro->product_qty }}</td>
                  </tr>
                  <?php $Subtotal = $Subtotal + ($pro->product_price * $pro->product_qty) ?>
                   @endforeach



                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">$ {{ $Subtotal }}</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Shipping Charges (+)</strong></td>
                    <td class="no-line text-right">$ 0</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Coupon Discount (-)</strong></td>
                    <td class="no-line text-right">$ {{ $orderDetails->coupon_amount }}</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Grand Total</strong></td>
                    <td class="no-line text-right">$ {{ $orderDetails->grand_total }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>