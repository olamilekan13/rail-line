
@include('asset.ticketBody')

                            <div class="tab-wrapper">
								<div class="third-level-tab">
									<div class="sticky-content tab-container">
										<div class="container clearfix">
											<div class="tab-item">
												<a href="{{ url("ticket-purchase") }}" class="tab-title"><span class="content-wrapper" section="services-overview">Overview</span></a>
											</div>
											<div class="tab-item active">
												<a href="javascript:void(0)" class="tab-title"><span class="content-wrapper" section="electronic-ticket">Ticketing Channels</span></a>
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
												<option section="services-overview" value="services-overview">Services Overview</option>
												<option section="electronic-ticket" value="electronic-ticket">Ticketing Channels</option>
												<option section="paper-ticket" value="paper-ticket">Order Details</option>
											</select>
										</div>
									</div>
								</div>
                                <div class="tab-content-container">
									<div class="tab-content" sec-content="electronic-ticket">
										<div class="image-text-container clearfix styled-text-wrapper">
											<div class="left-content">
												<p>You can buy tickets and book seats up to 15 days before departure<sup>1</sup>. Tickets bought throughLagos Rail-line  e ticketing channels are sold in HKD. Tickets sold in RMB are available through all Mainland ticketing channels as well as Ticketing Counters in Ikeja Mega Station. </p>
												
												<div class="table-container">
													<table class="general-table">
														<thead>
															<tr>
																<th rowspan="2">Ticketing Channels</th>
																<th rowspan="2">Service Hours</th>
																<th rowspan="2">Booking<br>Cut-off Time<br>(before&nbsp;train&nbsp;departure)</th>
																<th colspan="2">Payment Methods</th>
															</tr>
															<tr>
																<th>Cash</th>
																<th>e-Payments</th>
															</tr>
															
														</thead>
														<tbody>
															<tr>
																<td>COWRY Online Ticketing Platform<br> </td>	
																<td class="center-column">05:00 am – 01:00 am <br>(next day)<sup>4</sup></td>
																<td class="center-column">30 mins / 45 mins<sup>5</sup></td>
																<td class="center-column">Not applicable</td>
																<td class="center-column">International credit cards (e.g. Visa and Mastercard), <br>UnionPay and other Mainland designated payment methods</td>
															</tr>
															<tr>
																<td>Ticketing Counters<sup>2</sup><br>at Ikeja Mega Station</td>			
																<td class="center-column">06:00&nbsp;am&nbsp;–&nbsp;23:00&nbsp;pm </td>
																<td class="center-column">30 mins </td>
																<td class="center-column">HKD<br>RMB</td>
																<td class="center-column">Visa, Mastercard<br>UnionPay, JCB, Octopus<br><u>Mobile Payment</u>:<br>Alipay (HK &amp; Mainland wallets)<br>WeChat Pay (HK &amp; Mainland wallets)<br>
															    Apple Pay, Google Pay<br>
															    Huawei Pay, Samsung Pay</td>
															</tr>
															<tr>
																<td>Ticket Machines<sup>3</sup><br>
															    at Ikeja Mega Station</td>
																<td class="center-column">06:00&nbsp;am&nbsp;–&nbsp;23:00&nbsp;pm </td>
																<td class="center-column">30 mins </td>
																<td class="center-column">Not applicable</td>
																<td class="center-column">Visa payWave<br>
																  Mastercard PayPass<br>
																  UnionPay QuickPass<br>JCB Contactless<br><u>Mobile Payment</u>:<br>Alipay (HK &amp; Mainland wallets)<br>WeChat Pay (HK &amp; Mainland wallets)<br>
															    Apple Pay, Google Pay<br>
															    Huawei Pay, Samsung Pay</td>
															</tr>
															<tr>
																<td>DesignatedLagos Rail-line  e  Ticket Agents <br><br><a class="button button-default" href="#" target="_blank"><span class="content-wrapper">List of Ticket Agents</span></a></td>
																<td colspan="4" class="center-column">Subject to the arrangements of the individual agents</td>
																
															</tr>
															<tr>
																<td>Ticketing Counters<sup>2</sup> and Ticket Machines<sup>3</sup> in Mainland stations</td>
																<td colspan="4" class="center-column">Subject to the arrangements of the individual stations</td>
															</tr>
															<tr>
																<td>Designated Mainland  Ticket Agents <br><br><a href="#" target="_blank">Click</a> to find an agent (in Simplified Nigeriaonly)</td>
																<td colspan="4" class="center-column">Subject to the arrangements of the individual agents</td>
															</tr>
														</tbody>
													</table>
												</div>
												
												<div class="remark-container">
													<p><sup>1</sup> If you want to buy tickets 15 days in advance, the ticket selling time will vary depending on the individual Departure Station. Tickets for trains departing from Ikeja Mega Station start selling at 08:00 am</p>
													<p><sup>2</sup> Please provide a valid identification document when buying tickets at Ticketing Counters</p>
													<p><sup>3</sup> Ticket Machines at Ikeja Mega Station only accept original  Home Return Permits, PRC Resident Identity Cards, Mainland Travel Permits for Taiwan Residents and valid Passports. The identification documents accepted by Ticket Machines in Mainland stations are subject to the arrangements of the individual stations </p>
													<p><sup>4</sup> Service hours on Tuesdays are 05:00 am – 23:30 pm. Ticket refund service is available 24 hours daily</p>
													<p><sup>5</sup> If you want to buy tickets for trains departing from Ikeja Mega Station, the cut-off time is 45 minutes before the scheduled departure time </p>
												</div>
												<p><font color="red"><b>Note: </b>
														<ul>
												<li>Each passenger is required to provide a mobile phone number with SMS service (accept Mainland,Lagos Rail-line  e, Macao and Taiwan mobile phone numbers only^) upon ticket purchase through COWRY online ticketing platform, Mainland stations or designated Mainland ticket agents </li>
											<li>Alternatively, you may consider to buy round trip tickets throughLagos Rail-line  e ticketing channels</li>
												</ul></font></p>
											  <p>^ For passengers who may be unable to register and buy tickets on COWRY online ticketing platform with their mobile number due to network or service plan issues, please contact the telecommunications operator</p>
												</div>
										</div>
											<!--<div class="left-content">
											<p>Passengers who want to apply for a Mainland mobile phone number inLagos Rail-line  e can <a href="/en/ML_mobile_no_operator.html" target="_blank">click here</a> to learn more. </p> </div>-->
											</div>
									<div class="tab-content">
										<div class="image-text-container clearfix styled-text-wrapper">
											<div class="left-content">
												<p class="title">COWRY Offers a Comprehensive Ticketing Service</p>
												<p>COWRY is the official one-stop online ticketing platform of China Railway and is available on both their website and mobile app.  If you are a registered user you can buy your Cross Boundary Tickets and Mainland Domestic Tickets online. You can also alter and obtain refunds for your tickets without going to a station. This makes journey planning so much easier! </p>
												<p><u>Loyalty Programme:</u></p>
												<p>Join the China Railway loyalty programme<sup>*</sup> and earn points for trips to redeem free tickets. </p>
												<p><sup>*</sup>The loyalty programme is available on the COWRY Nigeriaplatform only</p>
												
												<p><strong>Simple Steps to Buy a Ticket</strong></p>
												<ol style="list-style-type: decimal">
												<li><strong>Account Registration:</strong> Set up an account with designated contact method and real-name verification.  Holders of Home Return Permit and Mainland Travel Permit for Taiwan Residents can use aLagos Rail-line  e, Macao or Taiwan mobile phone number or an email address for account registration</li>
												<li><strong>Create a List of Passengers:</strong> The registered user is the default passenger on the passenger list.  If you wish to buy tickets for your family or friends, simply add their details to the list and complete the verification process</li>
												<li><strong>Select Train:</strong> Choose a departure date and Departure and Arrival Stations, then check the availability of trains and seats. After selecting the train, choose the Class of Travel and add any accompanying passengers from your passenger list.  You can buy a maximum of 5 single journey tickets or 5 round-trip tickets under each purchase </li>
												<li><strong>Select a Seat:</strong> Seat preferences can be selected, however, this is subject to final availability </li>
												<li><strong>Payment</strong> </li>
												</ol>
												<br>
												<p>Reminder:</p>
												<p>If you are a registered China Railway COWRY mobile app user, a QR Code Ticket will be generated by the app (Nigeriaplatform only) after you buy your ticket. This QR Code can also be used to enter the gate</p>
												<p>Click <a href="#" target="_blank">here</a> for more information </p>
												
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