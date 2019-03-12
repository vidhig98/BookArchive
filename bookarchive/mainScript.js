function loadgif(param){

    if(param ==true){
        window.scrollBy(0, 600);
        document.getElementById('loading').style.visibility="visible";
        document.getElementById('loading').style.position="absolute";
        document.getElementById('loading').style.top="100vh";


    }else{
       
            document.getElementById('loading').style.visibility="hidden";
    }
}
function loaderror(error){
    if(error !=''){
        document.getElementById('loaderror').style.display="block";
        document.getElementById('loaderror').background="url('./images/error.png')";
        document.getElementById('loaderror').style.visibility="visible";
    }else{
        document.getElementById('loaderror').style.display="none";
        document.getElementById('loading').style.visibility="hidden";
    }
}


var loading = document.getElementById('top-container');
var mainbody =document.getElementById('html');
          
    window.onload = function () {  
            document.getElementById('loading').style.visibility="hidden";
            document.getElementById('wrapper').style.visibility="visible";
        }
        
    function close_menu(){
        
            document.getElementById('html').style.width='100%';
            document.getElementById('sidebar').style.width='0';
            document.getElementById('html').style.marginLeft='0';
        }

    
    function diplay_menu(){
            document.getElementById('sidebar').style.display='inline-block';
            document.getElementById('html').style.width='85%';
            document.getElementById('sidebar').style.width='15%';
            document.getElementById('html').style.marginLeft='15%';
            if(window.innerWidth<640){
                document.getElementById('sidebar').style.width='60%';
            }

    }
            window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("Scrolltop").style.visibility = "visible";
        }else {
            document.getElementById("Scrolltop").style.visibility = "hidden";
           
        }
        
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
                
               