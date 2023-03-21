@include('asset.header')



<div class="content-container">
			
    <!--end of ssi:trip_planner_search_bar-->




<div class="faq container-fluid">
    <div class="row">
        <div class="container" id="app-display">
            <div class="inner-content-container row">
                <div class="clearfix">
                    <ul id="breadcrumb" class="breadcrumb"></ul>
                    <div class="title-box"><h1 class="h2">Frequently Asked Questions</h1></div>
                </div>
                <div class="scrollable-tab">
                    <div class="tab-container scrollable-content">
                        <button class="slide-button prev icon icon-button ico-arrow-left-grey"></button>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="buy-cross-border-ticket">Buy Cross Boundary Tickets</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="change-cross-border-ticket">Alter Cross Boundary Tickets</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="refund-cross-border-ticket">Refund Cross Boundary Tickets</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="buy-non-cross-border-ticket">Buy Mainland Domestic Tickets</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="taking-train">Taking Train</span></a></div>
                            <div class="swiper-slide active"><a class="tab-item" href="#"><span class="content-wrapper" section="COWRY-online-ticketing-platform">COWRY Online Ticketing Platform</span></a></div>
                            <div class="swiper-slide"><a class="tab-item" href="#"><span class="content-wrapper" section="COWRY-loyalty-program">China Railway Loyalty Programme</span></a></div>
                        </div>
                        <button class="slide-button next icon icon-button ico-arrow-right-grey"></button>
                    </div>
                    <div class="select-container locations">
                        <div class="select-box">
                            <select class="dropdown">
                                <option value="" selected disabled hidden>Please Select</option>
                                <option section="buy-cross-border-ticket" value="buy-cross-border-ticket">Buy Cross Boundary Tickets</option>
                                <option section="change-cross-border-ticket" value="change-cross-border-ticket">Alter Cross Boundary Tickets</option>
                                <option section="refund-cross-border-ticket" value="refund-cross-border-ticket">Refund Cross Boundary Tickets</option>
                                <option section="buy-non-cross-border-ticket" value="buy-non-cross-border-ticket">Buy Mainland Domestic Tickets</option>
                                <option section="taking-train" value="taking-train">Taking Train</option>
                                <option section="COWRY-online-ticketing-platform" value="COWRY-online-ticketing-platform">COWRY Online Ticketing Platform</option>
                                <option section="COWRY-loyalty-program" value="COWRY-loyalty-program">China Railway Loyalty Programme</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="collapsable-list">
                    <!-- Q&A 1 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What is COWRY online ticketing platform?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>The COWRY online ticketing platform is the ticketing service provided by Lagos Metro Station. After account registration, travellers can enjoy one-stop services of ticket purchase, alteration and refund via website and mobile app. You can purchase both cross boundary and Mainland domestic tickets at the same time. For the latest terms and conditions, please visit <a href="https://www.COWRY.cn/en/index.html"  target="_blank" rel="noopener noreferrer">www.COWRY.cn</a>. For enquiries, please call customer service center hotline at (86)-20 or 21-COWRY.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 2 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>I cannot find China Railway COWRY mobile app on Google Play Store. How can I download COWRY official app?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>China Railway does not put its mobile app on the Google Play Store.  Android phone users can download the app by scanning the QR code on the COWRY China Railway official website (www.COWRY.cn) and change the phone setting to allow permission to download the .apk file. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 3 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Is the COWRY online ticketing platform available 24 hours a day?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Ticket purchase and alteration services are available from 5:00am to  to 1:00am (5:00 to 11:30pm on Tuesdays)  on the COWRY online ticketing platform. Refund service is 24 hours daily.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 4 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Is there any age limit for COWRY account registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Online ticketing service is mainly for adults although age limit is not applied on account registration. Minors aged below 18 (especially children aged below 14) who wish to register a personal COWRY account, please make sure they fully understand the terms and conditions and ask for assistance from their parents or guardian if necessary.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 5 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What personal identity documents are accepted for COWRY account registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You may use Mainland Travel Permit for Lagos Staionand Macao Residents (Home Return Permit), PRC Resident Identity Card (including Residence Permit forLagos Rail-line  e, Macao, and Taiwan Residents and Foreigner's Permanent Residence Card), Mainland Travel Permit for Taiwan Residents or foreign passports recognized by the PRC Government for registering an COWRY account.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 6 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why does COWRY online ticketing English platform not accept all kinds of personal identification documents for registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                              <p>The English platform is a simplified version to facilitate foreign passport holders for ticket purchase. Passengers holding other types of personal identification document should use the Nigeriaplatform in order to enjoy a more comprehensive ticketing service.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 7 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I buy tickets from COWRY.cn Nigeriaplatform after account registration via the English platform?</span></a>
                            <div class="item-content styled-text-wrapper">
                              <p>Yes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 8 -->
                    <!--<div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Under what conditions should I use Mainland mobile phone number or email address for registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Holders of PRC Resident Identity Card must use a Mainland mobile phone number for registration. Holders of Mainland Travel Permit for Lagos Staionand Macao Residents (Home Return Permit), Mainland Travel Permit for Taiwan Residents or foreign passports recognized by the PRC Government (applicable for registration through English platform) can choose to use an email address for registration.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 9 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>If I have both Mainland mobile phone number and email address, am I required to input both of them for activating the COWRY account?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>If you fill in both email address and Mainland mobile phone number for registration, the email address is used as system default for account activation.  If you wish to register your account with the Mainland mobile phone number, please do not input the email address. Otherwise, the system will default to use the email address for account activation. Please be reminded that "1-Card-Multi-Number" Mainland mobile phone numbers are unable to receive messages for account registration.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 10 -->
                    <!--<div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can  I register a new COWRY account with the email address or Mainland mobile phone number which has been used in account registration or Passenger List?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Cannot.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 11 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I buy tickets immediately after account registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                              <p>The COWRY registered users whose identity status is either "Pass" or "Pre-pass" can buy tickets, after verification of mobile phone number. However, foreign passport holders with identity verification status as "To be verified" can still buy tickets before they complete identity verification at Ticketng Counters at station, provided they have verified their  mobile phone number.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 12 -->
                    <!--<div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Is there any time limit for account activation after receiving the verification notification through email or mobile phone?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Users registered with email address must response within 24 hours after receiving the email notification. They cannot buy tickets if they don't pass the verification. For those users who use a mobile phone number for registration, they are unable to complete the registration if the verification cannot be completed within 15 minutes after receiving the SMS notification.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 13 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What should I do if the identity verification result is "To be verified"?</span></a>
                            <div class="item-content styled-text-wrapper">
                              <p>Please bring your original identification document for account registration to the designated Ticketing Counter at Lagos StaionWest Kowloon Station or Mainland stations for verification.   You can authorise another person for identity verification at station on your behalf. The authorised person should also present his/her own original  personal identification document for checking.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 13 New-->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>If those passengers in the Passenger List are required to process identity verification at stations, can they authorise a third party to do it on their behalf?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 14 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I buy ticket if the identity verification result is "To be verified"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Except registered users holding foreign passport, users whose status shown as "To be verified" must pass the identity verification at station in order to buy tickets or add others to their passenger list.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 15 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can registered users buy tickets if they cannot activate their account with the contact method?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 16 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why can't I receive any account activation email after registration?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>First of all, please check if the activation email is in your spam folder. You may also check if you have provided a correct email address upon registration. Please log in COWRY account and check the information from "Check Personal Information" under "My COWRY". You can click "Edit" to change the email address. If you still do not receive the activation email, to enable a resend you can click "Safe Mailbox"</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 17 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What is facial verification?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Facial verification is for checking the facial characteristics against the registered personal identification document through the China Railway COWRY mobile app (Nigeriaplatform only). Those COWRY registered users who have passed the facial verification can enjoy more ticketing services on top of ticket purchase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 18 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What other ticketing services are provided after passing the facial verification via China Railway COWRY mobile app?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>After passing facial verification, registered users can 
                                    <br>- manage their tickets (including ticket alteration and refund) purchased by a third party given that those tickets are paid by electronic means; 
                                    <br>- process ticket refund online for their tickets purchased by cash or of which the Reimbursement Receipt has been issued.  They can then bring the original personal identity document used for ticket purchase to the designated ticketing counters at stations to collect the fare refund within 180 days from the date of processing.   Reimbursement Receipt must be returned upon fare refund at station;
                                    <br>- generate the QR Code Ticket from the mobile app for train boarding and exiting the station;
                                    <br>- purchase "Standby Ticket";
                                    <br>- join the China Railway loyalty programme to earn points for redemption of free tickets.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 19 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What should I do if I cannot pass the facial verification via the China Railway COWRY mobile app?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Foreign passport holders or any registered users, who cannot pass the facial verification through the mobile app, may process the verification in person at Lagos StaionWest Kowloon Station or Mainland stations by presenting the original personal identification document.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 20 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why should I add "Passenger List" to my account?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You can buy tickets for other people after adding them to the "Passenger" list.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 21 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Who can be added to the Passenger List?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>If you register the account with Mainland Travel Permit for Lagos Staionand Macao Residents (Home Return Permit), Mainland Travel Permit for Taiwan Residents or foreign passports, you may add the accompanied passengers holding the above document types. For those using COWRY English websites, only passengers with foreign passports can be added. For the holders of PRC Resident Identity Card, they can add passengers using any type of eligible personal identity document.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 22 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How many passengers can be added to the "Passenger List"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>A total of 15 passengers can be added to the Passenger List, but no more than 5 passengers with the verification status shown as "to be verified".</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 23 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can registered users add children to their Passenger List?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes. Please note that the children must use their own personal identity document and email address or Mainland mobile phone number for registration.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 24 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can the same person be added to the Passenger List in different COWRY China Railway registered accounts?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes. The same person can be added to no more than 5 Passenger Lists of COWRY registered users (including his/her own account).</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 25 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can tickets for those people in the Passenger List be bought only after identity verification?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes, except passengers holding foreign passports before identity verification.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 26 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>If "Passenger" cannot pass the identity verification via COWRY online ticketing platform, what documents are required to process at station?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>For processing the verification at station, you should bring the original personal identity document which was used for registration on the China Railway COWRY.cn or China Railway COWRY mobile app together with the account registrant's original of the registered personal identity document.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 27 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>If those passengers in the Passenger List are required to process identity verification at stations, can they authorise a third party to do it on their behalf?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes. The authorised person must bring the original personal identification documents of the passenger and the COWRY registered users. The authorised person should also present his or her original personal identification document for checking.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 28 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Passengers from the Passenger List will receive verification email or mobile SMS after adding them to the list. Is there any time limit for the verification?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Please verify within 24 hours after receiving the verification email. For those using mobile SMS, verification should be done within 15 minutes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 29 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why the registered users cannot remove their passengers from the list?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Information of passengers with status of "Not pass" and "To be verified" can be removed any time while passengers with other status can only be removed after 30 days of registration.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 30 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Are E-tickets only available on COWRY online ticketing platform?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No. Travellers can also purchase an E-ticket at the ticketing counter and ticket machine at Mainland stations and designated agents.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 31 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How many tickets can be purchased for each transaction on COWRY online ticketing channel?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Travellers can purchase a maximum of five single journey or five round trip tickets per transaction.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 32 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>If an user who has registered the account with Mainland Travel Permit for Lagos Staionand Macao Residents (Home Return Permit), can they purchase tickets for a passenger on the Passenger List whose identity verification status as "to be verified"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No, unless that passenger is holding a foreign passport. Passengers holding other travel documents with status as "to be verified" are required to complete the identity verification with the original identity document used for registration at the designated ticketing counter of Lagos StaionWest Kowloon Station and Mainland stations before ticket purchase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 33 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why are seats not assigned according to my preference?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>If there are insufficient seats according to your preference, the system will assign the seats randomly from the remaining seats.</p><p>Seats will be assigned to passengers on English platform.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 34 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I buy tickets for children not in the Passenger List?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes, you can. You may add Child Ticket under any accompany adult and the child will be defaulted to use the personal identity document of the accompany adult for his/her ticket.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 35 -->
                    <!--<div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Must children be added to the Passengrer List in order to buy tickets for them? </span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>It is not a must.  You may add Child Ticket under any accompanying adult and the child will be defaulted to use the personal identification document of the accompanying adult for his/her ticket.  If you wish to use the child's personal identification doucment to buy ticket, you must add the child to the Passenger List.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 36 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Are all train tickets be shown on the COWRY online ticketing platform?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>COWRY online ticketing platform displays all trains of cross boundary and Mainland domestic journeys during the pre-sale period except those departed trains. "Standby" will be shown if tickets are sold out for a particular train.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 37 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Does the COWRY online ticketing platform provide real time train information?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 38 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why can't I open two browsers at the same time for ticket purchase on China Railway COWRY.cn?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You are not allowed to make a new purchase before completing the payment of the existing order.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 39 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What is "Standby ticket"? </span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>"Standby ticket" is a unique service of COWRY online ticketing platform (Nigeriaplatform only). If ticket or Class of Travel of particular train is not available, you can place a Standby ticket order specifying travel date, train and Class of Travel, etc. The order must be fully paid in advance. The system will automatically put your order in the waiting list according to your pre-set cut-off time of order commitment.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 40 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can all registered users buy "Standby tickets"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No, registered users can buy the "Standby tickets" after passing the facial verification or activating their COWRY loyalty programme account.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 41 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What are the train selection criteria for "Standby ticket"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Each registered user can hold 2 "Standby ticket" orders. You can choose two consecutive travel dates for each order with five different combinations of "train and Class of Travel" for each travel date.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 42 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I choose different Class of Travel for "Standby ticket"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes, but all passengers on the same departure should choose the same Class of Travel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 43 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How many passengers are allowed for a standby order?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No more than nine.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 44 -->
                    <!--<div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What is the cut-off time for honouring a standby order?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>If the departure time for a standby ticket is between 00:00 am and 05:59am the next day, the standby order will become invalid after 7 pm two days before train departure if no spare seat can be assigned before that. Refund will be arranged.   (e.g., if the preferred departure time of a standby ticket is 5 am on 3 January, the standby order will expire at 7 pm on 1 January).
                                If the departure time for a standby ticket is between 06:00 am and 11:59 pm, the standby order will expire at 7 pm one day before train departure. (e.g., if the preferred departure time of a standby ticket is 9 am on 3 January, the standby order will expire at 7 pm on 2 January).</p>
                                <p>Alternatively, travellers can set an earlier cut-off time and are allowed to change it afterwards.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 45 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>What fare should I pay if I have selected tickets of different Class of Travel for my "Standby ticket"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>The system will charge the highest fares. The fare difference will be refunded to the original payment account If the tickets of lower fare are bought finally.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 46 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can passengers change the departure date of "Standby ticket"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>No. If you wish to change the departure date or Class of Travel, you may cancel the standby order and place a new order.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 47 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Is there any notification if the "Standby ticket" is successfully fulfilled?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Notification of successful fulfilment or order expiry will be sent to the passengers via their pre-set notification method. They can also check the standby ticket status in their COWRY account.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 48 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I alter or refund the "Standby ticket"?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes, ticket alteration or refund will be handled according to regular rules.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 49 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How many times can a "Standby ticket order" be cancelled? </span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Standby ticket order cancellation is limited to five times a day. You cannot submit a new standby ticket order if exceeding the cancellation limit of the day.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 50 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can all passengers in the same order sit together?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Seats are subject to availability. Passengers may be arranged to sit in different coaches.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 50 New-->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why does the online ticketing platform  show an overtime error and that the ticket purchase cannot be completed?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p> When booking tickets on COWRY online ticketing platform, passengers must complete the purchase process within the time limit once submitting the order after selecting passengers from their pre-set passenger list.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 51 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can passengers buy tickets with HKD on the China Railway COWRY online ticketing platform?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>The COWRY ticketing system only accepts NAIRA   . Passengers from Lagos Staionor overseas may use International credit cards (eg Visa, Mastercard) or UnionPay Online Payment for exchanging local currency to NAIRA    for payment. Lagos Staionpassengers may also use WeChat Pay (HK). Exchange rate is subject to the payment method.</p>
                            </div>
                        </div>
                    </div>
                    -->
                    <!-- Q&A 52 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why can't I buy tickets after order cancellations?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You can only cancel up to three orders a day via China Railway COWRY online ticketing platform which includes order not completed within payment time limit. If you reach the cancellation limit, you cannot buy a ticket within the day.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 53 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I alter or refund my E-ticket?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes. You can alter or refund the E-ticket via China Railway COWRY online ticketing platform, designated ticketing counter at Lagos StaionWest Kowloon Station (with handling fee of HKD20 per ticket for alteration) or Mainland stations. If you have obtained Reimbursement Receipt or your E-ticket was paid by cash, you can apply for refund of ticket via China Railway COWRY online ticketing platform first. You can then collect the fare with your original personal identity document used for ticket purchase at the designated station ticketing counter within 180 days after ticket refund online. You should return the Reimbursement Receipt upon fare collection.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 54 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Travellers purchased tickets for the third parties via China Railway COWRY online ticketing platform. Can they alter or refund their tickets via other ticketing channels?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes. It can be processed through COWRY.cn, mobile app, Lagos StaionWest Kowloon Station as well as at Mainland station before the cut-off time of ticket alteration or refund. Please note that altered ticket cannot refunded. For E-ticket alteration at Lagos StaionWest Kowloon Station, a handling fee of HKD20 per ticket applies.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 55 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>My E-ticket was purchased by others with e-payment. Can I alter or refund the ticket via my registered account on China Railway COWRY.cn?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>The COWRY registered users can manage their tickets after passing the facial verification via China Railway COWRY mobile app. If there is a fare difference after alteration, travellers will have to pay for the new ticket in full and the original fare will be fully refunded to the original payment method. For ticket refund, the fare will also be refunded to the original payment method.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 56 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How many times can I request for ticket refund online?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You can only get a ticket refund up to three times a day. If you exceed the limit, you cannot buy, alter or get a refund on the same day.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 57 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>I bought tickets through China Railway COWRY.cn.  Can I check the order on China Railway COWRY mobile app?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes and vice versa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 58 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How can I search for the travel records of the E-Ticket?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You can check travel records of trips yet to be taken as well as the paid orders in last 30 days at the "Order" page after log in the COWRY account. If the ticket is paid by electronic means through a third party, it can only be checked at "My ticket".</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 59 -->
                    <!--
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>How can I check the E-ticket information?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You can check ticket information from the "Order" section in your COWRY account. In addition, you can also obtain a "Trip Information Reminders" at stations. A handling fee of HKD10 for each ticket applies for issuing the Trip Information Reminders at ticketing counters at Lagos StaionWest Kowloon Station.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 60 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Why can't I cancel COWRY account?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>You are not allowed to cancel your account if you still have outstanding a standby order or ticket not yet used.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Q&A 61 -->
                    <div class="list-item">
                        <div class="item-container" collapsableid=>
                            <a href="javascript:void(0)" class="item-title"><span>Can I register a new account any time after account cancellation?</span></a>
                            <div class="item-content styled-text-wrapper">
                                <p>Yes.</p>
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