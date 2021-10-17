// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyBwEJ4FBPMGkQ8e7QfVSFHM8tyFq1hNY-U",
  authDomain: "autentica-usuario-banco.firebaseapp.com",
  projectId: "autentica-usuario-banco",
  storageBucket: "autentica-usuario-banco.appspot.com",
  messagingSenderId: "1068810176305",
  appId: "1:1068810176305:web:72abbba798283b95501210",
  measurementId: "G-00ZJ71KY6X"
};

// Initialize Firebase
globalThis.fbapp = initializeApp(firebaseConfig);
globalThis.fbAuth = getAuth();
globalThis.createUserWithEmailAndPassword = createUserWithEmailAndPassword;
const analytics = getAnalytics(fbapp);