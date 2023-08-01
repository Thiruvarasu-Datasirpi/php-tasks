function submit() {
    var a;
    if (window.XMLHttpRequest) {
        a = new XMLHttpRequest();
    } else {
        a = new ActiveXObject("Microsoft.XMLHTTP");
    }

    a.onreadystatechange = function () {
        if (a.readyState == 4 && a.status == 200) {
            alert(a.responseText);
        }
    };

    var name = document.getElementById("nameInput").value;
    var city = document.getElementById("cityInput").value;
    var url = "save.php";
    var val = "name=" + name + "&city=" + city;

    a.open("POST", url, true);
    a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    a.setRequestHeader("Content-length", val.length);

    a.send(val);
}