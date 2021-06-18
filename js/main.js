document.getElementById("send").addEventListener('click', function() {
    var data = document.getElementById('contact-me-form').elements;
    if(data.name.value.length !== 0 && data.email.value.length !== 0 && data.message.value.length !== 0){
   if(data.email.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", './send.php', true);
        
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function() { // Call a function when the state changes.
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                var response =JSON.parse(xhr.response);
               if(response.error == "1"){
                document.getElementById('alert').innerHTML ="<h4 class='alert-error'>Please fill all the input field</h4>";
 
               }else if(response.error == "2"){
                document.getElementById('alert').innerHTML ="<h4 class='alert-error'>The email address is invalid</h4>";
                
               }else if(response.error == "0"){
                document.getElementById('alert').innerHTML ="<h4 class='alert-error success'>Your email has been successfully sent</h4>";               }
            }
        }
        xhr.send("name="+data.name.value+"&email="+data.email.value+"&message="+data.message.value);
       
   }else{
    document.getElementById('alert').innerHTML ="<h4 class='alert-error'>The email address is invalid</h4>";
}
     
    }else{
        document.getElementById('alert').innerHTML ="<h4 class='alert-error'>Please fill all the input field</h4>";
    }
});