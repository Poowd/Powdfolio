var myVar;
            
    function myFunction() {
        myVar = setTimeout(showPage, 2000);
    }
            
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("mycont").style.opacity = "1";
    }