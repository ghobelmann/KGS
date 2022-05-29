   var config = {                            
  apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
  authDomain: "leaderboard-58001.firebaseapp.com",
  databaseURL: "https://leaderboard-58001.firebaseio.com",
  projectId: "leaderboard-58001",
  storageBucket: "leaderboard-58001.appspot.com",
  messagingSenderId: "397076014204",
  appId: "1:397076014204:web:2cc69833c6ded4f60515f9",
  measurementId: "G-BE24RVGM5Y"
};
firebase.initializeApp(config);
var firestore = firebase.firestore();

const docRef = firestore.doc("tournaments/ID");
const outputHeader = document.querySelector("#hotDogOutput");
const inputTextField = document.querySelector("#latestHotDogStatus");
const inputDateField = document.querySelector("#latestDate");
const saveButton = document.querySelector("#saveButton");



saveButton.addEventListener("click", function() {
    const textToSave = inputTextField.value;
    const dateToSave = inputDateField.value;
    console.log("I am going to save " + textToSave + " to " + dateToSave + " FireStore");
    docRef.set({
    name: textToSave,
    date: dateToSave
    }).then(function() {
        console.log("Touney Entered!");
    }).catch;(function (error) {
        console.log("Got an Error: ", error);
    });
});   