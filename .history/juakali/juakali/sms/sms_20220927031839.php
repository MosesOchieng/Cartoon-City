<!DOCTYPE html>
<html>
  <head>
    <title>Sms Plan B</title>
  </head>
<body>

  <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDs6BUkNb-dpG1doquQLZkGuDckb1BhDg0",
    authDomain: "juakalisms.firebaseapp.com",
    projectId: "juakalisms",
    storageBucket: "juakalisms.appspot.com",
    messagingSenderId: "210061988609",
    appId: "1:210061988609:web:31a615e75a1e249a7d8100",
    measurementId: "G-TX7PEMSCP2"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

var myName = prompt("Enter your name");

function sendMessage(){
  //getting message
  var message = document.getElementById("message").value;
//save in firebase 
firebase.database().ref("messa")
  //prevent from submitting
  return false;
}
</script>
<form>

<input id="message" placeholder="Enter message" autocomplete="off">

<input type="submit">
</form>

  </body>
</html>
