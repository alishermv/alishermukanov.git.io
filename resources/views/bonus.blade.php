<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	background-color: #0a192f;
/*	font-family: 'Poppins', sans-serif;*/
}
section {
	padding: 100px;
}
.banner {
	position: relative;
	min-height: 100vh;
	 /*#f8f7de "Calibre","San Francisco","SF Pro Text",-apple-system,system-ui,sans-serif    "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace*/
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding-left: 300px;
}
.banner h2 {
	font-size: 3em;
	color: #e6f1ff;
	font-weight: 500;
	line-height: 1.5em;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.banner h2 span {
	font-size: 1.5em;
	font-weight: 700;
}
.banner h3 {
	font-size: 1.5em;
	font-weight: 500;
	color: #e6f1ff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
	text-align: justify;
}
.btn {
	position: relative;
	background: #0a192f; /*hover #64ffda*/
	display: inline-block;
	margin-top: 20px;
	padding: 10px 30px;
	color: #64ffda;
	font-size: 18px;
	text-transform: uppercase;
	text-decoration: none;
	letter-spacing: 2px;
	font-weight: 500;
	border: 1px solid #64ffda;
	border-radius: 10px;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.textBx .btn a:hover {
	color: #64ffda;
}
header {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	padding: 40px 100px;
	z-index: 1000;
	display: flex;
	justify-content: space-between;
	align-items: center;
	transition: 0.5s;
}
header .sticky {
	background: #fff;
	padding: 20px 100px;
	box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}
header .logo {
	font-size: 1.25rem;
    font-weight: 800;
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
header .sticky .logo {
	color: #111;
}
header ul {
	position: relative;
	display: flex;
}
header ul li {
	position: relative;
	list-style: none;
}
header ul li a {
	position: relative;
	display: inline-block;
	margin: 0 15px;
	text-decoration: none;
	color: #fff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
header ul li a:hover {
	color: #64ffda;
}

.heading {
	width: 100%;
	text-align: center;
	margin-bottom: 30px;
	color: #111;
}
.heading h2 {
	font-weight: 600;
	font-size: 27px;
	color: #fff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
} 
.heading h2:hover {
	color: #64ffda;
}
.content {
	display: flex;
	justify-content: space-between;
}
.contentBx {
	padding-right: 100px;
	color: #fff;
}
.contentBx h3 {
	font-size: 24px;
	margin-bottom: 10px;
	color: #fff;

}
.w50 {
	min-width: 50%;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}

img {
	max-width: 100%;
	border-radius: 10px;
	height: 300px;
}
.shadow {
	background: rgba(100,255,218,0.1);
}
.w50 img .shadow:hover {
	opacity: 1;
}
.main {
	margin: 0;
	padding: 0;
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
}
.skills {
	width: 100%;
	max-width: 600px;
	padding: 0 20px;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.skills h2 {
	color: #fff;
}
.skills h2:hover {
	color: #64ffda;
}
.skill-name {
	font-size: 18px;
	font-weight: 700;
	margin: 20px 0;
	color: #fff;
	
}
.skill-bar {
	height: 15px;
	background: #cacaca;
	border-radius: 8px;
}
.skill-per1 {
	height: 15px;
	background-color: #0fbcf9;
	border-radius: 8px;
	width: 90%;
	position: relative;
}
.skill-per2 {
	height: 15px;
	border-radius: 8px;
	background-color: #0fbcf9;
	width: 85%;
	position: relative;
}
.skill-per3 {
	height: 15px;
	border-radius: 8px;
	background-color: #0fbcf9;
	width: 70%;
	position: relative;
}
.skill-per4 {
	height: 15px;
	border-radius: 8px;
	background-color: #0fbcf9;
	width: 80%;
	position: relative;
}
.skill-per5 {
	height: 15px;
	border-radius: 8px;
	background-color: #0fbcf9;
	width: 60%;
	position: relative;
}
.services {
	color: #fff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
section .title {
	position: relative;
	text-align: center;
	font-size: 40px;
	font-weight: 500;
	margin-bottom: 60px;
	padding-bottom: 20px;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
section .title:hover {
	color: #64ffda;
}
section .title::before {
	content: "";
	position: absolute;
	bottom: 0;
	left: 50%;
	width: 180px;
	height: 3px;
	background: #64ffda;
	transform: translateX(-50%);
}
section .title::after {
	position: absolute;
	bottom: -12px;
	left: 50%;
	font-size: 20px;
	color: crimson;
	padding: 5px;
	background: #fff;
	transform: translateX(-50%);
}
.services .serv-content {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
}

.services .serv-content .card {
	width: calc(33% - 20px);
	/*background: #222;*/
	text-align: center;
	border-radius: 6px;
	padding: 20px 25px;
	cursor: pointer;
}
.services .serv-content .card i {
	font-size: 50px;
}
.services .serv-content .card .text {
	font-size: 25px;
	font-weight: 500;
	margin: 10px 0 7px 0;
	transition: all 0.3s ease;	
}
.services .serv-content .card .box {
	transition: all 0.3s ease;
}
.services .serv-content .card:hover .box {
	transform: scale(1.05);
}

/*----------Section CONTACT-----------*/
.max-width {
	color: #fff;
	font-family: "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
    font-size: 20px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 10px;
}
.contact .contact-content .left p{
    text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: #64ffda;;
}
.contact .contact-content .info .head{
    font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #fff;
}


.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 40%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 40%;
}
.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 90%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family:  "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
    transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus{
    border-color: #b3b3b3;
}
.contact .right form .textarea textarea{
    padding-top: 10px;
    resize: none;
}

.contact .right form .button{
    height: 47px;
    width: 170px;
    margin-top: 20px;
}
.contact .right form .button button{
    width: 100%;
    height: 100%;
    border: 2px solid #64ffda;
    background: #64ffda;
    color: #000;
    outline: none;
    font-size: 18px;
    font-weight: bold;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family:  "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.contact .right form .button button:hover{
    color: #fff;
    background: none;
}
.copyright {
	width: 100%;
	padding: 8px 100px;
	text-align: center;
	color: #fff;
	font-family:  "SF Mono","Fira Code","Fira Mono","Roboto Mono",monospace;
}
.copyright:hover {
	color: #64ffda;
}
@media only screen and (max-width: 1200px) {
/*  large devices,wide screens*/
	body {
		width: 100%;
		padding: 0;
		margin: 0 auto;
	} 
	.contentBx p {
		font-size: 16px;
	}
	.about {
		margin-left: 10%;
		padding: 0;

	}
	.services {
		margin-left: 15%;
		padding: 0;
	}

}
@media only screen and (max-width: 992px) {
    /*medium devices and desktops*/
    .banner {
    	padding-left: 200px;
    }
    .w50 img {
		object-fit: cover;
		width: 100%;
	}
}
@media only screen and (max-width: 768px) {
    /*small devices tablets*/
    .banner {
    	padding-left: 100px;
    }
    .heading {
    	margin-bottom: 100px;
    	width: 80%;
    }
    header {
    	padding: 5px;
    }
    .w50 img {
		object-fit: cover;
		width: 100%;
	}
}
@media only screen and (max-width: 480px) {
    /*extra small devices phones*/
    header {
    	padding-left: 30px;
    }
    .banner {
    	padding-left: 100px;
    }
    .heading {
    	margin-bottom: 100px;
    	width: 100%;
    }
    .content {
    	flex-direction: column;
    }
    .img {
    	margin-top: 50px;
    	width: 400px;
    }
   .contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
	}
	.textBx {
		text-align: justify;
	}
	.services .serv-content .card {
		margin-right: 100px;
	}

}
@media only screen and (max-width: 480px) {
	  .banner {
    	padding-left: 50px;
    }
       .contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
	}
	

}
@media only screen and (max-width: 500px) {
	.services .serv-content .card {
		margin-right: 100px;
	}
	   .contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
	}
}
	</style>
</head>
<body>
	<header>
		<a href="#" class="logo">IT</a>
		<div class="toggle">
			<ul>
				<li><a href="#about">01. About</a></li>
				<li><a href="#skill">02. Experience</a></li>
				<li><a href="#services">03. Work</a></li>
				<li><a href="#">04. Contact</a></li>
			</ul>
		</div>
	</header>
	<section class="banner">
		<div class="textBx">
			<h2>Hello, I'm<br><span>Alisher.</span></h2>
			<h3>I'm a software engineer based in Almaty <br>I build websites and mobile aplications.</h3>
			<a href="190103257@stu.sdu.edu.kz" class="btn">Get In Touch</a>
		</div>
	</section>
		<section class="about" id="about">
			<div class="heading">
				<h2>01. About Me</h2>
			</div>
			<div class="content">
				<div class="contentBx w50">
					<h3>I'm software engineer</h3>
					<p>I enjoy creating things that live on the internet, whether that be websites, applications, or anything in between. My goal is to always build products that provide pixel-perfect, performant experiences. <br><br>
					Shortly I learning in SDU university. <br>
					Here are a few technologies I've been working with recently:
					<br>
					<br>
					</p>
					<p>HTML & CSS</p>
					<p>Javascript</p>
					<p>Java</p>
					<p>Python</p>
					<p>PHP</p>
					<p>C++</p>
					<a href="#" class="btn">Download CV</a>
				</div>
				<div class="w50">
					<img src="C:\web\img\me.jpeg" class="img">
				
				</div>
			</div>
		</section>
			<section class="main" id="skill">
			<div class="skills">
				<h2>My Skills</h2>
				<div class="skill">
					<div class="skill-name">HTML</div>
					<div class="skill-bar">
						<div class="skill-per1" per="80"></div>
					</div>
				</div>

				<div class="skill">
					<div class="skill-name">CSS</div>
					<div class="skill-bar">
						<div class="skill-per2" per="90"></div>
					</div>
				</div>

				<div class="skill">
					<div class="skill-name">JavaScript</div>
					<div class="skill-bar">
						<div class="skill-per3" per="90"></div>
					</div>
				</div>

				<div class="skill">
					<div class="skill-name">Java</div>
					<div class="skill-bar">
						<div class="skill-per4" per="90"></div>
					</div>
				</div>

				<div class="skill">
					<div class="skill-name">Python</div>
					<div class="skill-bar">
						<div class="skill-per5" per="90"></div>
					</div>
				</div>
			</div>
		</section>

			<section class="services" id="services">
				<div class="max-width">
					<h2 class="title">What Can I Do</h2>
						<div class="serv-content">
							<div class="card">
								<div class="box">
									<i class="fa fa-mobile"></i>
									<div class="text">App Developing</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nisi sequi voluptates illum quibusdam quo.</p>
								</div>
							</div>
							<div class="card">
								<div class="box">
									<i class="fa fa-code"></i>
									<div class="text">Apps Design</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nisi sequi voluptates illum quibusdam quo.</p>
								</div>
							</div>
							<div class="card">
								<div class="box">
									<i class="fa fa-desktop"></i>
									<div class="text">UI&UX Design</div>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nisi sequi voluptates illum quibusdam quo.</p>
								</div>
							</div>

						</div>
				</div>

			</section>

				<section class="contact" id="contact">
        			<div class="max-width">
            		<h2 class="title">Contact me</h2>
						<div class="contact-content">
                			<div class="column left">
                    		
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti.
                        				<div class="row">
                            			<i class="fa fa-user"></i>
                            				<div class="info">
                                				<div class="head">Name</div>
													<div class="sub-title">Mukanov Alisher</div>
											</div>
										</div>
														<div class="row">
                            							<i class="fa fa-map-marker"></i>
                            								<div class="info">
                                								<div class="head">Address</div>
																<div class="sub-title">Almaty, Kazakhstan</div>
															</div>
														</div>
															<div class="row">
                            									<i class="fa fa-envelope"></i>
                            										<div class="info">
                                										<div class="head">Email</div>
																			<div class="sub-title">190103257@stu.sdu.edu.kz</div>
																			
																	</div>

															</div>
									</div>
							</div>
                				<div class="column right" >
                    				<div class="text" style="margin-bottom:20px;">Message me</div>
									<form>
                        				<div class="fields">
                            				<div class="field name">
                               				<input  type="text" placeholder="Name" required>
                            				</div>
                            					<div class="field email">
                                				<input  type="email" placeholder="Email" required>
                           						</div>
                        				</div>

                        					<div class="field textarea">
                           
                            				<textarea cols="20" rows="10"  placeholder="Message.." required></textarea>
                        					</div>
                        						<div class="button">
                            					<button type="submit">Send message</button>
                        						</div>
									</form> 	
                				</div>
                		</div>

					</div>
				</section>

					<footer>
						<div class="copyright">
							Designed & Built by Mukanov Alisher
						</div>
					</footer>

		<script>
			window.addEventListener('scroll', function () {
			var header = document.querySelector('header');
			header.classList.toggle('sticky', window.scrollY > 0);
			});
</script>

</body>
</html>