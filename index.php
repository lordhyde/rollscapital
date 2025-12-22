<?php
require_once('init.php');
$page = 'index';
$title = '';
require_once('header.php') ?>
	<div class="row-fluid" id="slider">
		<!-- Carousel
		================================================== -->
		<div id="homeSlider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#homeSlider" data-slide-to="0" class="active"></li>
				<li data-target="#homeSlider" data-slide-to="1"></li>
				<li data-target="#homeSlider" data-slide-to="2"></li>
				<li data-target="#homeSlider" data-slide-to="3"></li>
				<li data-target="#homeSlider" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="img/home1.jpg" alt="First slide">
				</div>
				<div class="item">
					<img class="second-slide" src="img/home2.jpg" alt="Second slide">
				</div>
				<div class="item">
					<img class="third-slide" src="img/home3.jpg" alt="Third slide">
				</div>
				<div class="item">
					<img class="third-slide" src="img/home4.jpg" alt="Third slide">
				</div>
				<div class="item">
					<img class="third-slide" src="img/home5.jpg" alt="Third slide">
				</div>
			</div>
			<a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div><!-- /.carousel -->
	</div>
	<div class="row-fluid" id="maincontent">
		<div class="bottomimage">
			<div class="container">
				<div class="topblock">
					<h1>Welcome to Rolls Capital Advisors</h1>
					<p>Rolls Capital is an independent financial advisory company which specialises in assisting its clients with wealth management and investment planning services  in order to help them reach their long term financial objectives, including saving for their children’s education and pensions. We offer access to a wide range of secure, regulated investment funds with the leading international financial institutions around the world, with the additional option to invest in US dollars and other hard currencies.</p>
					<p class="text-right readmore"><a href="about">Continue Reading...</a></p>
				</div>
			</div>
			<img src="img/abajo-06.jpg">
		</div>
		<div class="container">
			<div class="row">
			</div>
			<div class="row second-row">
				<div class="col-sm-7">
					<div class="row">
						<iframe width="97%" height="300" src="https://www.youtube.com/embed/DyZwBgns4zA" frameborder="0" allowfullscreen></iframe>
						<p class="nota">This "SKY NEWS" broadcast is an educational and informational service. Rolls Capital Advisors LTD has no relation to "SKY NEWS" or any of "their companies". This video is shown for educational and informative purposes only for people who visit our website. We will update it regularly with different broadcasts to help our clients have access to financial and global news.</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<iframe frameborder="0" scrolling="no" height="400" width="300" allowtransparency="true" marginwidth="0" marginheight="0" src="http://tools.investing.com/market_quotes.php?tabs=2,1,3,4&tab_1=1,2,3,5,6,7,9,11,13,39&tab_2=27,166,167,170,172,174,176,177,179,40830&tab_3=8830,8831,8832,8833,8834,8836,8848,8849,8860,8862&tab_4=8880,8907,8900,8899,8886,8895,8905,8906,8986,13917&select_color=000000&default_color=0059b0"></iframe>
						</div>
						<div class="col-md-6">
							<iframe frameborder="0" scrolling="no" height="400" width="379" allowtransparency="true" marginwidth="0" marginheight="0" src="http://eqrates.investing.com/index.php?pairs_ids=277;347;6369;6408;474;243;282;284;260;7888;8082;267;287;252;334;295;&header-text-color=%23FFFFFF&curr-name-color=%230059b0&inner-text-color=%23000000&green-text-color=%232A8215&green-background=%23B7F4C2&red-text-color=%23DC0001&red-background=%23FFE2E2&inner-border-color=%23CBCBCB&border-color=%23cbcbcb&bg1=%23F6F6F6&bg2=%23ffffff&open=hide&high=hide&low=hide&last_update=hide"></iframe>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="row">
						<h2>Our Products & Services</h2>
						<p>Our qualified, independent advisors will assess your personal financial situation and advise you on how to find the product best-suited to your individual needs in order to achieve your objectives. Furthermore, we will guide you on how to manage and protect your wealth and maximise its growth potential in an ever-changing economic environment. We also provide our clients with complete confidentiality and asset protection, so you know you’re in safe hands when using our services.</p>
						<p class="text-right readmore"><a href="products">Continue Reading...</a></p>
					</div>
					<div class="row">
						<h2>Careers</h2>
						<p>We’re always looking to expand our team of expert financial advisors.  If you’re interested in an exciting career in finance and describe yourself as confident, self-motivated and reliable, we´d love to hear from you.<br>&nbsp;</p>
						<p class="text-right readmore"><a href="careers">Continue Reading...</a></p>
					</div>
					<div class="row">
						<h2>Contact Us</h2>
						<p>For further information about our products and services, or to arrange an appointment with one of our financial advisors, please send an email to info@rollscapital.com  with your details and we’ll be in contact as soon as possible.</p>
						<p class="text-right readmore"><a href="contact">Continue Reading...</a></p>
					</div>
				</div>
			</div>
			<div class="row">&nbsp;<br>&nbsp;</div>
			<div class="row quotes">

				<div class="converter">
					<style type="text/css">
						.converter a {
							color:#002A7F;
						}
						.converter .underlineDotted a, .converter a.underlineDotted {
							text-decoration:none;
							border-bottom:1px dotted #666666;
						}
						.converter img{
							border:0;
						}
						.converter ol {
							padding-right:20px;
							margin-bottom:5px;
							margin-top:5px;
						}
						.converter ul {
							padding-right:20px;
							margin-bottom:5px;
							margin-top:5px; 
							list-style-image:url(/gen/images/bullet.gif);
						}
						.converter h1 {
							margin:0px;
							font-size:150%;
							font-weight:normal;
							font-family:arial,sans-serif;
							color:#b8c3cc;
						}
						.converter h2 {
							margin:0px;
							font-size:155%; 
							font-weight:bold;
							font-family:arial,sans-serif;
						}
						.converter hr {
							border: none 0; 
							border-top: 1px solid #CCCCCC;
							height: 1px;
						}
						.converter table {
							border-collapse:collapse;
						}
						.converter form{
							margin:0px;
						}
						.converter sup{
							vertical-align: top;
						}
						.converter  #home_main{
							width:924px;
							clear:both;
							margin: 0px auto;
						}
						.converter #home_leaderboard{
						/*
							padding-left:20px;
						*/
						}

						/* MAIN STRUCTURE */
						.converter .mainWidth{
							width:100%;
							min-width:764px;
						}
						.converter .XEmainWidth{
							width:764px;
							min-width:764px;
						}
						.converter .footerWidth{
							width:100%;
						}
						.converter .sideWidth, .converter .XEsideWidth{
							width:2%;
							min-width:15px;
						}
						.converter .marginBot, .converter .XEmarginBot {
							margin-bottom:8px;
						}
						.converter .marginTop {
							margin-top:13px;
							padding-top:9px;
						}

						/* HEADER */

						.converter .bgHeader {
							font-size:100%;
							background-color:#003c66;
							color:#b8c3cc;
							height:62px;
							padding:3px 4px 0px 0px;
						}
						.converter .navigation {
						  clear: both;
						  float: left;
						  width: 100%;
						  margin-bottom: 3px;
						}
						.converter .newLogo {
						  clear: left;
						  float: left;
						  padding-top: 5px;
						}
						.converter .newHeader {
						  clear: both;
						  margin: 0 25px;
						}
						.converter .logo{
							background-color:#003c66;
							background-position: 0px 0px;
							color:#b8c3cc;
							width:60px;
							padding:4px;
							text-align:center;
						}
						.converter .logoText{
							padding:0px 0px 0px 10px;
						}
						.converter .search{
							color:#b8c3cc;
							font-size:90%;
							width: 550px;
							float: right;
							padding-right: 3px;
							padding-top: 5px;
						}
						.converter .search a{
							color:#FFFFFF;
						}
						.converter .search_stuff {
						  float: right;
						  margin-top: -4px;
						}
						.converter .search_items {
						  vertical-align: middle;
						  top: 50%;
						}
						.converter .search_item {
						  float: left;
						  height: 2em;
						  line-height: 2em;
						  vertical-align: middle;
						}
						.converter .searchLink {
						  padding-top: 2px;
						}

						/* FOOTER */
						.converter .bgHeader {
							font-size:100%;
							background-color:#005590;
							background-image: url(/gen/images/bg_header.gif); 
							background-repeat:repeat-x;
							color:#b8c3cc;
							height:62px;
							padding:3px 4px 0px 0px;
						}
						.converter .bgFooter {
							font-size:95%;
							background-color:#005590;
							background-position: 0px -138px;
						  height: 22px;
							color:#b8c3cc;
							margin-left:23px;
							margin-right:23px;
						}
						.converter .footerTextWrapper {
						  padding-top: 4px;
						}
						.converter .footerLeft {
						  float: left;
						  padding-left: 7px;
						}
						.converter .footerRight {
						  float: right;
						  padding-right: 4px;
						}
						.converter .footerText{
							font-size:75%;
							color:#b8c3cc;
						}
						.converter .footerText a {
							color:#FFFFFF;
						}

						/* MAIN STYLES */
						.converter .heading {
							font-family:Arial,Helvetica,sans-serif; 
							font-size:175%; 
							color:#006fbe; 
							font-weight:bold; 
							margin-top:0px;
						}
						.converter .subTitle {
							font-family:Arial,Helvetica,sans-serif;
							font-weight:bold;
							font-size:125%;
							font-style:italic;
							color:#002d4d;
						}
						.converter .disabled {
							font-size:95%;
							color:#000000;
							background-color:#FFFFFF;
							border:1px #7f9db9 solid;
							height:14px;
							padding:2px;
							min-width:71px;
							margin-right:2px;
							text-align:left;
						}
						.converter .pca {
							font-size:90%;
							color:#000000;
						}
						.converter .printFloat {
							position:relative;
							left:155px;
							top:26px;
						}
						.converter .hilite, .converter .XEhilite {
							color:#218fd9;
						}
						.converter .small, .converter .XEsmall {
							font-size:75%;
							color:#000000;
						}
						.converter .reqd, .converter .XEreqd {
							font-size:95%;
							color:#cc3d3d;
							font-weight:normal;
							font-style:normal;
						}
						.converter .red, .converter .XEred {
							color:#cc3d3d;
						}
						.converter .warning{
							color:#cc3d3d;
							font-weight:bold;
							border:1px solid #b8c3cc;
							padding:6px;
							text-align:center;
							font-size:130%;
						}
						.converter .imp {
							font-size:95%;
							color:#999999;
						}
						.converter .opt {
							font-size:95%;
							color:#999999;
						}
						.converter .white,.converter .XEwhite {
							color:#FFFFFF;
						}
						.converter .XEgrey {
							color:#f2f5f7;
						}
						.converter img.flag {
							opacity: 0.5;
							filter: alpha(opacity=50);
							vertical-align:baseline;
						}
						.converter .alignBottom {
							vertical-align:bottom;
						}
						.converter .alignTextBottom {
							vertical-align:text-bottom;
						}
						.converter .alignBaseline {
							vertical-align:baseline;
						}
						.converter ul.sideMenu,.converter ul.XEsideMenu {
							margin-left:10px;
							padding-left:10px;
							margin-right:0px;
							padding-right:0px;
							line-height:18px;
						}

						/* TABLE STYLES */
						.converter .tbl_sub,.converter .XEtbl_sub {
							font-size:100%;
							background-color:#FFFFFF;
						}
						.converter .tbl_main,.converter .XEtbl_main {
							font-size:105%;
							border-style:solid; 
							border-width:1px; 
							border-color:#b8c3cc;
							margin-bottom:8px;
							background-color:#FFFFFF;
						}
						.converter .XEtblHilite {
							font-size:105%;
							border-style:solid; 
							border-width:1px; 
							border-color:#b8c3cc;
							margin-bottom:8px;
							background-color:#d9edff;
						}
						.converter .XEtblBg {
							font-size:115%;
							background-color:#f5faff;
						}
						.converter .tbl_main .title, .converter .XEtbl_main .XEtitle {
							font-family:Arial,Helvetica,sans-serif;
							color:#003c66;
							font-weight:bold;
							font-style:italic;
							font-size:105%;
							background-color:#eff6fa;
							background-repeat:repeat-x;
							padding:2px;
							border-bottom:#b8c3cc 1px solid;
						}
						.converter .tbl_main .titleAlibaba{
							color:#f76400;
							font-weight:bold;
							font-style:italic;
							font-size:105%;
							background-color:#eff6fa;
							background-repeat:repeat-x;
							padding:2px;
							border-bottom:#b8c3cc 1px solid;
						}
						.converter .tbl_main .titleReg,.converter .XEtbl_main .XEtitleReg {
							font-size:90%;
							padding:2px;
							font-family:Arial,Helvetica,sans-serif; 
							background-repeat:repeat-x;
							background-color:#eff6fa; 
							border-bottom:#b8c3cc 1px solid;
						}
						.converter .tbl_main .titleRegAlibaba {
							color:#f76400;
							font-size:90%;
							padding:2px;
							font-family:Arial,Helvetica,sans-serif; 
							background-repeat:repeat-x;
							background-color:#eff6fa; 
							border-bottom:#b8c3cc 1px solid;
						}
						.converter .tbl_main .subTitle,.converter  .XEtbl_main .XEsubTitle {
							font-family:Arial,Helvetica,sans-serif;
							font-weight:bold;
							font-size:110%;
							font-style:italic;
							color:#666666;
						}
						.converter .tbl_main .grey,.converter .XEtbl_main .XEgrey {
							color:#333333;
							padding:4px;
							font-size:95%;
						}
						.converter .tbl_main .small,.converter .XEtbl_main .XEsmall {
							font-size:90%;
							color:#666666;
						}
						.converter .tbl_main .note {
							font-size:80%;
						}
						.converter .tbl_main .reqd, .converter .XEtbl_main .XEreqd {
							font-size:90%;
							color:#cc3d3d;
						}
						.converter .tbl_main input, .converter .XEtbl_main input {
							font-size:100%;
						}
						.converter .currency td {
							font-size:95%;
							height:23px;
						}
						.converter .currencyA {
							border-bottom:1px dashed #a1aab3;
						}
						.converter .currencyB {
							border-bottom:1px solid #bdc3ce;
						}
						.converter .cur1 {
							background-color:#FFFFFF;
							border-left:1px solid #a1aab3;
						}
						.converter .cur2 {
							background-color:#ebf7ff;
							border-left:1px solid #a1aab3;
							border-right:1px solid #a1aab3;
						}
						.converter .curLast {
							background-color:#ebf7ff;
							border-left:1px solid #a1aab3;
						}
						.converter .padding, .converter .XEpadding {
							font-size:95%;
							padding:4px;
						}
						.converter .row1 {
							font-size:75%;
							background-color:#FFFFFF;
						}
						.converter .row2 {
							background-color:#f2f5f7;
						}
						.converter .clear {
							clear:both; 
							height: 0;
							line-height: 0.0;
						}
						.converter .show{
							display:block;
						}
						.converter .hide{
							display:none;
						}
						.converter .submit_button {
							background: url(http://www.xe.com/gen/images/btn_go.gif) no-repeat;
							padding: 4px 48px;
							border: none;
						}
						.converter #printHeader,.converter #printHeaderPop,.converter #printUrl,.converter #print,.converter .XEprint,.converter #XEprint,.converter #printAdLeaderboard,.converter #XEprintAdLeaderboard,.converter #printAdSkyscraper {
							display:none;
						}
						.converter #footer {
						  clear:both;
						}
						.converter .row1 td{
							border-bottom:1px dashed #b8c3cc;
						}
						.converter .row2 td{
							border-bottom:1px dashed #b8c3cc;
						}
					</style>
					<!-- XE.com Universal Currency Converter(tm) Input Page Starts -->
					<!-- Copyright (c) 2005 XE.com. Unauthorized use prohibited. -->
					<!-- Input Template Version 3.10 -->
					<!-- You may reformat this page section, but do not delete lines or variables that start with an asterisk -->
					<div id="converter" font-family="Arial,Helvetica,sans-serif">
			          <form name="ucc" method="get" action="http://www.xe.com/currencyconverter/convert">
			            <table width="50%" border="0" cellspacing="0" cellpadding="0" class="tbl_main">
			              <tr>
			                <td class="title">Exchange Rates</td>
			                <td align="right" class="titleReg">
			                  <div id="print">using live mid-market rates</div>
			                  <div id="noprint">Using live <a href="/faq/rates_buyorsellrates.php">mid-market</a> rates</div>
			                </td>
			              </tr>
			              <tr>
			                <td colspan="2" class="padding">
			                  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="0" class="tbl_sub">
			                    <tr>
			                      <td valign="top" class="row1">Convert:<br /></td>
			                      <td width="9%" align="center" valign="top">&nbsp;</td>
			                      <td valign="top" class="row1">From this currency:<br /></td>
			                      <td width="9%" valign="top">&nbsp;</td>
			                      <td valign="top" class="row1">To this currency:<br /></td>
			                      <td width="9%" valign="top">&nbsp;</td>
			                      <td valign="top">&nbsp;</td>
			                    </tr>
			                    <tr>
			                      <td valign="top"><input type="text" name="Amount" value="1" size="10" tabindex="1" />
			                        <div class="XEsmall">Enter an amount</div>
			                      </td>
			                      <td align="center" valign="top"><h1>&gt; </h1></td>
			                      <td valign="top">
			                        <select class="uccinpts" name="From" size="5" tabindex="2">
			                          <option value="EUR" selected>Euro - EUR</option>
			                          <option value="USD">United States Dollars - USD</option>
			                          <option value="GBP">United Kingdom Pounds - GBP</option>
			                          <option value="CAD">Canada Dollars - CAD</option>
			                          <option value="AUD">Australia Dollars - AUD</option>
			                          <option value="JPY">Japan Yen - JPY</option>
			                          <option value="INR">India Rupees - INR</option>
			                          <option value="NZD">New Zealand Dollars - NZD</option>
			                          <option value="CHF">Switzerland Francs - CHF</option>
			                          <option value="ZAR">South Africa Rand - ZAR</option>
			                          <option value="EUR">-- Top 85 Currencies: --</option>
			                          <option value="AFN">Afghanistan Afghanis - AFN</option>
			                          <option value="ALL">Albania Leke - ALL</option>
			                          <option value="DZD">Algeria Dinars - DZD</option>
			                          <option value="USD">America (United States) Dollars - USD</option>
			                          <option value="ARS">Argentina Pesos - ARS</option>
			                          <option value="AUD">Australia Dollars - AUD</option>
			                          <option value="ATS">Austria Schillings - ATS*</option>
			                          <option value="BSD">Bahamas Dollars - BSD</option>
			                          <option value="BHD">Bahrain Dinars - BHD</option>
			                          <option value="BDT">Bangladesh Taka - BDT</option>
			                          <option value="BBD">Barbados Dollars - BBD</option>
			                          <option value="BEF">Belgium Francs - BEF*</option>
			                          <option value="BMD">Bermuda Dollars - BMD</option>
			                          <option value="BRL">Brazil Reais - BRL</option>
			                          <option value="BGN">Bulgaria Leva - BGN</option>
			                          <option value="CAD">Canada Dollars - CAD</option>
			                          <option value="XOF">CFA BCEAO Francs - XOF</option>
			                          <option value="XAF">CFA BEAC Francs - XAF</option>
			                          <option value="CLP">Chile Pesos - CLP</option>
			                          <option value="CNY">China Yuan Renminbi - CNY</option>
			                          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
			                          <option value="COP">Colombia Pesos - COP</option>
			                          <option value="XPF">CFP Francs - XPF</option>
			                          <option value="CRC">Costa Rica Colones - CRC</option>
			                          <option value="HRK">Croatia Kuna - HRK</option>
			                          <option value="CYP">Cyprus Pounds - CYP*</option>
			                          <option value="CZK">Czech Republic Koruny - CZK</option>
			                          <option value="DKK">Denmark Kroner - DKK</option>
			                          <option value="DEM">Deutsche (Germany) Marks - DEM*</option>
			                          <option value="DOP">Dominican Republic Pesos - DOP</option>
			                          <option value="NLG">Dutch (Netherlands) Guilders - NLG*</option>
			                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
			                          <option value="EGP">Egypt Pounds - EGP</option>
			                          <option value="EEK">Estonia Krooni - EEK</option>
			                          <option value="EUR">Euro - EUR</option>
			                          <option value="FJD">Fiji Dollars - FJD</option>
			                          <option value="FIM">Finland Markkaa - FIM*</option>
			                          <option value="FRF">France Francs - FRF*</option>
			                          <option value="DEM">Germany Deutsche Marks - DEM*</option>
			                          <option value="XAU">Gold Ounces - XAU</option>
			                          <option value="GRD">Greece Drachmae - GRD*</option>
			                          <option value="NLG">Holland (Netherlands) Guilders - NLG*</option>
			                          <option value="HKD">Hong Kong Dollars - HKD</option>
			                          <option value="HUF">Hungary Forint - HUF</option>
			                          <option value="ISK">Iceland Kronur - ISK</option>
			                          <option value="XDR">IMF Special Drawing Right - XDR</option>
			                          <option value="INR">India Rupees - INR</option>
			                          <option value="IDR">Indonesia Rupiahs - IDR</option>
			                          <option value="IRR">Iran Rials - IRR</option>
			                          <option value="IQD">Iraq Dinars - IQD</option>
			                          <option value="IEP">Ireland Pounds - IEP*</option>
			                          <option value="ILS">Israel New Shekels - ILS</option>
			                          <option value="ITL">Italy Lire - ITL*</option>
			                          <option value="JMD">Jamaica Dollars - JMD</option>
			                          <option value="JPY">Japan Yen - JPY</option>
			                          <option value="JOD">Jordan Dinars - JOD</option>
			                          <option value="KES">Kenya Shillings - KES</option>
			                          <option value="KRW">Korea (South) Won - KRW</option>
			                          <option value="KWD">Kuwait Dinars - KWD</option>
			                          <option value="LBP">Lebanon Pounds - LBP</option>
			                          <option value="LUF">Luxembourg Francs - LUF*</option>
			                          <option value="MYR">Malaysia Ringgits - MYR</option>
			                          <option value="MTL">Malta Liri - MTL*</option>
			                          <option value="MUR">Mauritius Rupees - MUR</option>
			                          <option value="MXN">Mexico Pesos - MXN</option>
			                          <option value="MAD">Morocco Dirhams - MAD</option>
			                          <option value="NLG">Netherlands Guilders - NLG*</option>
			                          <option value="NZD">New Zealand Dollars - NZD</option>
			                          <option value="NOK">Norway Kroner - NOK</option>
			                          <option value="OMR">Oman Rials - OMR</option>
			                          <option value="PKR">Pakistan Rupees - PKR</option>
			                          <option value="XPD">Palladium Ounces - XPD</option>
			                          <option value="PEN">Peru Nuevos Soles - PEN</option>
			                          <option value="PHP">Philippines Pesos - PHP</option>
			                          <option value="XPT">Platinum Ounces - XPT</option>
			                          <option value="PLN">Poland Zlotych - PLN</option>
			                          <option value="PTE">Portugal Escudos - PTE*</option>
			                          <option value="QAR">Qatar Riyals - QAR</option>
			                          <option value="RON">Romania New Lei - RON</option>
			                          <option value="ROL">Romania Lei - ROL*</option>
			                          <option value="RUB">Russia Rubles - RUB</option>
			                          <option value="SAR">Saudi Arabia Riyals - SAR</option>
			                          <option value="XAG">Silver Ounces - XAG</option>
			                          <option value="SGD">Singapore Dollars - SGD</option>
			                          <option value="SKK">Slovakia Koruny - SKK*</option>
			                          <option value="SIT">Slovenia Tolars - SIT*</option>
			                          <option value="ZAR">South Africa Rand - ZAR</option>
			                          <option value="KRW">South Korea Won - KRW</option>
			                          <option value="ESP">Spain Pesetas - ESP*</option>
			                          <option value="XDR">Special Drawing Rights (IMF) - XDR</option>
			                          <option value="LKR">Sri Lanka Rupees - LKR</option>
			                          <option value="SDG">Sudan Pounds - SDG</option>
			                          <option value="SEK">Sweden Kronor - SEK</option>
			                          <option value="CHF">Switzerland Francs - CHF</option>
			                          <option value="TWD">Taiwan New Dollars - TWD</option>
			                          <option value="THB">Thailand Baht - THB</option>
			                          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
			                          <option value="TND">Tunisia Dinars - TND</option>
			                          <option value="TRY">Turkey Lira - TRY</option>
			                          <option value="AED">United Arab Emirates Dirhams - AED</option>
			                          <option value="GBP">United Kingdom Pounds - GBP</option>
			                          <option value="USD">United States Dollars - USD</option>
			                          <option value="VEB">Venezuela Bolivares - VEB*</option>
			                          <option value="VEF">Venezuela Bolivares Fuertes - VEF</option>
			                          <option value="VND">Vietnam Dong - VND</option>
			                          <option value="ZMK">Zambia Kwacha - ZMK</option>
			                          <option value="EUR">-- Special Units: --</option>
			                          <option value="XAF">CFA BEAC Francs - XAF</option>
			                          <option value="XOF">CFA BCEAO Francs - XOF</option>
			                          <option value="XPF">CFP Francs - XPF</option>
			                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
			                          <option value="EUR">Euro - EUR</option>
			                          <option value="XDR">IMF Special Drawing Rights - XDR</option>
			                          <option value="XAU">-- Precious Metals: --</option>
			                          <option value="XAG">Silver Ounces - XAG</option>
			                          <option value="XAU">Gold Ounces - XAU</option>
			                          <option value="XPT">Platinum Ounces - XPT</option>
			                          <option value="XPD">Palladium Ounces - XPD</option>
			                          <option value="EUR" class="hilite">Click for every world currency &gt;</option>
			                        </select>
			                        <div class="XEsmall"><a href="/currencyconverter/full/">More currencies</a></div>
			                      </td>
			                      <td align="center" valign="top"><h1>&gt;</h1></td>
			                      <td valign="top">
			                        <select class="uccinpts" name="To" size="5" tabindex="3">
			                          <option value="USD" selected>United States Dollars - USD</option>
			                          <option value="EUR">Euro - EUR</option>
			                          <option value="GBP">United Kingdom Pounds - GBP</option>
			                          <option value="CAD">Canada Dollars - CAD</option>
			                          <option value="AUD">Australia Dollars - AUD</option>
			                          <option value="JPY">Japan Yen - JPY</option>
			                          <option value="INR">India Rupees - INR</option>
			                          <option value="NZD">New Zealand Dollars - NZD</option>
			                          <option value="CHF">Switzerland Francs - CHF</option>
			                          <option value="ZAR">South Africa Rand - ZAR</option>
			                          <option value="EUR">-- Top 85 Currencies: --</option>
			                          <option value="AFN">Afghanistan Afghanis - AFN</option>
			                          <option value="ALL">Albania Leke - ALL</option>
			                          <option value="DZD">Algeria Dinars - DZD</option>
			                          <option value="USD">America (United States) Dollars - USD</option>
			                          <option value="ARS">Argentina Pesos - ARS</option>
			                          <option value="AUD">Australia Dollars - AUD</option>
			                          <option value="ATS">Austria Schillings - ATS*</option>
			                          <option value="BSD">Bahamas Dollars - BSD</option>
			                          <option value="BHD">Bahrain Dinars - BHD</option>
			                          <option value="BDT">Bangladesh Taka - BDT</option>
			                          <option value="BBD">Barbados Dollars - BBD</option>
			                          <option value="BEF">Belgium Francs - BEF*</option>
			                          <option value="BMD">Bermuda Dollars - BMD</option>
			                          <option value="BRL">Brazil Reais - BRL</option>
			                          <option value="BGN">Bulgaria Leva - BGN</option>
			                          <option value="CAD">Canada Dollars - CAD</option>
			                          <option value="XOF">CFA BCEAO Francs - XOF</option>
			                          <option value="XAF">CFA BEAC Francs - XAF</option>
			                          <option value="CLP">Chile Pesos - CLP</option>
			                          <option value="CNY">China Yuan Renminbi - CNY</option>
			                          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
			                          <option value="COP">Colombia Pesos - COP</option>
			                          <option value="XPF">CFP Francs - XPF</option>
			                          <option value="CRC">Costa Rica Colones - CRC</option>
			                          <option value="HRK">Croatia Kuna - HRK</option>
			                          <option value="CYP">Cyprus Pounds - CYP*</option>
			                          <option value="CZK">Czech Republic Koruny - CZK</option>
			                          <option value="DKK">Denmark Kroner - DKK</option>
			                          <option value="DEM">Deutsche (Germany) Marks - DEM*</option>
			                          <option value="DOP">Dominican Republic Pesos - DOP</option>
			                          <option value="NLG">Dutch (Netherlands) Guilders - NLG*</option>
			                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
			                          <option value="EGP">Egypt Pounds - EGP</option>
			                          <option value="EEK">Estonia Krooni - EEK</option>
			                          <option value="EUR">Euro - EUR</option>
			                          <option value="FJD">Fiji Dollars - FJD</option>
			                          <option value="FIM">Finland Markkaa - FIM*</option>
			                          <option value="FRF">France Francs - FRF*</option>
			                          <option value="DEM">Germany Deutsche Marks - DEM*</option>
			                          <option value="XAU">Gold Ounces - XAU</option>
			                          <option value="GRD">Greece Drachmae - GRD*</option>
			                          <option value="NLG">Holland (Netherlands) Guilders - NLG*</option>
			                          <option value="HKD">Hong Kong Dollars - HKD</option>
			                          <option value="HUF">Hungary Forint - HUF</option>
			                          <option value="ISK">Iceland Kronur - ISK</option>
			                          <option value="XDR">IMF Special Drawing Right - XDR</option>
			                          <option value="INR">India Rupees - INR</option>
			                          <option value="IDR">Indonesia Rupiahs - IDR</option>
			                          <option value="IRR">Iran Rials - IRR</option>
			                          <option value="IQD">Iraq Dinars - IQD</option>
			                          <option value="IEP">Ireland Pounds - IEP*</option>
			                          <option value="ILS">Israel New Shekels - ILS</option>
			                          <option value="ITL">Italy Lire - ITL*</option>
			                          <option value="JMD">Jamaica Dollars - JMD</option>
			                          <option value="JPY">Japan Yen - JPY</option>
			                          <option value="JOD">Jordan Dinars - JOD</option>
			                          <option value="KES">Kenya Shillings - KES</option>
			                          <option value="KRW">Korea (South) Won - KRW</option>
			                          <option value="KWD">Kuwait Dinars - KWD</option>
			                          <option value="LBP">Lebanon Pounds - LBP</option>
			                          <option value="LUF">Luxembourg Francs - LUF*</option>
			                          <option value="MYR">Malaysia Ringgits - MYR</option>
			                          <option value="MTL">Malta Liri - MTL*</option>
			                          <option value="MUR">Mauritius Rupees - MUR</option>
			                          <option value="MXN">Mexico Pesos - MXN</option>
			                          <option value="MAD">Morocco Dirhams - MAD</option>
			                          <option value="NLG">Netherlands Guilders - NLG*</option>
			                          <option value="NZD">New Zealand Dollars - NZD</option>
			                          <option value="NOK">Norway Kroner - NOK</option>
			                          <option value="OMR">Oman Rials - OMR</option>
			                          <option value="PKR">Pakistan Rupees - PKR</option>
			                          <option value="XPD">Palladium Ounces - XPD</option>
			                          <option value="PEN">Peru Nuevos Soles - PEN</option>
			                          <option value="PHP">Philippines Pesos - PHP</option>
			                          <option value="XPT">Platinum Ounces - XPT</option>
			                          <option value="PLN">Poland Zlotych - PLN</option>
			                          <option value="PTE">Portugal Escudos - PTE*</option>
			                          <option value="QAR">Qatar Riyals - QAR</option>
			                          <option value="RON">Romania New Lei - RON</option>
			                          <option value="ROL">Romania Lei - ROL*</option>
			                          <option value="RUB">Russia Rubles - RUB</option>
			                          <option value="SAR">Saudi Arabia Riyals - SAR</option>
			                          <option value="XAG">Silver Ounces - XAG</option>
			                          <option value="SGD">Singapore Dollars - SGD</option>
			                          <option value="SKK">Slovakia Koruny - SKK*</option>
			                          <option value="SIT">Slovenia Tolars - SIT*</option>
			                          <option value="ZAR">South Africa Rand - ZAR</option>
			                          <option value="KRW">South Korea Won - KRW</option>
			                          <option value="ESP">Spain Pesetas - ESP*</option>
			                          <option value="XDR">Special Drawing Rights (IMF) - XDR</option>
			                          <option value="LKR">Sri Lanka Rupees - LKR</option>
			                          <option value="SDG">Sudan Pounds - SDG</option>
			                          <option value="SEK">Sweden Kronor - SEK</option>
			                          <option value="CHF">Switzerland Francs - CHF</option>
			                          <option value="TWD">Taiwan New Dollars - TWD</option>
			                          <option value="THB">Thailand Baht - THB</option>
			                          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
			                          <option value="TND">Tunisia Dinars - TND</option>
			                          <option value="TRY">Turkey Lira - TRY</option>
			                          <option value="AED">United Arab Emirates Dirhams - AED</option>
			                          <option value="GBP">United Kingdom Pounds - GBP</option>
			                          <option value="USD">United States Dollars - USD</option>
			                          <option value="VEB">Venezuela Bolivares - VEB*</option>
			                          <option value="VEF">Venezuela Bolivares Fuertes - VEF</option>
			                          <option value="VND">Vietnam Dong - VND</option>
			                          <option value="ZMK">Zambia Kwacha - ZMK</option>
			                          <option value="EUR">-- Special Units: --</option>
			                          <option value="XAF">CFA BEAC Francs - XAF</option>
			                          <option value="XOF">CFA BCEAO Francs - XOF</option>
			                          <option value="XPF">CFP Francs - XPF</option>
			                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
			                          <option value="EUR">Euro - EUR</option>
			                          <option value="XDR">IMF Special Drawing Rights - XDR</option>
			                          <option value="XAU">-- Precious Metals: --</option>
			                          <option value="XAG">Silver Ounces - XAG</option>
			                          <option value="XAU">Gold Ounces - XAU</option>
			                          <option value="XPT">Platinum Ounces - XPT</option>
			                          <option value="XPD">Palladium Ounces - XPD</option>
			                          <option value="USD" class="hilite">Click for every world currency &gt;</option>
			                        </select>
			                        <div class="XEsmall"><a href="/currencyconverter/full/">More currencies</a></div>
			                      </td>
			                      <td align="center" valign="top"><h1>&gt;</h1></td>
			                      <td align="center" valign="top">
			                        <input type="submit" value="" class="submit_button" />
			                      </td>
			                    </tr>
			                  </table>
			                </td>
			              </tr>
			              <tr>
			               <td colspan="2" align="center" class="titleReg"><a class="XEsmall" href="/dfs/">License our Data</a> &middot; <a class="XEsmall" href="/cus/">Free rates by e-mail</a> &middot; <a class="XEsmall" href="/currencyconverter/customize.php">Put this tool on your site for free</a></td>
			              </tr>
			            </table>
			          </form>
			        </div>
				</div>
			</div>
			<div class="row second-row">
				<div class="col-sm-12 text-center">
					<script src="js/jClocks/js/jquery.rotate.js"></script>
					<script src="js/jClocks/js/jClocksGMT.js"></script>
					<link rel="stylesheet" href="js/jClocks/css/jClocksGMT.css">
					<div class="clocks">
						<div id="clock_1"></div>
						<div id="clock_2"></div>
						<div id="clock_3"></div>
						<div id="clock_4"></div>
						<div id="clock_5"></div>
						<div id="clock_6"></div>
						<div id="clock_7"></div>
					</div>
					<script>
						$(document).ready(function(){
							$('#clock_1').jClocksGMT({ title: 'London', offset: '0', skin: 5 });
							$('#clock_2').jClocksGMT({ title: 'Rio de Janeiro', offset: '-3', skin: 5 });
							$('#clock_3').jClocksGMT({ title: 'Isle of Man', offset: '+1', skin: 5 });
							$('#clock_4').jClocksGMT({ title: 'Guernsey', offset: '+1', skin: 5 });
							$('#clock_5').jClocksGMT({ title: 'Cyprus', offset: '+3', skin: 5 });
							$('#clock_6').jClocksGMT({ title: 'Boston', offset: '-4', skin: 5 });
							$('#clock_7').jClocksGMT({ title: 'Uruguay', offset: '-3', skin: 5 });
						});
					</script>
				</div>
			</div>
			<div class="row second-row">
				<div class="col-sm-12 text-center">
					<p class="text-muted text-sm font-weight-light">&copy; 2016 - <?php echo( date('Y')) ?> Rolls Capital Advisors Limited, all rights reserved.</p>
					<p class="text-muted text-sm font-weight-light">Rolls Capital Advisors Limited is an appointed representative of NEBA Private Clients with multi-jursdictional licenses in locations such as the UAE, Singapore, Malaysia &amp; South Africa.</p>
				</div>
			</div>

<?php require_once('footer.php') ?>