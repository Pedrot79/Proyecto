const mysql = require("mysql");
var slqConnection = mysql.createConnection({
    host:"127.0.0.1",
    user:"root",
    password:"7901022001",
    database:"sistemas"
});

slqConnection.connect(function(err){
    if(err){
        console.log(err.message);
    } else{
        console.log("Se conectó correctamente");
    }
});

module.exports = slqConnection;
