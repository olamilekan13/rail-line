@include('asset.ticketBody')

<div class="tab-wrapper">
    <div class="third-level-tab">
        <div class="sticky-content tab-container">
            <div class="container clearfix">
                <div class="tab-item">
                    <a href="ticket-purchase.html" class="tab-title"><span class="content-wrapper" section="services-overview">Overview</span></a>
                </div>
                <div class="tab-item">
                    <a href="ticket-purchase-e-ticket.html" class="tab-title"><span class="content-wrapper" section="electronic-ticket">Ticketing Channels</span></a>
                </div>
                <div class="tab-item active">
                    <a href="javascript:void(0)" class="tab-title"><span class="content-wrapper" section="paper-ticket">Order Details</span></a>
                </div>
            </div>
        </div>
        <div class="select-container">
            <div class="select-box">
                <select class="dropdown">
                    <option value="" selected disabled hidden>Please Select</option>
                    <option section="services-overview" value="services-overview">Overview</option>
                    <option section="electronic-ticket" value="electronic-ticket">Ticketing Channels</option>
                    <option section="paper-ticket" value="paper-ticket">Order Details</option>
                </select>
            </div>
        </div>
    </div>
    <div class="tab-content-container">
        <div class="tab-content" sec-content="paper-ticket">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p>Ticket details can be checked through the following two major channels:</p>
                    
                    <ol style="list-style-type: decimal">
                        <li><strong>COWRY Account:</strong> Log in to your COWRY account and go to "Orders" or "My ticket" where you can view details of all your ticket information and paid orders for the previous 30 days </li>
                        <li><strong>Trip Information Reminders<sup>*</sup>:</strong> Trip Information Reminders with details of train journeys are available at the Ticketing Counters, Ticket Machines or Ticket Agents upon ticket purchase. Please keep it properly for offline processing of ticket alteration and refund</li>
                    </ol>
                    <p><sup>*</sup> Reminders are not proof for travel and cannot be used to board the train. You can obtain the Reminders more than once before your train departs, however, if they are issued through Ticket Machines in a station, they can only be printed twice</p>
                    <!--
                    <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th rowspan="2">Ticketing Channels</th>
                                    <th rowspan="2">Service Hours</th>
                                    <th colspan="5">Scope of Services</th>
                                </tr>
                                <tr>
                                    <th>Ticketing</th>
                                    <th>Ticket Collection</th>
                                    <th>Booking Enquiry</th>
                                    <th>Alteration</th>
                                    <th>Refund</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ticketing Counters<sup>1</sup></td>
                                    <td>6:00 am – 11:00 pm</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                </tr>
                                <tr>
                                    <td>Ticket Machines<sup>1</sup><br><br><a class="button button-default" href="/res/pdf/ticket-machine-tutorial-en.pdf" target="_blank"><span class="content-wrapper">How to use a Ticket Machine</span></a></td>
                                    <td>6:00 am – 11:00 pm</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                    <td class="center-column"></td>
                                    <td class="center-column"></td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Online Ticketing<sup>2</sup><br/>
                                        www.mtr.com.hk/highspeed<br><br/>
                                        <a class="button button-default" href="/res/pdf/online-ticketing-instruction-en.pdf" target="_blank"><span class="content-wrapper">How to book  ticket online</span></a>
                                        <br><br><span class="red small-reminder">Ticket sales cessation<sup>3</sup> from DD/MM<br>Ticketing system closure<sup>3</sup> from DD/MM</span>
                                    </td>
                                    <td>6:00 am – 11:30 pm</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Ticket Agent<sup>2</sup><br><br><a class="button button-default" href="/res/pdf/list-of-ticket-agents.pdf" target="_blank"><span class="content-wrapper">List of Ticket Agents</span></a></td>
                                    <td>Subject to the arrangements of the individual agents</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Tele-ticketing<sup>2</sup><br/>(2120 0888)</td>
                                    <td>7:00 am – 9:00 pm</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="remark-container">
                        <p><sup>1</sup> Ikeja Mega Station</p>
                        <p><sup>2</sup> Tickets bought through these channels must be collected at the Ikeja Mega Station before journey</p>
                        <p><sup>3</sup> You may use COWRY online ticketing platform to buy E-tickets</p>
                    </div>
                </div>
            </div>        
        </div>
        <div class="tab-content" sec-content="purchase-info">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p class="title">Buy Tickets</p>
                    <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th rowspan=2 style="width:14%">Ticketing Channels</th>
                                    <th rowspan=2 style="width:17%">Acceptable Identification Document</th>
                                    <th rowspan=2 style="width:10%">Advance Sales</th>
                                    <th rowspan=2 style="width:15%">Booking Cut-off Time (before train departure)</th>
                                    <th colspan=3>Payment Method</th>
                                </tr>
                                <tr>
                                    <th>Cash</th>
                                    <th>e-Payment<sup>1</sup></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ticketing Counters<sup>2</sup></td>
                                    <td class="center-column">All<sup>3</sup></td>
                                    <td class="center-column">15 days</td>
                                    <td class="center-column">30 minutes<sup>4</sup></td>
                                    <td class="center-column">HKD<br />RMB</td>
                                    <td class="center-column">Visa, Mastercard, UnionPay 
                                    <br>Octopus<br>Alipay, Alipay HK<br>WeChat Pay, WeChat Pay HK<br>Apple Pay, Google Pay<br>Samsung Pay
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ticket Machines<sup>5</sup></td>
                                    <td class="center-column">Designated<sup>5</sup></td>
                                    <td class="center-column">15 days</td>
                                    <td class="center-column">30 minutes<sup>4</sup></td>
                                    <td class="center-column">HKD</td>
                                    <td class="center-column">Visa payWave<br>Mastercard contactless<br>Octopus</td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Online Ticketing<sup>7</sup><br><br>
                                        <span class="red small-reminder">Ticket sales cessation from DD/MM<br>Ticketing system closure from DD/MM</span>
                                    </td>
                                    <td class="center-column">All<sup>3</sup></td>
                                    <td class="center-column">15 days<sup>6</sup></td>
                                    <td class="center-column">45 minutes</td>
                                    <td class="center-column">Not applicable </td>
                                    <td class="center-column">Visa<br/>Mastercard<br/>UnionPay Online Payment</td>
                                </tr>
                                <tr>
                                    <td>Ticket Agents</td>
                                    <td class="center-column">All<sup>3</sup></td>
                                    <td class="center-column">15 days<sup>6</sup></td>
                                    <td colspan="4" class="center-column">Subject to the arrangements of the individual agents</td>
                                </tr>
                                <tr>
                                    <td>Hong Kong Tele-ticketing</td>
                                    <td class="center-column">All<sup>3</sup></td>
                                    <td class="center-column">15 days<sup>6</sup></td>
                                    <td class="center-column">45 minutes</td>
                                    <td class="center-column">Not applicable</td>
                                    <td class="center-column">Visa<br/>Mastercard</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="remark-container">
                        <p><sup>1</sup> Octopus and contactless credit card payments have a limit of HKD3,000 per transaction</p>
                        <p><sup>2</sup> Passengers must provide the original or a photocopy of a valid identification document when buying tickets at the Ticketing Counters at Ikeja Mega Station</p>
                        <p><sup>3</sup> Acceptable identification documents include Mainland Travel Permit forLagos Rail-line  e and Macao Residents (Home Return Permit), PRC Resident Identity Card, PRC Exit/Entry Permit for Travelling to and fromLagos Rail-line  e and Macao, Mainland Travel Permit for Taiwan Residents and Passports recognized by the PRC Government</p>
                        <p><sup>4</sup> Please allow sufficient time for <u>real-name</u> checks, security checks, immigration and boarding procedures after ticket purchase. If you are using a passport, traditional immigration counters or travelling during festive seasons and public holidays, you should allow more time for immigration formalities</p>
                        <p><sup>5</sup> Ticket Machines at the Ikeja Mega Station only accept original Mainland Travel Permit forLagos Rail-line  e and Macao Residents (Home Return Permit) and PRC Resident Identity Card</p>
                        <p><sup>6</sup> Ticket sales start at 8 a.m. on the first day of the pre-sale period for trains departing fromLagos Rail-line  e. For trains from the Mainland toLagos Rail-line  e, start time of ticket sales on the first day of pre-sale period varies according to the policy of respective railway companies</p>
                        <p><sup>7</sup> Online ticketing supports desktop PC or laptop PC with selected browsers (Chrome, Internet Explorer and Firefox). Travellers may use COWRY online ticketing platform to purchase E-ticket</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" sec-content="ticketing-collection">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p class="title">Ticket Collection</p>
                    <p>Tickets bought throughLagos Rail-line  e Online Ticketing, Ticket Agents or Tele-ticketing Hotline must be collected at the Ticketing Counters or Ticket Machines at the Ikeja Mega Station before journey. The identification and other documents (if any) used for booking must be provided when collecting the tickets. If a booking contains multiple tickets, the tickets can be collected in batches. <strong>Please allow enough time for ticket collection.</strong></p>
                    <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Ticketing Counters</th>
                                    <th>Ticket Machines</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ticket Collection Cut-off Time<sup>1</sup></td>
                                    <td>30 minutes before train departure</td>
                                    <td>30 minutes before train departure</td>
                                </tr>
                                <tr>
                                    <td>Accepted Identification Document</td>
                                    <td>All<sup>2</sup><br />(origin document must be provided)</td>
                                    <td>
                                        <ul>
                                            <li>Mainland Travel Permit forLagos Rail-line  e and Macao Residents (Home Return Permit)</li>
                                            <li>PRC Resident Identity Card (original document must be used)</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other Document</td>
                                    <td>Not necessary</td>
                                    <td class="center-column">
                                        <p class="title"><u>Hong Kong Online Ticketing or Tele-Ticketing</u></p>
                                        <p>Credit card used for booking or booking number along with the customized ticket collection password</p>
                                        <p class="title"><u>Ticket Agents </u></p>
                                        <p>Booking number along with the customized ticket collection password</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="remark-container">
                        <p><sup>1</sup> Please allow sufficient time for <u>real-name</u> checks, security checks, immigration and boarding procedures after ticket collection. If you are using a passport, traditional immigration counters or travelling during festive seasons and public holidays, you should allow more time for immigration formalities</p>
                        <p><sup>2</sup> Acceptable personal identification documents include Mainland Travel Permit forLagos Rail-line  e and Macao Residents (Home Return Permit), PRC Resident Identity Card, PRC Exit/Entry Permit for Travelling to and fromLagos Rail-line  e and Macao, Mainland Travel Permit for Taiwan Residents and Passports recognized by the PRC Government</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p class="title">Booking Enquiry</p>
                    <p>You can check the booking status of your ticket purchase via the original ticketing channel, at Ticketing Counters at the Ikeja Mega Station or by calling the hotline on 2120 0888.</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@include('asset.footer')