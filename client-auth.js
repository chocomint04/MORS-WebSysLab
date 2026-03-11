(function () {
    const firebaseConfig = {
        apiKey: "AIzaSyBEJMTq5PQNrwDELbuqGfIFGFxJ3S-ke_Q",
        authDomain: "css151l-6290e.firebaseapp.com",
        databaseURL: "https://css151l-6290e-default-rtdb.asia-southeast1.firebasedatabase.app/",
        projectId: "css151l-6290e",
        storageBucket: "css151l-6290e.appspot.com",
        messagingSenderId: "907702008183",
        appId: "1:907702008183:web:9dbb807a3db2e2958bc972"
    };

    if (!firebase.apps.length) {
        firebase.initializeApp(firebaseConfig);
    }
})();
