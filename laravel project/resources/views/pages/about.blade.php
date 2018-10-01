@extends('layouts/index')
@section('about')
	class='active'
@endsection
@section('NoiDung')
	<div class="banner" style="background-image: url({{ asset('css/images/woodhouse1.jpg') }});">
		<div class="banner-box"></div>
		<div class="page-title">
			<h1>About</h1>
		</div>
	</div>
	<hr/>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="row">
					<div class="col-sm-6">
						<div>
							<h3 style="margin-top: 24px;" class="text2">Who owns Website name?</h3>
							<p>
								The Calculator Site is owned by ARGH Industries Ltd and run by Alastair Hazell, an entrepreneur based in East Sussex in the United Kingdom. The website was founded in 2004 as a fun hobby and has since developed into a very popular tool. The website has grown in popularity, particularly so in the last few years. Traffic has risen from around 3,500 visitors per day in early 2012 to over 70,000 visitors per day in 2016.
							</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div>
							<h3 style="margin-top: 24px;" class="text2">What is Website name?</h3>
							<p>
								The Calculator Site contains useful calculation and converter tools for every day use. Whether you're looking to work out the compound interest on your savings, convert between two metric or imperial measurement units or calculate your BMI, The Calculator Site has tools to help. Use of all of the converters and calculators is subject to terms and conditions..
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<h3 style="margin-top: 30px;" class="text2">Tell us what you think!</h3>
				<p>
					We are constantly working to raise the bar on our services. If you have any questions or concerns about your experience, please let us know. Our support concierges are available 24/7.
				</p>
			</div>
		</div>
	</div>
	<hr/>
	<div style="background-image: url({{ asset('css/images/holiday.jpeg') }}); position: relative; height: 300px;" class="fix-image">
		<div class="mask1"></div>
		<div class="content1">
			<div class="content1">
				<h1>Teems And Conditions</h1>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 10px;">
		<p>
			The material and tools displayed on this website are provided without any guarantees, conditions or warranties as to their accuracy. To the extent permitted by law The Calculator Site, its designer Alastair Hazell, owner ARGH Industries Ltd and third parties connected to it hereby expressly exclude all conditions, warranties and other terms which might otherwise be implied by statute, common law or the law of equity, any liability for any direct, indirect or consequential loss or damage incurred by any user in connection with our site or in connection with the use, inability to use, or results of the use of our site, any websites linked to it and any materials posted on it, including, without limitation any liability for loss of income or revenue, loss of business, loss of profits or contracts, loss of anticipated savings, loss of data, loss of goodwill, wasted management or office time, for any other loss or damage of any kind, however arising and whether caused by tort (including negligence), breach of contract or otherwise, even if foreseeable.
		</p>
		<p>
			This does not affect our liability for death or personal injury arising from our negligence, nor our liability for fraudulent misrepresentation, nor any other liability which cannot be excluded or limited under applicable law. Descriptions of, or references to, products or publications does not imply endorsement of that product or publication.
		</p>
		<p>
			Although every precaution has been taken in the preparation of the website pages, the author assumes no responsibility for errors or omissions. This web site is here purely as a service to you, please use it at your own risk.
		</p>
		<p>
			The Calculator Site contains links, adverts and forms that link to external web sites. In no event shall The Calculator Site or ARGH Industries Ltd be responsible for the content, accuracy or opinions expressed in these web sites. These web sites are not monitored or checked for accuracy or completeness by us. Inclusion of web sites linked to via forms, adverts and links in our site does not imply approval or endorsement of the linked web site by us. If you decide to leave our web site and access these third-party sites, you do so at your own risk.
		</p>
	</div>
@endsection