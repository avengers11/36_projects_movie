<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,200;8..144,300;8..144,400&display=swap');

@keyframes show {
  from {opacity: 0;} to {opacity: 1;}
}

* {
  font-family: "Roboto Flex", sans-serif;
  color: #687B87;
}

html {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

body {
  background: linear-gradient(0.25turn, #000000, #44b973);
}

.btn {
  color: white;
  height: 32px;
  width: 100px;
  margin: 0;
  border-radius: 15px;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #44B973;
}

.btn:hover {
  background: #378E5A;
}

.pointer {
  cursor: pointer;
}

#phone {
  width: 320px;
  height: 614px;
  margin: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  background: #F7F7F7;
  border-radius: 25px;
}

#phone-speaker,
#phone-btn {
  background: #E4E4E4;
}

#phone-speaker {
  width: 50px;
  height: 5px;
  border-radius: 25px;
}

#phone-btn {
  width: 40px;
  height: 40px;
  border-radius: 90%;
}

#phone-screen {
  width: 90%;
  height: 85%;
  padding: 10px;
  display: flex;
  flex-direction: column;
  background: #FFFFFF;
  border-radius: 10px;
  animation: show 1s;
}

header {
  width: 100%;
  height: 6%;
  display: flex;
  flex-direction: row;
  align-items: center;
}

#menu {
  width: 10%;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

#title {
  width: 80%;
  margin: 0;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  letter-spacing: 1px;
}

#settings {
  position: relative;
  width: 10%;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

#settings svg {
  stroke: #687B87;
}

#settings span {
  position: absolute;
  right: 5px;
  top: 3px;
  width: 5px;
  height: 5px;
  background: #44B973;
  border-radius: 90%;
}

#content {
  position: relative;
  height: 94%;
  padding: 25px 20px 20px 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

#avatar {
  margin: 20px 0 0 0;
  border-radius: 90%;
}

#avatar-svg {
  position: absolute;
  top: 24px;
  transform: rotate(150deg);
}

#user-name {
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 1px;
  margin: 30px 0 0 0;
}

#user-profession {
  font-size: 18px;
  font-weight: lighter;
  margin: 3px 0 0 0;
}

input[type="text"] {
    width: 100%;
    border-radius: 7px;
    border: 1px solid #ddd;
    padding: 7px;
}

#user-general-values {
  margin: 30px 0 0 0;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 20px;
}

#user-general-values p {
  width: 30%;
  margin: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

#user-general-values p span:nth-child(1) {
  font-size: 22px;
  font-weight: bold;
  color: #378E5A;
}

#user-general-values p span:nth-child(2) {
  font-size: 15px;
  font-weight: lighter;
  margin: 3px 0 0 0;
}

.line {
  width: 1px;
  height: 60%;
  margin: 0 20px;
  background-color: #BCBCBC;
}

#group-btn {
  width: 100%;
  margin: 30px 0 0 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
}

#follow-btn {
  margin-right: 5px;
}

#message-btn {
  margin-left: 5px;
}

#socials {
  width: 100%;
  position: relative;
  margin: 20px 0 0 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
}

#socials svg path {
  fill: #687B87;
}
  </style>

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <div id="phone">
    <p id="phone-speaker"></p>
    <div id="phone-screen">
      <header>
        <a href="{{route('users_home_web')}}" id="menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/></svg>
        </a>
        <p id="title">Profile</p>
        <p id="settings">
        </p>
      </header>
      <div id="content">
        <img id="avatar" width="100" height="100" src="https://hips.hearstapps.com/hmg-prod/images/brad-pitt-attends-the-premiere-of-20th-century-foxs--square.jpg" alt="Brad Pitt">
        <svg width="142px" height="142px" viewBox="0 0 24 24" fill="none" id="avatar-svg">
          <defs>
            <linearGradient id="AvatarGradient">
              <stop offset="5%" stop-color="#AEDD9A" />
              <stop offset="95%" stop-color="#44B973" />
            </linearGradient>
          </defs>
          <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C14.8273 3 17.35 4.30367 19 6.34267" stroke="url(#AvatarGradient)" stroke-width="0.5" stroke-linecap="round"></path>
        </svg>
        <p id="user-name">{{$userData['username']}}</p>
        <p id="user-profession">@if(intval(($userData['expired']-time())/86400) < 1) Expired Today @else Validity:  {{intval(($userData['expired']-time())/86400)+1}} days @endif</p>
        <form action="{{route('users_home_change_password_api')}}" method="post">
            <div id="user-general-values">
                @if (session()->has('msg'))
                <p style="color: red;     width: 100%;">{{session()->get('msg')}}</p>
                @endif
              <input type="text" name="old_pass" placeholder="Enter your old password" required>
              <input type="text" name="new_pass" placeholder="Enter your new password" required>
            </div>
            <div id="group-btn">
              <button type='submit' style="width: 155px;" class="btn pointer">Change Password</button>
            </div>
        </form>
      </div>
    </div>
    <p id="phone-btn"></p>
  </div>
</body>
<!-- partial -->

</body>
</html>
