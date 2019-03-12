<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="swiper.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script type="text/javascript" src="swiper.min.js"></script>
<div class="swiper-container">
    <div class="swiper-wrapper" id="feeds">
        
      
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<footer></footer>
<script>
function slideit(){

}
var tag = document.createElement("script");
tag.src = "./slide.js";
document.getElementsByTagName("footer")[0].appendChild(tag);
document.getElementsByTagName("body").style="width:100%";

</script>
<script src="./script.js"></script>
</body>
</html>