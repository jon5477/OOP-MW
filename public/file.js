function selectCountry(countryName) {
    fetchCities(countryName);
    fetchCountryData(countryName);
}
function selectVideo(countryName){
    fetchCountryUrl(countryName);
}

function fetchCities(countryName) {
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("citylist").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","/city/search/?country=" + countryName, true); // Route to the correct controller
    xmlhttp.send();
}
function fetchCountryUrl(countryName){
    //alert(cityName);
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("output").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","/country/video/?country=" + countryName, true); // Route to the correct controller
    xmlhttp.send();
}

function fetchCountryData(countryName) {
    //alert(cityName);
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("output").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","/country/video/?country=" + countryName, true); // Route to the correct controller
    xmlhttp.send();
}

function fetchCityData(cityName) {
    //alert(cityName);
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("output").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","/city/info/?city=" + cityName, true); // Route to the correct controller
    xmlhttp.send();
}

function getSelectedValue(){
    var e=document.getElementById("")
}
