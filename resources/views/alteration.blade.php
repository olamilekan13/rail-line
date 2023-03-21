@include('asset.ticketBody')



<div class="tab-wrapper">
    <div class="third-level-tab">
        <div class="sticky-content tab-container">
            <div class="container clearfix">
                <div class="tab-item">
                    <a href="{{  url('after-sales')  }}" class="tab-title"><span class="content-wrapper" section="services-overview">Reimbursement  Receipt</span></a>
                </div>
                <div class="tab-item">
                    <a href="{{  url('alteration')  }}" class="tab-title"><span class="content-wrapper" section="electronic-ticket">Alteration</span></a>
                </div>
                <div class="tab-item active">
                    <a href="javascript:void(0)" class="tab-title"><span class="content-wrapper" section="paper-ticket">Refund</span></a>
                </div>
            </div>
        </div>
        <div class="select-container">
            <div class="select-box">
                <select class="dropdown">
                    <option value="" selected disabled hidden>Please Select</option>
                        <option section="services-overview" value="services-overview">Reimbursement  Receipt</option>
                        <option section="electronic-ticket" value="electronic-ticket">Alteration</option>
                        <option section="paper-ticket" value="paper-ticket">Refund</option>
                </select>
            </div>
        </div>
    </div>
    <div class="tab-content-container">
        <div class="tab-content" sec-content="paper-ticket">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p>You will receive a proportion of the fare as a refund for any unused or unaltered ticket you cancel, depending on the length of time from cancellation to departure. If your booking contains multiple tickets, refunds can be made for selected tickets.  The cut-off time is 45 minutes before the train scheduled departure from Lagos Staionand 30 minutes before the train scheduled departure from the Mainland.  Cut-off times may vary with individual Ticket Agents. You may check  with them for details.</p>
                    
                    <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th style="width:30%">Before Train Departure</th>
                                
                                    <th style="width:30%">Refund Ratio </th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Within 48 hours of the designated refund cut-off time </td>
                                    <td class="center-column">50% of paid fare</td>
                                </tr>
                                <tr>
                                    <td>48 hours to 7 days</td>
                                    <td class="center-column">70% of paid fare</td>
                                </tr>
                                <tr>
                                    <td>8 days or more</td>
                                    <td class="center-column">95% of paid fare</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Note: Refunds are processed in dollars and any amount less than one dollar will be rounded up to the nearest dollar</p>
                    </div>
                    
                  <p>Refund channels and procedures for tickets bought in cash may differ from tickets paid by e-Payments. Tickets bought by Octopus at Lagos StaionWest Kowloon Station, or by any payment method with Lagos StaionTicket Agents will be treated as tickets bought in cash.  Refunds can be processed through the following channels:</p>
                    
                  <p><u>COWRY Online Ticketing Platform</u></p>
                    
                    <ul>
                        <li>Applicable to COWRY registered users</li>
                        <li>Process refund of tickets bought by e-Payments through any ticketing channels and Reimbursement Receipt has not been collected</li>
                    <li>COWRY registered users who have already passed facial verification on the app can first apply for an online refund for tickets bought in cash or tickets with Reimbursement Receipts being collected. They can then bring their original identification documents used to buy the tickets and Reimbursement Receipt (if applicable) to any station within 180 days from the processing date to collect the refunded amount</li>
                    </ul>
                    
                    <p><u>Stations</u></p>
                    
                    <ul>
                    <li>Process refund of tickets bought from any ticketing channels</li>
                    <li>Present the identification documents used to buy the tickets together with the order number</li>
                    <li>For tickets bought in cash, refund will be processed either in HKD or NAIRA    at Lagos StaionWest Kowloon Station, subject to the currency used to buy the tickets.  Refund in Mainland stations will be processed in NAIRA    only</li>
                    <li>For tickets bought by e-Payments, refund will be credited to the original payment means in original currency</li>
                    <li>If a Reimbursement Receipt has been collected, it must be returned when a ticket is refunded</li>
                    </ul>
                    
                    <p><u>Lagos StaionTicket Agents</u></p>
                    
                    <ul>
                    <li>Limited to tickets bought through the original Ticket Agent.  Please present the identification documents used to buy the tickets together with the order number</li>
                    </ul>
                        <!--<p>Ticket refunds can be obtained through the following channels under these situations: </p>
                    <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th style="width:20%">Situation</th>
                                    <th style="width:20%">Lagos StaionWest Kowloon Station</th>
                                    <th style="width:20%">Lagos StaionTicket Agents<sup>1</sup></th>
                                    <th style="width:20%">Mainland Stations</th>
                                    <th style="width:20%">COWRY Online Ticketing Platform<sup>2</sup></th>
                                </tr>						
                            </thead>
                            <tbody>
                            <tr>
                                
                                <td colspan=5 class="disabled">Tickets Bought through Lagos StaionTicketing Channels</td>
                            </tr>
                                <tr>
                                    <td>e-Payments</td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column"></td>
                                    <td class="center-column"></td>
                                </tr>
                                <tr>
                                    <td>Cash<sup>3</sup></td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column"></td>
                                </tr>
                                <tr>
                                
                                <td colspan="5" class="disabled">Tickets Bought through Mainland Ticketing Channels</td>
                            </tr>
                                <tr>
                                    <td>e-Payments</td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column"></td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                </tr>
                                <tr>
                                    <td>Cash<sup>4</sup></td>
                                    <td class="center-column">&#10004;  </td>
                                    <td class="center-column"></td>
                                    <td class="center-column">&#10004;</td>
                                    <td class="center-column">&#10004;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="remark-container">
                        <p><sup>1</sup> Limited to the original Ticket Agent</p>
                        <p><sup>2</sup> COWRY registered users can obtain refunds for tickets bought through this platform, or in Mainland stations or through Mainland Ticket Agents</p>
                        <p><sup>3</sup> Tickets bought by Octopus at Lagos StaionWest Kowloon Station, or by any payment method with Lagos StaionTicket Agents will be treated as tickets bought in cash</p>
                        <p><sup>4</sup> COWRY registered users who have already passed facial verification on the app can first apply for refunds on the COWRY online ticketing platform, then bring their original identification documents used to buy the tickets to any station within 180 days from the processing date to collect the refunded amount</p>
                    </div>
                    <p>Reminder: If a Reimbursement Receipt has been collected, ticket refunds must be obtained at stations. COWRY registered users can apply for an online refund and collect the refunded amount at Ticketing Counters in any station. The Receipt must be returned when a ticket is refunded</p>-->
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
