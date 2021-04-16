function fillUpdate(prid) {
    if (prid != "") {
        var ao = new XMLHttpRequest();
        ao.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByName("up_prod_name").innerHTML = this.responseText;
            }
        };
        ao.open("GET", "ajax.php?proid = " + prid, true);
        ao.send();
    }
}