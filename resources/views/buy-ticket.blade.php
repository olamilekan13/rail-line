@include('asset.header')


<div class="content-container">
           
    <!--end of ssi:trip_planner_search_bar-->



<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="inner-content-container row">
                <div class="clearfix">
                    <ul id="breadcrumb" class="breadcrumb"></ul>
                    <div class="title-box"><h1 class="promotion-title h2">Buy Tickets</h1></div>
                </div>
                <div class="article-container styled-text-wrapper">
                    <div class="image-container">
                        <!--<img src="/res/media/web/promotion/opening_920x250_en.jpg" alt="">-->
                    </div>
                    <div class="table-container">
                        <table class="general-table" style="min-width: 0px;">
                            <thead>
                                <tr>
                                    <th style="width:50%">
                                        <strong><a href="#" target="_blank" rel="noopener noreferrer" style="color: #ffffff">Lagos Railway Online Ticketing Platform</a></strong>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>This online ticketing service is provided by China Railway.  Tickets are sold in Naira fare.</p>
                                        <p>Please register an account to buy tickets  Click <a href="#">here</a> to know more. </p>
                                        {{-- <a href="#" class="button button-default" title="Buy Tickets" target="_blank" rel="noopener noreferrer"><span class="content-wrapper">Buy Now</span></a> --}}


                                        {{-- Paystack Form --}}

                                        <form id="paymentForm">
                                            <div class="form-group">
                                              <!-- <label for="email">Email Address</label> -->
                                              <input type="email" id="email-address" required hidden />
                                            </div>
                                            <div class="form-group">
                                              <!-- <label for="amount">Amount</label> -->
                                              <input type="tel" id="amount" required hidden />
                                            </div>
                                            <!-- <div class="form-group">
                                              <label for="first-name">First Name</label>
                                              <input type="text" id="first-name" />
                                            </div> -->
                                            <!-- <div class="form-group">
                                              <label for="last-name">Last Name</label>
                                              <input type="text" id="last-name" />
                                            </div> -->
                                            <div class="form-submit">
                                              <button type="submit" onclick="payWithPaystack()" class="button button-default" title="Buy Tickets"> Buy Now </button>
                                            </div>
                                          </form>
                                          <script src="https://js.paystack.co/v1/inline.js"></script>
                                          
                                          
                                          <script>
                                          
                                          var paymentForm = document.getElementById('paymentForm');
                                          paymentForm.addEventListener('submit', payWithPaystack, false);
                                          function payWithPaystack() {
                                            var handler = PaystackPop.setup({
                                              key: 'pk_test_5c214d993f24e426c4d2533544a23d6c8cbd5ddd', // Replace with your public key
                                              // email: document.getElementById('email-address').value,
                                              // amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                                              email: 'test@gmail.com',
                                              amount: 5000 *100,
                                              currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                                              // ref: '{{ rand() }}', // Replace with a reference you generated
                                              
                                              callback: function(response) {
                                          
                                                  console.log(response);
                                                //this happens after the payment is completed successfully
                                                var reference = response.reference;
                                                alert('Payment complete! Reference: ' + reference);
                                                // Make an AJAX call to your server with the reference to verify the transaction
                                              },
                                              onClose: function() {
                                                alert('Transaction was not completed, window closed.');
                                              },
                                            });
                                            handler.openIframe();
                                          }
                                          
                                          
                                          </script>
                                              

                                       


                                            
                                <p></p>
                                        <p><strong>Payment Method</strong></p>
                                        <div class="image-in-a-row row">
                                            <img src="../../assets/img/icon/Visa%402x.png" alt="">
                                            <img src="../../assets/img/icon/Master%402x.png" alt="">
                                            <!-- <img src="../../assets/img/icon/UnionPay%402x.png" alt=""> -->
                                            <br>
                                            <span style="display:inline-block;padding:10px 0;">
                                                + Other Mainland designated payment means
                                             </span>
                                            
                                        </div>
                                        <p><u>Other ticketing channels</u>:</p>
                                        <ul>
                                        <li>MetroStation mobile app</li>
                                        <li>Designated Ticket Agents</li>
                                        <li>Ticketing Counters and Ticket Machines in stations</li>
                                        </ul>
                                            <p>Click <a href="#">here</a> to learn more</p>
                                <p></p>
                                            <p>Friendly reminder:
                                        <ul>
                                        <!--<li>Beware of the latest travel advisories and body temperature requirements when planning your journey</li>	
                                        <li>You cannot take High Speed Rail if you show signs of a fever (body temperature over 37.3°C)</li>-->
                                        <li>Antibacterial hand sanitising gels or sprays containing ethanol (alcohol) are prohibited on trains. Please use alcohol wipes if necessary</li>
                                            <li>Beware of the latest travel advisories and body temperature requirements when planning your journey</li>
                                        </ul></p>
                                <p>Click <a href="#">here</a> to check the details of Preventative Measures     </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        <!--
                    <p>With COWRY China Railway online ticketing platform, you can enjoy one-stop service for ticket purchase, alteration and refund in one-go. You can also purchase both cross boundary and Mainland domestic tickets at the same time. It's so much easier for planning your trip. </p>
                    <p>Click <a href="/en/latest-news/e-ticket.html" target="_blank">here</a> to know more about E-tickets.</p>
                    <p>Please create your account if you wish to buy ticket on COWRY China Railway. Click <a href="/en/latest-news/ticketing-via-COWRY.html" target="blank">here</a> to know more.</p>
                    <p>Note: Lagos Staiononline ticketing system supports desktop and laptop computers only. Traditional Chinese, Simplified Nigeriaand English interfaces are available. COWRY online ticketing platform provides Simplified Nigeriaand English interfaces. Both website and mobile app are available.</p>
        -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@include('asset.footer')