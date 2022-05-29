(function(){

const firebaseConfig = {
    apiKey: "AIzaSyBRVds7BcSD9SjiArzHMckkddB8525Mm0M",
    authDomain: "leaderboard-58001.firebaseapp.com",
    databaseURL: "https://leaderboard-58001.firebaseio.com",
    projectId: "leaderboard-58001",
    storageBucket: "leaderboard-58001.appspot.com",
    messagingSenderId: "397076014204",
    appId: "1:397076014204:web:2cc69833c6ded4f60515f9",
    measurementId: "G-BE24RVGM5Y"
  };

  firebase.initializeApp(firebaseConfig);

const txtEmail = document.getElementById('txtEmail');
const txtPassword = document.getElementById('txtPassword');
const btnLogin = document.getElementById('btnLogin');

btnLogin addEventListener('click', e => {
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();
    auth.signInWithEmailAndPassword(email, password);
    const promise = auth.signInWithEmailAndPassword(email, pass);
    promise.catch(e, => console.log(e.message));
})
}());



const trnyList = document.querySelector('#trny-list');
const form = document.querySelector('#add-trny-form');

// create element & render tournament
function renderTrny(doc){
    let li = document.createElement('li');
    let trnyName = document.createElement('span');
    let trnyCourse = document.createElement('span');
    let trnyDate = document.createElement('span');
    let cross = document.createElement('div');

    li.setAttribute('data-id', doc.id);
    trnyName.textContent = doc.data().trnyName;
    trnyCourse.textContent = doc.data().trnyCourse;
    trnyDate.textContent = doc.data().trnyDate;
    

    li.appendChild(trnyName);
    li.appendChild(trnyCourse);
    li.appendChild(trnyDate);
    li.appendChild(cross);

    trnyList.appendChild(li);

    // deleting data
    cross.addEventListener('click', (e) => {
        e.stopPropagation();
        let id = e.target.parentElement.getAttribute('data-id');
        db.collection('tournaments').doc(id).delete();
    });
}

// getting data
// db.collection('tournaments').orderBy('date').get().then(snapshot => {
 //   snapshot.docs.forEach(doc => {
 //       renderTrny(doc);
 //    });
// });

// saving data
form.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('tournaments').add({
        trnyName: form.trnyName.value,
        trnyCourse: form.trnyCourse.value,
        trnyDate: form.trnyDate.value
    });
    form.trnyName.value = '';
    form.trnyCourse.value = '';
    form.trnyDate.value = '';
});

// real-time listener
db.collection('tournaments').orderBy('date').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        console.log(change.doc.data());
        if(change.type == 'added'){
            renderTrny(change.doc);
        } else if (change.type == 'removed'){
            let li = trnyList.querySelector('[data-id=' + change.doc.id + ']');
            trnyList.removeChild(li);
        }
    });
});

