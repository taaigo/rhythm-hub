let box = document.getElementById("showPass");
let pass = document.getElementById("passwordInput");

console.log("test");
function showPassWord()
{
    if (box.checked)
    {
        pass.type = 'text';
    }
    else
    {
        pass.type = 'password';
    }
}