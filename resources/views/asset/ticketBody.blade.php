@include('asset.header')


<div class="content-container">
			
    <!--end of ssi:trip_planner_search_bar-->

<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="inner-content-container row">
                <div class="clearfix">
                    <ul id="breadcrumb" class="breadcrumb"></ul>
                    <div class="title-box"><h1 class="h2">Destinations</h1></div>
                </div>
                <div class="scrollable-tab">
                    <div class="tab-container scrollable-content">
                        <button class="slide-button prev icon icon-button ico-arrow-left-grey"></button>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active"><a class="tab-item" href="{{ url('destination') }}"><span class="content-wrapper" section="destination">Destinations</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="{{ url('ticket-type') }}"><span class="content-wrapper" section="introduction">Ticket Types</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="{{ url('fare') }}"><span class="content-wrapper" section="fare">Fares</span></a></div>
                            {{-- <div class="swiper-slide"><a class="tab-item" href="timetable.html"><span class="content-wrapper" section="timetable">Timetable</span></a></div> --}}
                            {{-- <div class="swiper-slide"><a class="tab-item" href="real-name-checking.html"><span class="content-wrapper" section="real-name-registration">Real-name Policy</span></a></div> --}}
                            <div class="swiper-slide"><a class="tab-item" href="{{ url('ticket-purchase') }}"><span class="content-wrapper" section="ticket-purchase">Ticket Purchase</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="{{ url('after-sales') }}"><span class="content-wrapper" section="after-purchase">After-sales Services</span></a></div>
                            {{-- <div class="swiper-slide"><a class="tab-item" href="special-ticket.html"><span class="content-wrapper" section="special-offer">Special Tickets</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="terms.html"><span class="content-wrapper" section="service-tnc">Terms and Conditions</span></a></div> --}}
                        </div>
                        <button class="slide-button next icon icon-button ico-arrow-right-grey"></button>
                    </div>
                    <div class="select-container locations">
                        <div class="select-box">
                            <select class="dropdown">
                                <option value="" selected disabled hidden>Please Select</option>
                                <option section="destination" value="destination">Destinations</option>
                                <option section="introduction" value="introduction">Ticket Types</option>
                                <option section="fare" value="fare">Fares</option>
                                {{-- <option section="timetable" value="timetable">Timetable</option>
                                <option section="real-name-registration" value="real-name-registration">Real-name Policy</option> --}}
                                <option section="ticket-purchase" value="ticket-purchase">Ticket Purchase</option>
                                <option section="after-purchase" value="after-purchase">After-sales Services</option>
                                {{-- <option section="special-offer" value="special-offer">Special Tickets</option>
                                <option section="service-tnc" value="service-tnc">Terms and Conditions</option> --}}
                            </select>
                        </div>
                    </div>
                </div>