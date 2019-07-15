var Usuario = require('./modelUsuarios.js') //Asignarle a la variable USUARIO el modelo del usuario

module.exports.crearUsuarioDemo = function(callback){ //Función para crear usuarios
  var arr = [{ email: 'germans@mail.com', user: "germans", password: "123456"}, { email: 'salvadors@mail.com', user: "salvadors", password: "123456"}]; //array con la información de los usuarios a insertar
  Usuario.insertMany(arr, function(error, docs) { //Utilizar la función insertMany para insertar varios registros en una sola consulta
    if (error){ //Acciones si existe un error
      if (error.code == 11000){ //Verificar si el nombre de usuario (PrimaryKey) del existe
        callback("Utilice los siguientes datos: </br>usuario: germans | password:123456 </br>usuario: salvadors | password:123456") //Mostrar mensaje
      }else{
        callback(error.message) //Mostrar mensaje de error
      }
    }else{
      callback(null, "El usuario 'germans' y 'salvadors' se ha registrado correctamente. </br>usuario: germans | password:123456 </br >usuario: salvadors | password:123456") //Mostrar mensaje del usuario guardado con exito
    }
  });
}
