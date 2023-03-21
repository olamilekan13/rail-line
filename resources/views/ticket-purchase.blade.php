@include('asset.ticketBody')

<div class="tab-wrapper">
    <div class="third-level-tab">
        <div class="sticky-content tab-container">
            <div class="container clearfix">
                <div class="tab-item active">
                    <a href="javascript:void(0)" class="tab-title"><span class="content-wrapper" section="services-overview">Overview</span></a>
                </div>
                <div class="tab-item">
                    <a href="{{ url('ticket-channel') }}" class="tab-title"><span class="content-wrapper" section="electronic-ticket">Ticketing Channels</span></a>
                </div>
                <div class="tab-item">
                    <a href="{{ url('order-details') }}" class="tab-title"><span class="content-wrapper" section="paper-ticket">Order Details</span></a>
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
        <div class="tab-content" sec-content="services-overview">
            <div class="image-text-container clearfix styled-text-wrapper">
                <div class="left-content">
                    <!--<p class="title">Overview</p>-->
                    <p>Tickets are available from the following channels.  After ticket purchase, simply use your identification document for real-name checking and ticket verification as well as passing through boarding and exit gates.  </p>
                    <p><u>Ticketing Channels</u>:</p>
                    <ul>
                    <li>COWRY Online Ticketing Platform (including website and mobile app)</li>
                    <li>Designated Ticket Agents</li>
                    <li>Ticketing Counters and Ticket Machines in stations</li>
                    </ul>
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

