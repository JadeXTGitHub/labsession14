<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

	<title>Jennifer Thomas - STIM 3320 - Session 10 LAB</title>

<style>

body {
  font-family: arial, sans-serif;
  background-color: rgb(22, 73, 60);
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAA1BMVEXd3d3u346CAAAASElEQVR4nO3BMQEAAADCoPVPbQwfoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIC3AcUIAAFkqh/QAAAAAElFTkSuQmCC);
  color:rgb(12, 12, 12)  }

h1 {
  font-family: 'Times New Roman', Times, serif, sans-serif;
  background-color: rgb(114, 90, 134);
  color:white;
  text-align: center;
  font-weight: bold;}

h2 {
  font-family: 'Courier New', Courier, monospace, sans-serif;
  background-color: rgb(3, 2, 49);
  color: white}

h3 {
	font-family: 'Times New Roman', Times, serif, sans-serif;
	background-color: rgb(84, 12, 218);
	color: white}

a {
    color: #0a0a0a;}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;}


.trial {
  background-color: black;
  color:blue  }

.email {
  color: rgb(38, 126, 75)   }

.dbu {
  color:blue  }


  
  * { box-sizing: border-box; }


header { background-image: url(header.jpg);
         background-size: cover;
         background-repeat: no-repeat;   
}

header { grid-area: header; }
nav    { grid-area: nav; }
main   { grid-area: main; }
aside  { grid-area: aside; }
footer { grid-area: footer; }


#gallery {   display: grid; 
             grid-template-columns: repeat (3, 200px);
			 grid-template-rows: auto;
             grid-gap: 2em;	
             gap: 2em;	 
}



nav {   font-size: 120%; }

nav ul { padding-left: 0;
         display: flex; 
	     flex-direction: row; 
	     flex-wrap: wrap; 
	     justify-content: space-around; }	  
nav ul { list-style-type: none; }
nav li { width: 20%;
		 min-width: 6em;
	     font-size: 110%;
		 text-align: center;
		 background-color: #260058; 
		 margin: .5em;
		 padding: .5em; }
nav a { text-decoration: none;}
nav a:link { color: #F7F1E3; }
nav a:visited { color: #B9EDF0; }
nav a:hover { color: #FFFFFF; }


aside {  padding: 1em;}

main {   padding: 0 1em 1em;    }

.center{text-align:center!important}

footer { background-color: #CCCCCC;
        text-align: center;
		 font-style: italic;
		 padding: 1em; }

div.form { display: block;
    text-align: center;}
form { display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;}

</style>

</head>

   <body>
	 
	<nav>
		<ul>
		 <li><a href="index.php">Home</a></li>
		 <li><a href="anotherpage.php">Another Page</a></li>
		 <li><a href="#contact">Contact</a></li>
		</ul> 
	   </nav>
	<div>
	<h1>Jennifer Thomas</h1> 		
		  <hr/>
		  <h1>Using JavaScript</h1>
		  <ul>
			<li>
			  <a href="#" onmouseover="alert('You moused over');">Mouseover test</a>
			</li>
			<li>
			  <a href="#" onmouseout="alert('You moused out');">Mouseout test</a>
			</li>
		  </ul>
		
		 
		  </p>
	  
	<h2>About Me</h2>
	  <p><b><i>Hi y&#39;all, my name is Jennifer Thomas, and I am studying Web Page Design at <a href="https://dbu.edu">Dallas Baptist University</a>, primarily to satisfy requirements for my MIS BS degree, and secondarily because I enjoy technology, learning, and deepening skills in all areas. </i></b></p>
	  <img src= "https://thumbs.dreamstime.com/b/clear-vision-4581472.jpg" class="center" alt="glasses" >

		
	  <p class="dbu"><a href="https://dbu.edu"> <img src="https://www.dbu.edu/templates/uber/images/dbu-logo.png" alt="DBU" class="center"> </a> </p>
	  
	<h2>My Favorite Quote</h2>
	  <blockquote>&quot;Tell me and I forget. Teach me and I remember. Involve me and I learn.&quot; –Benjamin Franklin </blockquote>
	  
	  <header>

	<h3> Things I enjoy</h3>
	<ol>
	  <li>technology</li>
	  <li>working out</li>
	  <li>spending time with my dogs</li>
	  <li>learning</li>
	</ol>
	  
	<h3>Adjectives that describe me</h3>
	<ul>
	<li>Inquisitive</li>
	<li>Motivated</li>
	<li>Dependable</li>
	<li>Empathetic</li>
	<li>Open-minded</li>
	</ul>
	  
	<h3> My Favorite Web Sites</h3>
	<a href="https://lab3thomasj.herokuapp.com/"> A copy of this page running on the internet</a> - <mark>YAY I was able to publish this page on the internet using the build pipeline and the Heroku hosting platform</mark><br>
	<a href="https://www.google.com">Google</a><br>	
	<a href="https://threatpost.com">ThreatPost</a><br>
	<a href="https://dbu.onelogin.com/portal/">My DBU</a><br>
	<a href="https://github.com/">My GitHub Repository</a><br>
	
	<p>All kinds of things I can say here</p>
	<br>
	<br>
	<br>


<!-- Guestbook -->

<div id="guestbook">
<h3> Please Sign My Guestbook</h3>
<form method="get" action="thankyou.html">
<b>Please enter your name:
</b><INPUT NAME="username" size="25"> <br>

<b>Please enter your e-mail address:
</b><INPUT Name="usermail" size="30">
<p>

<b>Do you like my guestbook?</b>
<P>

<INPUT TYPE="radio" NAME=I_think_that VALUE="It's_okay">
It's Okay!
<INPUT TYPE="radio" NAME=I_think_that VALUE="It's_notgreat">
It could use some work!
<INPUT TYPE="radio" NAME=I_think_that VALUE="No_Comment">
No Comment!
<br>
<br>
<b>What browser are you using?</b>
<select size="1" name="browser" id="browser">
<option value="Edge">Edge</option>
<option value="Chrome">Chrome</option>
<option value="InternetExplorer">Internet Explorer</option>
<option value="Safari">Safari</option>
<option value="Other">Other</option>
</select>
<br><br>
<b>How hard is HTML5, CSS, and web design?</b>
<form method="get">
Easy <input type="range" name="myChoice" id="myChoice" min="1" max="10"> Hard
 <br><br>
<INPUT TYPE=submit VALUE="Send">
<INPUT TYPE=reset VALUE="Start over">

</div>
</FORM>


<!-- Contact Section -->
<div id="contact">
<h3 class="center">Contact Me</h3>
  <p class="center"><em>I'd love your feedback!</em></p>
  <div class="form">
	<form method="get">
		First Name: <input type="text" name="fmail" id="fmail"><br><br>
		Last Name: <input type="text" name="lmail" id="lmail"><br><br>
		E-mail: <input type="text" name="email" id="email"><br><br>
		Comments:<br>
		<textarea name="comments" id="comments" rows="5" cols="40"></textarea><br><br>
		<input type="submit" value="Contact"> <input type="reset">
		</form>
</div>

<br>

	<footer>
	<small><i><b>Author:</b>Jennifer Thomas<br>
	<b>Class:</b>STIM 3320<br>
	<b>Date:</b>March 22, 2021</i></small>
	</footer>

	</body>
</html>