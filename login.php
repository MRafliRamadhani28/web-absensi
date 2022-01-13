<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="preloader">
        <div class="circle-container">
            <svg class="circle-ring" width="588" height="589" viewBox="0 0 588 589" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="circle-ring">
                    <path id="Vector" d="M293.979 588.069C226.068 588.069 160.258 564.522 107.761 521.44C55.2655 478.358 19.3316 418.407 6.0827 351.8C-7.16624 285.194 3.08946 216.055 35.1024 156.163C67.1152 96.2706 118.905 49.3313 181.646 23.3428C244.388 -2.64573 314.199 -6.07546 379.186 13.638C444.173 33.3514 500.314 74.9883 538.043 131.454C575.773 187.92 592.756 255.721 586.099 323.305C579.443 390.889 549.559 454.074 501.538 502.095C474.345 529.437 441.998 551.115 406.37 565.872C370.743 580.63 332.542 588.174 293.979 588.069V588.069ZM293.979 3.24069C133.359 3.24069 2.68504 133.914 2.68504 294.534C2.68504 455.154 133.359 585.828 293.979 585.828C454.598 585.828 585.272 455.154 585.272 294.534C585.272 133.914 454.598 3.24069 293.979 3.24069V3.24069Z" fill="#2F2E41"/>
                    <path id="circle" d="M474.357 120.879C505.294 120.879 530.375 95.7987 530.375 64.8608C530.375 33.9229 505.294 8.84277 474.357 8.84277C443.419 8.84277 418.339 33.9229 418.339 64.8608C418.339 95.7987 443.419 120.879 474.357 120.879Z" fill="#38373F"/>
                </g>
            </svg>

        </div>

        <div class="cube-container">
            <svg class="cube" width="306" height="348" viewBox="0 0 306 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="cube">
                    <path id="Vector" d="M305.908 266.443L305.875 266.46L161.201 347.019L2.77896 267.808L0.0489502 266.443L8.27095 102.003L151.334 0.0499878L152.913 1.03699L300.975 93.781L305.908 266.443Z" fill="#7222ED"/>
                    <path id="Vector_2" opacity="0.3" d="M305.875 266.46L161.201 347.019L2.77905 267.808L143.112 169.424L305.875 266.46Z" fill="black"/>
                    <path id="Vector_3" opacity="0.1" d="M305.908 266.443L143.112 169.424L152.913 1.03699L300.975 93.781L305.908 266.443Z" fill="black"/>
                    <path id="Vector_4" d="M6.16496 152.745L5.36096 151.607L150.021 49.5L302.834 145.309L302.094 146.49L150.066 51.173L6.16496 152.745Z" fill="#F2F2F2"/>
                    <path id="Vector_5" d="M3.36098 208.61L2.57898 207.458L146.505 109.743L146.882 109.957L302.963 198.417L302.275 199.629L146.571 111.382L3.36098 208.61Z" fill="#F2F2F2"/>
                    <path id="Vector_6" d="M58.276 295.965L57.542 294.781L202.595 204.9V32.594H203.988V205.676L58.276 295.965Z" fill="#F2F2F2"/>
                    <path id="Vector_7" d="M115.209 324.428L114.469 323.248L254.138 235.645V64.879H255.531V236.416L115.209 324.428Z" fill="#F2F2F2"/>
                    <path id="Vector_8" d="M253.612 295.982L91.176 205.73L91.199 205.296L99.75 36.281L101.141 36.352L92.612 204.933L254.289 294.764L253.612 295.982Z" fill="#F2F2F2"/>
                    <path id="Vector_9" d="M202.507 324.455L41.895 240.288L41.92 239.841L51.388 70.742L52.779 70.82L43.337 239.471L203.154 323.221L202.507 324.455Z" fill="#F2F2F2"/>
                </g>
            </svg>
        </div>
    
    </div>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" class="btn solid">
                </form>

                <form action="" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Sign up" class="btn solid">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun?</h3>
                    <p>Ayo daftarkan segera dirimu, agar bisa absen mata kuliah hari ini, ya!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="assets/image/male.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun?</h3>
                    <p>Langsung log in aja, buruan keburu kehabisan waktu absen!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="assets/image/female.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>