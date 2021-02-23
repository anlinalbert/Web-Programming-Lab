function validate() {
    // alert("Login successfully");
    // var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    // var phonecode = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;


    var name = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var myemail = document.getElementById("myemail").value;
    var phone = document.getElementById('phone').value;

    if(name == "" || dob == "" || myemail == "" || phone == "") 
        alert("Please fill out the details.");

    // alert(phone);

    // if(phone.value.match(phonecode)) 
    //     alert("Correct");
    // else
    //     alert("no");
}