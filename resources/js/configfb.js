// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth, createUserWithEmailAndPassword } from "firebase/auth";
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
globalThis.fbApp = initializeApp(firebaseConfig);
globalThis.fbAuth = getAuth();
globalThis.createUserWithEmailAndPassword = createUserWithEmailAndPassword;
const analytics = getAnalytics(fbApp);