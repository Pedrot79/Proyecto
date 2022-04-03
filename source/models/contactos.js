const slqConnection = require('../models/conexion.js');
const conexion = require('../models/conexion.js');
var Contactos = {}

Contactos.insertar = function insertar(contacto){
    var sqlConsulta = "INSERT INTO contactos set ?"
    conexion.query(sqlConsulta,contacto,function(err,res){
        if(err){
            console.log(err.message);
        } else{
            console.log(res.insertId);
        }
    })
}

Contactos.mostrarTodos = function mostrarTodos(){
    var sqlConsulta = "SELECT * FROM contactos";
    conexion.query(sqlConsulta,null,function(err,res){
        if(err){
            console.log(err.message);
        } else{
            console.log(res);
        }
    })
}

Contactos.buscarId = function buscarId(id){
    var sqlConsulta = "SELECT * FROM contactos WHERE id = ?";
    conexion.query(sqlConsulta,[id], function(err,res){
        if(err){
            console.log(err.message);
        } else{
            console.log(res);
        }
    });
}

Contactos.borrar = function borrar(id){
    var sqlConsulta = "DELETE FROM contactos WHERE id =?";
    conexion.query(sqlConsulta,[id], function(err,res){
        if(err){
            console.log(err.message);
        } else{
            console.log(res.affectedRows);
        }
    });
}

Contactos.actualizar = function actualizar(contacto){
    var sqlConsulta = "UPDATE contactos SET nombre =?, domicilio =?, telefono =? WHERE id =?";
    let data =[contacto.nombre,contacto.domicilio,contacto.telefono,contacto.id];
    conexion.query(sqlConsulta,data,function(err,res){
        if(err){
            console.log(err.message);
        } else{
            console.log(res);
        }
    });
}

module.exports = {Contactos}