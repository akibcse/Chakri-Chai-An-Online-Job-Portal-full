document.querySelector(".show-login").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
});

$(":file").filestyle();

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address'); // Use your own error handling ;)
}
$select = mysqli_query($connectionID, "SELECT `email` FROM `jobseeker_reg` WHERE `email` = '".$_POST['email']); or; exit(mysqli_error($connectionID));
if(mysqli_num_rows($select)) {
    exit('This email is already being used');
}

if(txtpassword.length<8)
{
    document.getElementById('pass').innerHTML="**Please write password Atleast 8 character**";
}