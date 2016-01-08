<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>網頁標題</title>
<!-- <link href="mycss.css" rel="stylesheet" type="text/css" /> -->
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900);
@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700);

body{
	color:#4a5b65;
	font-family: "Roboto", Arial, sans-serif;
	font-size:14px;
	line-height: 20px;
}

*:focus{outline:none !important;}


/* TO DO LIST
================================================== */
.tdl-holder{
	margin:0px auto;
	width: 300px;
}

.tdl-holder h2{
	background-color: #de3f53;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	color:#fff;
	font-family:"Roboto Condensed", Arial, sans-serif;
	font-size:16px;
	font-weight: 100;
	line-height: 56px;
	padding-left: 15px;
	margin:0;
}

.tdl-holder ul, .tdl-holder li {
	list-style: none;
	margin:0;
	padding:0;
}

.tdl-holder li{
	background-color: #262e4c;
	border-bottom:1px solid #1c2340;
	color: #b1b2c9;
}

.tdl-holder li span{
	margin-left:30px;
	-webkit-transition: all .2s linear;
	   -moz-transition: all .2s linear;
	     -o-transition: all .2s linear;
		    transition: all .2s linear;	
}

.tdl-holder label{
	cursor:pointer;
	display:block;
	line-height: 56px;
	padding: 0 15px; 
	position: relative;
}

.tdl-holder label:hover{
	background-color: #2a3353;
	color:#8284a3;
}

.tdl-holder label a{
	background-color:#de3f53;
	border-radius:50%;
	color:#fff;
	display:none;
	float:right;
	font-weight: bold;
	line-height: normal;
	height:16px;
	margin-top: 20px;
	text-align: center;
	text-decoration: none;
	width:16px;
	-webkit-transition: all .2s linear;
	   -moz-transition: all .2s linear;
	     -o-transition: all .2s linear;
		    transition: all .2s linear;	
}

.tdl-holder label:hover a{
	display: block;
}

.tdl-holder label a:hover{	
	background-color:#fff;
	color:#de3f53;
}

.tdl-holder input[type="checkbox"]{
	cursor: pointer;
	opacity: 0;
	position: absolute;
}

.tdl-holder input[type="checkbox"] + i{
	background-color: #404a6e;
	border-radius: 50%;
	display: block;
	height: 16px;
	position: absolute;
	top:20px;
	width: 16px;	
	z-index: 1;
}

.tdl-holder input[type="checkbox"]:checked + i::after{
	background-color: #6E6E96;
	border-radius: 50%;
	content: '';
	display: block;
	height:8px;
	left:4px;
	position: absolute;
	top:4px;
	width:8px;	
	z-index: 2;
}

.tdl-holder input[type="checkbox"]:checked ~ span{	
	color: #586186;
	text-decoration: line-through;
}

.tdl-holder input[type="text"]{
	background-color: #171d37;
	border: none;
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
	box-shadow: inset 0 0 8px 0 #0e1329;
	color: #464f72;
	font-size:14px;
	margin:0;
	padding:20px 15px;
	width:270px;
	-webkit-transition: all .2s linear;
	   -moz-transition: all .2s linear;
	     -o-transition: all .2s linear;
		    transition: all .2s linear;		
}

.tdl-holder input[type="text"]:hover{
	color:#4c577f;
}

.tdl-holder input[type="text"]:focus{
	color:#fff;
}

.tdl-holder ::-webkit-input-placeholder {color: #464f72;} /* WebKit browsers */
.tdl-holder :-moz-placeholder 			{color: #464f72;} /* Mozilla Firefox 4 to 18 */
.tdl-holder ::-moz-placeholder 			{color: #464f72;} /* Mozilla Firefox 19+ */
.tdl-holder :-ms-input-placeholder 		{color: #464f72;} /* Internet Explorer 10+ */



.tdl-holder li.remove{
	-webkit-animation:collapseItem 300ms ease;
			animation:collapseItem 300ms ease;
	-webkit-transform-origin: 50% 0%;
		-ms-transform-origin: 50% 0%;
			transform-origin: 50% 0%;

}

.tdl-holder li.remove span{
	color: #586186;
	text-decoration: line-through;
}

@keyframes collapseItem {
    0% 		{ -ms-transform: perspective(500px) rotateX(0deg);transform: perspective(500px) rotateX(0deg); 	}
    100% 	{ -ms-transform: perspective(500px) rotateX(-90deg);transform: perspective(500px) rotateX(-90deg); }
}

@-webkit-keyframes collapseItem {
    0% 		{ -webkit-transform: perspective(500px) rotateX(0deg); 	}
    100% 	{ -webkit-transform: perspective(500px) rotateX(-90deg);}
}
</style>
</head>
<body>
		<div class="tdl-holder">
			<h2>TO DO LIST</h2>
			<div class="tdl-content">
				<ul>
					<li><label><input type="checkbox"><i></i><span>get up</span><a href='#'>–</a></label></li>
					<li><label><input type="checkbox" checked><i></i><span>stand up</span><a href='#'>–</a></label></li>
					<li><label><input type="checkbox"><i></i><span>don't give up the fight.</span><a href='#'>–</a></label></li>
					<li><label><input type="checkbox" checked><i></i><span>save the world.</span><a href='#'>–</a></label></li>
					<li><label><input type="checkbox"><i></i><span>do something else</span><a href='#'>–</a></label></li>
				</ul>
			</div>
			<input type="text" class="tdl-new" placeholder="Write new item and hit 'Enter'...">
		</div>
</body>
</html>