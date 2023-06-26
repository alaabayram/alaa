  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
.footer .container{
	max-width: 1170px;
	margin:auto;
}
.footer .container .row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #8453a9;
    padding: 10px 0;
}
.footer-col{
   width: 20%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
	font-family: 'verdana';
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #ff4cff;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li{
	color:#e3d9fc;
	font-size: 15px;
	padding:2px;
	font-family:'Segoe UI', Tahoma, sans-serif;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	text-decoration: none;
	font-weight: 300;
	color: #e3d9fc;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #8453a9;
	background-color: #ffffff;
}


@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}</style>

<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
				<h4>Hello!</h4>
				<ul>
					<li>It's <?php echo date("D-M-Y")?></li>
					<li>Welcome to Cake Couture 's website!</li>
					<li><b>Don't have an account? <a href="login.php">login</a><a href="./logout.php">logout</a></b></li>
				</ul>
			</div>
			<div class="footer-col">
  	 			<h4>Take Tour</h4>
  	 			<ul>
  	 				<li><a href="aboutus.php">about us</a></li>
  	 				<li><a href="contact.php">Contact Us</a></li>
  	 				<li><a href="shop.php">Shop Now</a></li>
					
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Follow Us</h4>
  	 			<div class="social-links">
				    <a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-tiktok"></i></a>
  	 			</div>
  	 		</div>
			   <div class="footer-col">
  	 			<h4>Send Message</h4>
  	 			<ul>
  	 				<li>Email: cakecouture@gmail.com</li>
  	 				<li>Phone: +961 70608090</li>
					
  	 			</ul>
  	 	</div>
  	 </div>
  </footer>