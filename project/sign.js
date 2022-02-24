function validation() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var male = document.getElementById('male');
    var female = document.getElementById('female');
    var other = document.getElementById('other');
    var date = document.form.date.value;
    var password = document.getElementById("password").value;
    var phone_number = document.getElementById("phone_number").value;
    var type = document.form.type.value;

    var district = document.form.district.value;
    var error_message = document.getElementById("error_message");
    error_message.style.padding = "10px";
    if (name == "") {
        text = "<i>Please Enter Your Name !<i>";
        error_message.innerHTML = text;
        return false;
    }
    if (email.indexOf("@") == -1 || email.length < 6) {
        text = "<i>Enter A Valid EMAIL !<i>";
        error_message.innerHTML = text;
        return false;
    }
    if ((male.checked == false) && (female.checked == false) && (other.checked == false)) {
        text = "<i>Select Your Gender<i>";
        error_message.innerHTML = text
        document.form.gender.value;
        return false;
    }
    if (document.form.date.value == "") {
        text = "<i>Select A Date !<i>";
        error_message.innerHTML = text;
        return false;
    }
    if (password == "") {
        text = "<i>Enter A  Password !<i>";
        error_message.innerHTML = text;
        return false;
    }

    if (isNaN(phone_number) || phone_number.length < 10) {
        text = "<i> Enter A Valid Mobile Number !<i>";
        error_message.innerHTML = text;
        return false;
    }

    if (document.form.type.selectedIndex == "") {
        text = "<i>Select Your role !<i>";
        error_message.innerHTML = text;
        return false;
    }

    if (document.form.district.selectedIndex == "") {
        text = "<i> Select Your District !<i>";
        error_message.innerHTML = text;
        return false;
    }

    alert(" REGISTRATION COMPLETED SUCESSFULLY")
    return true;


}