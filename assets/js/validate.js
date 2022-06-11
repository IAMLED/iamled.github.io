
function check_passMatch()
{
    var pass1 = document.getElementById('signup_password').value;

    var pass2 = document.getElementById('confirm_password').value;
    
    if(pass1 == pass2)
    {
        alert("Good Boy")
    }
    else
    {
        applicationForm.reportValidity();
    }
}