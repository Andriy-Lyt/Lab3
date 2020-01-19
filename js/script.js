window.onload=function() {
    // alert("Vasya");

//===Form Validation====================

    var s_form = document.forms.contact_form;
    s_form.onsubmit = validateForm;

    function validateForm() {
        var name = document.forms["contact_form"]["name"];
        var noname = document.getElementById("noname");

        var email = document.forms["contact_form"]["email"];
        var noemail = document.getElementById("noemail");

        var subject = document.forms["contact_form"]["subject"];
        var nosubject = document.getElementById("nosubject");

        var radio1 = document.getElementById("radio1");
        var radio2 = document.getElementById("radio2");
        var noradio = document.getElementById("noradio");
        var radios = document.getElementById("radios");

        var checkbox1 = document.getElementById("checkbox1");
        var checkbox2 = document.getElementById("checkbox2");
        var nocheckbox = document.getElementById("nocheckbox");
        var checkboxes = document.getElementById("checkboxes");

        var message = document.forms["contact_form"]["message"];
        var nomessage = document.getElementById("nomessage");

        var bunny = document.getElementById("bunny");

        if (name.value === "" || !isNaN(name.value)) {
            noname.innerHTML = "Please enter Your Name";
            noname.style.border = "1px solid rgb(119, 216, 150)";
            noname.style.color = "#20a536";
            name.focus();
            name.style.backgroundColor = "#84efb6";
            return false;
        }
        if (email.value === "") {
            noemail.innerHTML = "Please enter Your Email";
            noemail.style.border = "1px solid rgb(119, 216, 150)";
            noemail.style.color = "#20a536";
            email.focus();
            email.style.backgroundColor = "#84efb6";
            return false;
        }
        if (subject.value === "select") {
            nosubject.innerHTML = "Please select a Subject";
            nosubject.style.border = "1px solid rgb(119, 216, 150)";
            nosubject.style.color = "#20a536";
            subject.focus();
            subject.style.backgroundColor = "#84efb6";
            return false;
        }
        if (!(radio1.checked || radio2.checked)) {
            noradio.innerHTML = "Please choose";
            noradio.style.color = "#20a536";
            noradio.style.border = "1px solid rgb(119, 216, 150)";
            radios.style.backgroundColor = "#84efb6";
            return false;
        }
        if (!(checkbox1.checked || checkbox2.checked)) {
            nocheckbox.innerHTML = "Please choose";
            nocheckbox.style.color = "#20a536";
            nocheckbox.style.border = "1px solid rgb(119, 216, 150)";
            checkboxes.style.backgroundColor = "#84efb6";
            return false;
        }
        if (message.value === "") {
            nomessage.innerHTML = "Please enter Your Message";
            nomessage.style.color = "#20a536";
            nomessage.style.border = "1px solid rgb(119, 216, 150)";
            message.style.backgroundColor = "#84efb6";
            return false;
        }
        else {
            //In order for pop up window to appear on another computer, below "http" address should be adjusted according to the local folder names
            bunny.style.visibility = "visible";
            bunny.style.animation = "bunny-anim 4s forwards";
            setTimeout('window.open("http://localhost/humber_php/Lab2/pages/success.html", "PopUpWindow", "width=500,height=300,left=600,top=250")', 2000);
        
            //had to return false to have animation running
            return false;
        }
    }
//End of FORM Validation =====================
}
