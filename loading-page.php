<!DOCTYPE html>
<html>
<head>
  <title>SCDB - Login | &copy; Offical Website SCDB IPDN</title>
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
</head>
<body>
<script>
   setTimeout(function(){
      window.location.href = 'http://127.0.0.1/login-animation/15/Dashboard/';
   }, 9000);
</script>
<style type="text/css">
/* Animation properties */
.star {
  animation: star 10s ease-out infinite;
}
.wars {
  animation: wars 10s ease-out infinite;
}
.byline span {
  animation: spin-letters 10s linear infinite;
}
.byline {
  animation: move-byline 10s linear infinite;
}

/* Keyframes */
@keyframes star {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(-0.75em);
  }
  20% {
    opacity: 1;
  }
  89% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes wars {
  0% {
    opacity: 0;
    transform: scale(1.5) translateY(0.5em);
  }
  20% {
    opacity: 1;
  }
  90% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: translateZ(-1000em);
  }
}

@keyframes spin-letters {
  0%, 10% {
    opacity: 0;
    transform: rotateY(90deg);
  }
  30% {
    opacity: 1;
  }
  70%, 86% {
    transform: rotateY(0);
    opacity: 1;
  }
  95%, 100% {
    opacity: 0;
  }
}

@keyframes move-byline {
  0% {
    transform: translateZ(5em);
  }
  100% {
    transform: translateZ(0);
  }
}

/* Make the 3D work on the container */
.starwars-demo {
  perspective: 800px;
  transform-style: preserve3d;
}

/* General styles and layout */
body {
  background: #000 url(//cssanimation.rocks/demo/starwars/images/bg.jpg);
  /*background: #f6f5f7;*/
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: 'Montserrat', sans-serif;
  height: 100vh;
  margin: -20px 0 50px;

  /*height: 100%;*/
  /*background-repeat: no-repeat;*/
  /*background:#52b7e5;*/
  /*position: relative;*/
}

.starwars-demo {
  height: 17em;
  left: 50%;
  position: absolute;
  top: 53%;
  transform: translate(-50%, -50%);
  width: 34em;
}

.byline span {
  display: inline-block;
}

img {
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.star, .wars, .byline {
  position: absolute;
}

.star {
  top: -12.75em;
}

.wars {
  bottom: -0.5em;
}

.byline {
  color: #fff;
  font-family: Rubik,sans-serif;
  font-size: 2.25em;
  left: -2em;
  /*letter-spacing: 0.4em;*/
  right: -2em;
  text-align: center;
  /*text-transform: uppercase;*/
  /*top: 29%;*/
  top: 100%;
}

/*** Media queries for adjusting to different screen sizes ***/

@media only screen and (max-width: 600px) {
  .starwars-demo {
    font-size: 10px;
  }
}

@media only screen and (max-width: 480px) {
  .starwars-demo {
    font-size: 7px;
  }
}
</style>
<div class="starwars-demo">
  <!-- <img src="//cssanimation.rocks/demo/starwars/images/star.svg" alt="Star" class="star"> -->
	<img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" alt="Star" class="star">
  <!-- <img src="//cssanimation.rocks/demo/starwars/images/wars.svg" alt="Wars" class="wars"> -->
	<!-- <img src="//cssanimation.rocks/demo/starwars/images/wars.svg" alt="Wars" class="wars"> -->
	<h2 class="byline" id="byline">Institut Pemerintahan Dalam Negeri</h2>
</div>
<script type="text/javascript">
	var byline = document.getElementById('byline');  	// Find the H2
	bylineText = byline.innerHTML;										// Get the content of the H2
	bylineArr = bylineText.split('');									// Split content into array
	byline.innerHTML = '';														// Empty current content

	var span;					// Create variables to create elements
	var letter;

	for(i=0;i<bylineArr.length;i++){									// Loop for every letter
	  span = document.createElement("span");					// Create a <span> element
	  letter = document.createTextNode(bylineArr[i]);	// Create the letter
	  if(bylineArr[i] == ' ') {												// If the letter is a space...
	    byline.appendChild(letter);					// ...Add the space without a span
	  } else {
			span.appendChild(letter);						// Add the letter to the span
	  	byline.appendChild(span); 					// Add the span to the h2
	  }
	}
</script>
</body>
</html>