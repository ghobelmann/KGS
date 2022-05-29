
const firebase = require("firebase");
// Required for side-effects
require("firebase/firestore");

// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
  authDomain: "leaderboard-58001.firebaseapp.com",
  databaseURL: "https://leaderboard-58001.firebaseio.com",
  projectId: "leaderboard-58001"
  });
  
var db = firebase.firestore();

var menu =[

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Taylor Lapaille","team":"SC","total":-39,"score":33,"holes_played":18},

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Nathan Huffman","team":"SC","total":-26,"score":46,"holes_played":18},

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Jackson Pinckney","team":"SC","total":+3,"score":75,"holes_played":18},

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Aaron Moss","team":"SC","total":18,"score":90,"holes_played":18},

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Jaci Charbonneau","team":"SC","total":33,"score":105,"holes_played":18},

{"tname":"Test KS Tournament Feb 29th","tid":"674","name":"Shelton Rothchild","team":"SC","total":36,"score":108,"holes_played":18}
]

menu.forEach(function(obj) {
    db.collection("tournaments").add({
        tname: obj.tname,
        tid: obj.tid,
        name: obj.name,
        team: obj.team,
        total: obj.total,
        score: obj.score,
        holes_played: obj.holes_played
    }).then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });
});// JavaScript Document
