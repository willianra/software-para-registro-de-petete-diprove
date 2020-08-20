<!DOCTYPE>

<html>

<head>

<meta ="charset=UTF-8" />

<title>Full Screen Gallery</title>

<style>

html {

height: 100%;

}

body {

font-family: helvetica, sans-serif;

height: 100%;

margin: 100px 0;

}

.photo-overlay {

    height: 100%;

    width: 100%;

    position: absolute;

    top: 0;

    left: 0;

    background-color:#9F3;

    background-size: cover;

    }

    .close-photo-overlay {

    font-size: 30px;

    position: absolute;

    right: 50px;

    top: 50px;

    color: #fff;

    z-index: 2;

    padding: 6px 9px;

    border: 1px solid #fff;

    }

.imgBox {

    width: 20%;

    margin: 0 auto;

}

img {

    max-width: 100%;

    height: auto;

    padding: 0 0 15px 0;

}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script>

$(document).ready(function() {

$('.photo-overlay').hide();

$('.thumb').click(function(event) {

event.preventDefault();

var imageUrl = $(this).attr('href');

$('.photo-overlay').show().css('background-image', 'url(' + imageUrl + ')');

});

$('.close-photo-overlay').css('cursor' , 'pointer').click(function() {

$('.photo-overlay').hide();                                                                                                   

});

});

</script>

</head>

<body>

<div class="photo-overlay">

<div class="close-photo-overlay"><i class="fa fa-times"></i>

</div>

<!-- end close-photo-overlay -->

</div>

<!-- end photo-overlay -->

<div class="imgBox">

<a href="https://upload.wikimedia.org/wikipedia/commons/6/63/Monarch_In_May.jpg" class="thumb"><img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Monarch_In_May.jpg" /></a>

</div>

<!-- end imgBox -->

<div class="imgBox">

<a href="http://cdn.funcheap.com/wp-content/uploads/2011/06/Butterfly_Beauty.jpg" class="thumb"><img src="http://cdn.funcheap.com/wp-content/uploads/2011/06/Butterfly_Beauty.jpg" class="thumb"/></a>

</div>

<!-- end imgBox -->

</body>

</html>