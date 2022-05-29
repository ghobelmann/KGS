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
 
 
 
   const docRef = firestore.doc("scores/score");
const inputPlayerField = document.querySelector("#playerName");
const inputScoreField = document.querySelector("#score");
const saveButton = document.querySelector("#saveButton");



saveButton.addEventListener("click", function() {
    const playerToSave = inputPlayerField.value;
    const scoreToSave = inputScoreField.value;
    console.log("I am going to save " + textToSave + 
    " to " + dateToSave + " FireStore");
    docRef.set({
    name: playerToSave,
    score: scoreToSave
    }).then(function() {
        console.log("Score Entered!");
    }).catch;(function (error) {
        console.log("Got an Error: ", error);
    });
});