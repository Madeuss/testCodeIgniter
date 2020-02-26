function ValidateEmail(inputText)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(inputText.value.match(mailformat))
    {
        document.form.email.focus();
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        document.right.email.focus();
        return false;
    }
}
