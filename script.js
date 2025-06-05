function switchLang(lang) {
  if (lang === 'si') {
    document.getElementById("hero-title").textContent = "ශ්‍රී ලංකා ක්‍රිකට් නිළ වෙබ් අඩවියට පිළිගනිමු";
    document.getElementById("hero-subtitle").textContent = "ශ්‍රී ලංකා ක්‍රිකට් තරඟ සහ පුවත් සඳහා ඔබේ මධ්‍යස්ථානයයි.";
  } else {
    document.getElementById("hero-title").textContent = "Welcome to SLCF Official Website";
    document.getElementById("hero-subtitle").textContent = "Your hub for Sri Lanka cricket matches and news.";
  }
}

function signup(){
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var response = document.getElementById("response");

   // alert("FirstName:"+fname+"\nLastName:"+lname+"\nemail:"+email+"\npassword:"+password);

   var form = new FormData();

   form.append("fname",fname);
   form.append("lname",lname);
   form.append("email",email);
   form.append("password",password);

   var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            var resText = xhr.responseText;

            if (resText == 'success') {
                response.classList = 'text-success text-center'
                response.innerHTML = "Registraion Successfull";

            setTimeout(function () {
                window.location.href = "index.php";
            },1000);

            }else{
                response.classList = "text-danger text-center"
                response.innerHTML = resText;

            }
        }
    }

   xhr.open("POST", "signupProcess.php", true);
   xhr.send(form);
}

// signin

function signin(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var response = document.getElementById("response");

    //alert("Email: "+email+"\nPassword:"+password);

    var form = new FormData();

    form.append("email",email);
    form.append("password",password);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var resText = xhr.responseText;
            
            if(resText == 'Success') {
                response.classList = 'text-success text-center'
                response.innerHTML = "Registraion Successfull";

                setTimeout(function() {
                    window.location.href = "home.php";
                },1000);

            }else{
                response.classList = "text-danger text-center"
                response.innerHTML = resText;
            }
        }
    }

    xhr.open("POST", "signinProcess.php", true);
    xhr.send(form);
}
