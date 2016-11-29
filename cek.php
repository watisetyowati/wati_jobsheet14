<?php
mysql_connect("localhost", "root","");
mysql_select_db("user");

$query = mysql_query("select id_prop, prop from prop");
?>

<html>
<head>
<script>
var drz, kata, x;
function cekid(){
    kata = document.getElementById("userid").value;
    if(kata.length>2){
        document.getElementById("teks").innerHTML = "checking...";
        drz = buatajax();
        var url="cekid.php";
        url=url+"?q="+kata;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus();
    }
}

function stateChanged(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks").innerHTML = data;
    }
}

function fokus(){
    document.getElementById("userid").focus();
}

function cekemail(){
    email = document.getElementById("email").value;
    if(kata.length>2){
        document.getElementById("teks2").innerHTML = "checking...";
        drz = buatajax();
        var url="cekemail.php";
        url=url+"?e="+email;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged2;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus2();
    }
}

function stateChanged2(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks2").innerHTML = data;
    }
}

function fokus2(){
    document.getElementById("email").focus();
}

function cekumur(){
    umur = document.getElementById("umur").value;
    if(kata.length>2){
        document.getElementById("teks3").innerHTML = "checking...";
        drz = buatajax();
        var url="cekumur.php";
        url=url+"?u="+umur;
        url=url+"&sid="+Math.random();
        drz.onreadystatechange=stateChanged3;
        drz.open("GET",url,true);
        drz.send(null);
    }else{
        fokus3();
    }
}

function stateChanged3(){
var data;
    if (drz.readyState==4){
        data=drz.responseText;
        document.getElementById("teks3").innerHTML = data;
    }
}

function fokus3(){
    document.getElementById("umur").focus();
}

function cek_kec(){ 
    kec = document.getElementById("prop").value; 
    if(kec.length>0){ 
        document.getElementById("teks4").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cek_kab.php"; 
        url=url+"?k="+kec; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged4; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus4(); 
         } 
} 

function stateChanged4(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks4").innerHTML = data; 
    } 
}

function fokus4(){ 
    document.getElementById("prop").focus(); 
}  

function cek_nama(){ 
    kec = document.getElementById("nama").value; 
    if(kec.length>0){ 
        document.getElementById("teks5").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="ceknama.php"; 
        url=url+"?n="+kec; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged5; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus5(); 
         } 
} 

function stateChanged5(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks5").innerHTML = data; 
    } 
}

function fokus5(){ 
    document.getElementById("nama").focus(); 
}  

function buatajax(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}

</script>
</head>
<body style="font-family:verdana;font-size:9pt">
<form>
User ID : <input type=text name=userid id=userid onblur=cekid()>
<span id=teks style="color:red;font-size:8pt"></span> <br><br>
Email : <input type=text name=email id=email onblur=cekemail()>
<span id=teks2 style="color:red;font-size:8pt"></span> <br><br>
Nama : <input type="teks" name="nama" id=nama onblur=cek_nama()>
<span id=teks5 style="color:red;font-size:8pt"></span> <br><br>
Umur : <input type="teks" name="umur" id=umur onblur=cekumur()>
<span id=teks3 style="color:red;font-size:8pt"></span> <br><br>
Provinsi : 
<?php 
    if(mysql_num_rows($query)>0){
    echo "<select name='prop' id='prop' onchange=cek_kec()>";
    echo "<option value='0'>Pilih<br>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
?>
<span id=teks4 style="color:red;font-size:8pt"></span> <br>
</form>
</body>
</html>