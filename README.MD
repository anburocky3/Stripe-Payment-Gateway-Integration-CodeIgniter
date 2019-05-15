# Stripe-Gateway-Integration-CodeIgniter 3.1.10

<h3>#Screenshots Overview</h3>
1. Card Entering Form


<!-- ![Card Entering Form](https://s17.postimg.org/ylmc23zgf/image.png) -->
![Card Entering Form](/screenshots/homepage.png?raw=true "Card Entering Form")


2. If Card is valid, Will Charge the Card

<!-- ![If Card is valid, Will Charge the card](https://s17.postimg.org/qsvoa5gmn/image.png) -->
![If Card is valid, Will Charge the card](/screenshots/payment_success.png?raw=true")

3. If Anything goes Wrong, display Failure page

<!-- ![If Anything goes Wrong, display Failure page](https://s17.postimg.org/zb54ehuv3/image.png) -->
![If Anything goes Wrong, display Failure page](/screenshots/payment_failure.png?raw=true)

<div style="line-height:3rem">
	<h6>Quick steps to integrate to your web/app on the go!</h6>
	<ol>
		<li> Clone the repository <code>git clone https://github.com/anburocky3/Stripe-Payment-Gateway-Integration-CodeIgniter.git</code> </li>
		<li> Open Terminal, type<code>cd Stripe-Payment-Gateway-Integration-CodeIgniter</code> </li>
		<li> Copy<code>Welcome.php</code> controller file in your <code>applications/controllers/</code>directory</li>
		<li> Copy<code>product_form.php</code>,  <code>payment_success.php</code>, <code>payment_error.php</code> view files in our<code>applications/views/</code>directory to your directory.</li>
		<li>Copy<code>stripe</code> folder from<code>applications/third_party</code> folder and paste it in your<code>applications/third_party</code> folder.</li>
		<li> Create New Database and import the<code>orders.sql</code> to your Database.</li>
		<li> Configure the <code>base_url</code> and database info in <code>applications/database.php</code> </li>
		<li> Create developer account on Stripe and get your Stripe secret key & Stripe Publishable key. </li>
		<li> Replace your publishable key in <code>applications/views/product_form.php</code> on <code>line 25</code></li>
		<li> Replace your Secret key & Publishable key in <code>applications/controller/Welcome.php</code> on <code>line 30, 31</code></li>
		<li> Customize the controller logic according to your web/app. </li>
	</ol>	
</div>

<div class="card-footer">
	<h6><strong>Code Explanation</strong></h6>
	<ol>
		<li><em>Welcome.php</em> Controller - Displays the product_form.php view page.</li>
		<li><em>Welcome.php/check</em> Method -  Check all parameters required for transaction and generates sha hash and display the confirmation.php view page.</li>
		<li><em>Welcome.php/help</em> Method - Displays the quick integration help page.</li>
	</ol>
</div>

<div class="card-footer">
	<h6><strong>Changelogs</strong></h6>
	<ol>
		<li><b>15th May, 2019</b> - Updated from<code>3.1.7</code> to<code>3.1.10</code></li>
	</ol>
</div>


