<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up/Sign in - Smart Farms</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rbga(0,0,50,0.8),rbga(0,0,50,0.8)),url();
            background-position: center;
            background-size: cover;
            position: relative;

        }
        .form-box{
            width: 95%;
            max-width: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background:#fff;
            padding: 50px 60px 70px;
            text-align: center;
        }
        .form-box h1{
            font-size: 30px;
            margin-bottom: 60px;
            color: #3c00a0;
            position: relative;
        }
        .form-box h1::after{
            content:" ";
            width: 30px;
            height: 4px;
            border-radius: 4px;
            background: #3c00a0;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-70%);
        }
        .input-field{
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display:flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }
        input{
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;
        }
        .btn-field{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .btn-field button{
            flex-basis: 48%;
            background: #3c00a0;
            color: #fff;
            height: 40px;
            border-radius: 20px;
            border: 0;
            outline: 0;
            cursor:pointer;
            transition: background 1.5s;
        }
        .input-area{
            height:280px;
        }
        .btn-field.disabled{
            background: #eaeaea;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign up</h1>
            <form>
                <div class="input-area">
                    <div class="input-field" id="namefield">
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="input-field" id="phonefield">
                        <input type="tel" placeholder="Phone no." pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </div>
                    <div class="input-field" id="emailfield">
                        <input type="text" placeholder="Email address">
                    </div>
                    <div class="input-field" id="passwordfield">
                        <input type="password" placeholder="Password" pattern="(?=.*\d).{6,}" required>
                    </div>
                    <div class="input-field" id="forgotpasswordfield" style="max-height: 0; overflow: hidden;">
                        <a href="#" id="forgotPasswordLink">Forgot Password?</a>
                    </div>
                </div>
                <div class="btn-field">
                    <button type="button" id="signupBtn">Sign up</button>
                    <button type="button" id="signinBtn" class="disable">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let signupBtn = document.getElementById("signupBtn");
            let signinBtn = document.getElementById("signinBtn");
            let namefield = document.getElementById("namefield");
            let phonefield = document.getElementById("phonefield");
            let emailfield = document.getElementById("emailfield");
            let passwordfield = document.getElementById("passwordfield");
            let forgotpasswordfield = document.getElementById("forgotpasswordfield");
            let title = document.getElementById("title");

            function showSignInFields() {
                namefield.style.maxHeight = "0";
                phonefield.style.maxHeight = "0";
                emailfield.style.maxHeight = "60px";
                passwordfield.style.maxHeight = "60px";
                forgotpasswordfield.style.maxHeight = "60px";
                title.innerHTML = "Sign In";
                signupBtn.classList.add("disable");
                signinBtn.classList.remove("disable");
            }

            function showSignUpFields() {
                namefield.style.maxHeight = "60px";
                phonefield.style.maxHeight = "60px";
                emailfield.style.maxHeight = "60px";
                passwordfield.style.maxHeight = "60px";
                forgotpasswordfield.style.maxHeight = "0";
                title.innerHTML = "Sign up";
                signupBtn.classList.remove("disable");
                signinBtn.classList.add("disable");
            }

            signinBtn.onclick = function () {
                showSignInFields();
            };

            signupBtn.onclick = function () {
                showSignUpFields();
            };

            
            showSignUpFields();

            let forgotPasswordLink = document.getElementById("forgotPasswordLink");
            forgotPasswordLink.addEventListener("click", function (event) {
                event.preventDefault();
                
                alert("Forgot Password clicked!");
            });
        });
    </script>
</body>
</html>