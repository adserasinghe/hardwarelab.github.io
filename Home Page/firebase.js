// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCBA1dHCX7wUgx0MSCsMZESWyf9z4BmIHU",
  authDomain: "hardware-lab-management-system.firebaseapp.com",
  projectId: "hardware-lab-management-system",
  storageBucket: "hardware-lab-management-system.appspot.com",
  messagingSenderId: "298641726639",
  appId: "1:298641726639:web:31d613ba6ef71176f5885a",
  measurementId: "G-G4HJBEW1KZ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);