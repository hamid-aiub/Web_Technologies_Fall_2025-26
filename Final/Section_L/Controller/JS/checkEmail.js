function CheckEmail(){
    const email  = document.getElementById("email").value;
    const xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function (){
        const response = JSON.parse(this.responseText);
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("ajaxResponse").innerHTML = response.message;
        }else{
            document.getElementById("ajaxResponse").innerHTML = this.status;
        }

    }
    xHttp.open("POST", "../Controller/checkEmail.php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("email="+email);
}