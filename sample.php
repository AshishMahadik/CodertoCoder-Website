<!DOCTYPE html>
<html>
<head>
<title>Sample</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">




<style type="text/css">


a {
	text-decoration: none;
}

.menu_view{
	visibility: hidden;
	max-width: 0px;
	max-height: 0px;
	transition: max-width 0.2s ease-out;
	overflow: hidden;
}
.menu {
	position: fixed;
    height: 100%;
    right: 0;
    top: 0;
    visibility: visible;
    z-index: 1;
    background-color: #1e1f26;
    opacity: 1;
    box-shadow: 0 0 50px 50px rgba(0,0,0,0.5);
    overflow-y: auto;
    max-width: 260px;
    max-height: 1000px;
    transition: max-width 0.5s ease-in;
}
.menu ul {
	list-style: none;
}
.sub-menu {
	visibility: hidden;
	max-height: 0;
    transition: max-height 0.2s ease-out;
    overflow: hidden;
}

.sub-menu a {
	color: #4DD0E1;
	font-size: 15px;
}

.sub-menu-view {
	visibility: visible;
	max-height: 500px;
    transition: max-height 0.5s ease-in;
}

.ul--reset {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.vertical-menu {
  font-family: "Oswald", sans-serif;
}

.vertical-menu-wrapper {
  display: flex;
}
.active-marker {
  transition: transform 0.4s;
  width: 5px;
  background-image: linear-gradient(90deg, #ff5e5e, #f54985);
  background-size: 100%;
  height: 30px;
  margin-left: 7px;
  transform: translateY(0px);
}

.vertical-menu-item {
  font-size: 1.1em;
  color: #fff;
  transition: all 0.4s;
  text-align: right;
}
.vertical-menu-item .is-active {
  font-size: 1.4em;
}

.link--inverse-menu {
  color: #fff;
}
.link--inverse-menu:visited {
  color: #fff;
}
.link--inverse-menu:active {
  color: #d3d3d3;
}

</style>


</head>
<body>

<head>
	<nav class="navbar bg-light">
	  <ul class="nav mr-auto" style="font-size: 30px;">
	    <li class="nav-item"><a href="#">Home1</a></li>  
		<li class="nav-item"><a href="#">Home2</a></li>
		<li class="nav-item" onclick="open_menu()"><a href="#">Home3</a></li>
	  </ul>
	</nav>
</head>








<div class="menu_view vertical-menu-wrapper" id="menu">
		<ul class="menu_content vertical-menu ul--reset">
			<li class="menu_item vertical-menu-item">
				<a href="#" onclick="sub_menu1()" class="link--inverse-menu" data-vertical="1">Services</a>
				<ul class="sub-menu" id="sub-menu1">
					<li><a href="#">Brand</a></li>
					<li><a href="#">Web Apps</a></li>
					<li><a href="#">Mobile Apps</a></li>
				</ul>
			</li> <!-- item-has-children -->

			<li class="menu_item vertical-menu-item">
				<a href="#" onclick="sub_menu2()" class="link--inverse-menu" data-vertical="2">Products</a>
				<ul class="sub-menu" id="sub-menu2">
					<li><a href="#">Product 1</a></li>
					<li><a href="#">Product 2</a></li>
					<li><a href="#">Product 3</a></li>
					<li><a href="#">Product 4</a></li>
					<li><a href="#">Product 5</a></li>
				</ul>
			</li> <!-- item-has-children -->

			<li class="menu_item vertical-menu-item">
				<a href="#" onclick="sub_menu3()" class="link--inverse-menu" data-vertical="3">Stockists</a>
				<ul class="sub-menu" id="sub-menu3">
					<li><a href="#">London</a></li>
					<li><a href="#">New York</a></li>
					<li><a href="#">Milan</a></li>
					<li><a href="#">Paris</a></li>
				</ul>
			</li> <!-- item-has-children -->
		</ul> <!-- cd-navigation -->
		<i class='active-marker'>	
</div>


<script>
function open_menu() {
   var element = document.getElementById("menu");
   element.classList.toggle("menu");
}

function sub_menu1() {
   var element = document.getElementById("sub-menu1");
   element.classList.toggle("sub-menu-view");
}

function sub_menu2() {
   var element = document.getElementById("sub-menu2");
   element.classList.toggle("sub-menu-view");
}

function sub_menu3() {
   var element = document.getElementById("sub-menu3");
   element.classList.toggle("sub-menu-view");
}
</script>






<script type="text/javascript">
var getItemOffset = function getItemOffset(item) {
  return item.offsetTop;
};

var moveMarker = function moveMarker(offset) {
  var marker = document.querySelector('.active-marker');
  marker.style.transform = 'translateY(' + offset + 'px)';

};

var toggleActive = function toggleActive(e) {
  e.preventDefault();

  // Remove any existing active classes
  var links = document.querySelectorAll('.vertical-menu-item');
  links.forEach(function (link) {return link.classList.remove('is-active');});

  // Add class to active link
  var activeItem = e.target.parentElement;
  activeItem.classList.toggle('is-active');
  var offset = getItemOffset(activeItem);
  moveMarker(offset);
};

// Attach click event listener
var menu = document.querySelector('.vertical-menu');

menu.addEventListener('click', toggleActive);	
</script>

</body>
</html>