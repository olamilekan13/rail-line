@include('asset.ticketBody')


<div class="tab-wrapper">
    <div class="third-level-tab">
        <div class="sticky-content tab-container">
            <div class="container clearfix">
                <div class="tab-item active">
                    <a href="javascript:void(0)" class="tab-title"><span class="content-wrapper" section="overview">Reimbursement Receipt</span></a>
                </div>
                <div class="tab-item">
                    <a href="{{ url('alteration') }}" class="tab-title"><span class="content-wrapper" section="electronic-ticket">Alteration</span></a>
                </div>
                <div class="tab-item">
                    <a href="{{  url('refund')  }}" class="tab-title"><span class="content-wrapper" section="paper-ticket">Refund</span></a>
                </div>
            </div>
        </div>
            <div class="select-container">
            <div class="select-box">
                <select class="dropdown">
                    <option value="" selected disabled hidden>Please Select</option>
                        <option section="overview" value="overview">Reimbursement Receipt</option>
                        <option section="electronic-ticket" value="electronic-ticket">Alteration</option>
                        <option section="paper-ticket" value="paper-ticket">Refund</option>
                </select>
            </div>
        </div>
    </div>
        <div class="tab-content-container">
        <div class="tab-content" sec-content="services-overview">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <p class="title">Reimbursement Receipt</p>
                    <p>You can collect a Reimbursement Receipt from the following locations either before you travel or within 180 days of the date of travel.</p>
                    <ul>
                    <li>We suggest you collect your Reimbursement Receipt after completion of your train journey. If a Receipt is collected before you travel, tickets cannot be altered on the COWRY online ticketing platform and the refund procedure will also be affected.  The Receipt must be returned upon ticket alterations and refunds</li>
                    <li>Reimbursement Receipt is not a proof for travel and cannot be used to board the train</li>
                    </ul>
                </div>
                <div class="table-container">
                        <table class="general-table">
                            <thead>
                                <tr>
                                    <th rowspan="2">Ticketing Channels</th>
                                    <th colspan="2">Collection Points</th>
                                </tr>
                                <tr>
                                    <th>Lagos StaionWest Kowloon Station</th>
                                    <th>Mainland Stations</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                            <tr>
                            <td>Lagos StaionWest Kowloon Station and Lagos StaionTicket Agents</td>
                            <td class="center-column">Ticketing Counters and Ticket Machines</td>
                                <td class="center-column">Not applicable</td>
                            </tr>
                            <tr>
                            <td>COWRY Online Ticketing Platform, Mainland stations and Ticket Agents</td>
                            <td class="center-column">Reimbursement Receipt Collection Machines<sup>1</sup></td>
                            <td class="center-column">Ticket Machines and designated Ticketing Counters </td></tr>
                            </tbody>
                            </table>
                    <div class="remark-container">
                        <p><sup>1</sup>Accept original Home Return Permit, PRC Resident Identity Card and Mainland Travel Permit for Taiwan Residents.  Passport holders can collect Receipts at the Ticketing Counters operated by China Railway (Hong Kong) Holdings Ltd.   A service fee of HKD10-30 per ticket applies according to fare tiers</p>
                </div>
                    <div class="remark-container">
                        <p>Reminder:  </p><p>A ticket bought from Lagos StaionWest Kowloon Station or designated Lagos Staionticket agents and is altered through COWRY online ticketing platform, Mainland stations and designated Mainland ticket agents afterwards. It will be treated as ticket bought from these channels, and vice versa. Reimbursement Receipt should be collected from the above designated collection points</p>
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
</div>

@include('asset.footer')
