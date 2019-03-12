var feeds = new Array();
window.onload = init;

function init() {
    getFeedData();
}

function getFeedData() {
    var url = new URL(window.location.href);
        var id = url.searchParams.get("id");

        var request = new XMLHttpRequest();
        request.open("GET", "./"+id+".json");
        request.onreadystatechange = function() {
           // var div = document.getElementById("feeds");
            if (this.readyState == this.DONE && this.status == 200) {
               // var type = request.getResponseHeader("Content-Type");
                //console.log("Content-type: " + type);
                //console.log("Status: " + this.statusText);
                    if (this.responseText != null) {
                            //div.innerHTML = this.responseText;
                            parseFeeds(this.responseText);
                            addFeeds();
                    }
                    else {
                           console.log("Error: no data");
                    }
            }
        };
        request.send();
        
}

function parseFeeds(feedJSON) {
        if (feedJSON == null || feedJSON.trim() == "") {
            return;
        }
        var feedArray = JSON.parse(feedJSON);
        if (feedArray.length == 0) {
            console.log("Error: the to-do list array is empty!");
            return;
        }
        for (var i = 0; i < feedArray.length; i++) {
            var feedItem = feedArray[i];
            feeds.push(feedItem);
        }
            //console.log("To-do array: ");
           // console.log(feeds);
 }
function addFeeds() {
        var xdiv = document.getElementById("feeds");
        for (var i = 0; i < feeds.length; i++) {
            var feedItem = feeds[i];
            xdiv.innerHTML +='<div class="swiper-slide"><div class="imgBox"><img src='+feedItem.src+'></div><div class="details"><h3><a href="'+feedItem.url+'">'+feedItem.title+'</a><br><span>'+feedItem.author+'</span></h3></div></div>';
        }
}