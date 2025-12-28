function CheckEmail() {
    const email = document.getElementById("email").value;
    const xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function (){
        const response = JSON.parse(this.responseText);
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("AjaxResponse").innerHTML = response.message;
        }else{
            document.getElementById("AjaxResponse").innerHTML  = this.status;
        }
    }
    xHttp.open("GET", "../Controller/checkEmail.php", true);
    xHttp.send("email="+email);
}