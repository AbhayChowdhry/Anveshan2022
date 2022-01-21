const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const email = loginForm.Email.value;

    if (email.includes("@iiitd.ac.in")) {
        alert("You have successfully logged in.");
        // location.reload();
        // document.getElementById('uname').value = username;
        localStorage.setItem("myValue", username);
        localStorage.setItem("myE", email);
        window.open("./dashboard.html")
    } else {
        alert("Invalid Email Id");
        location.reload();
    }
})


//     $(document).ready(function(){
//     $('.login-info-box').fadeOut();
//     $('.login-show').addClass('show-log-panel');
// });


// $('.login-reg-panel input[type="radio"]').on('change', function() {
//     if($('#log-login-show').is(':checked')) {
//         $('.register-info-box').fadeOut(); 
//         $('.login-info-box').fadeIn();
        
//         $('.white-panel').addClass('right-log');
//         $('.register-show').addClass('show-log-panel');
//         $('.login-show').removeClass('show-log-panel');
        
//     }
//     else if($('#log-reg-show').is(':checked')) {
//         $('.register-info-box').fadeIn();
//         $('.login-info-box').fadeOut();
        
//         $('.white-panel').removeClass('right-log');
        
//         $('.login-show').addClass('show-log-panel');
//         $('.register-show').removeClass('show-log-panel');
//     }
// });
  
