app.controller("agendaCtrl", function ($scope) {

    $scope.contactos = [];
    $scope.query = "";
    $scope.nuevo = { name: '', email: '', phone: '' };

    var ref = new Firebase('https://iw7-e3b.firebaseio.com/contactos');



    ref.on('child_added', function(snapshot) {
        var contacto = snapshot.val();
        var clave = snapshot.key();
        $scope.contactos.push( { id: clave, name: contacto.name, email: contacto.email, phone: contacto.phone } );
    });

  $scope.nuevoContacto = function () {
 
    if ($scope.nuevo.name !== '' && $scope.nuevo.email !== '' && $scope.nuevo.phone !== '') {

      ref.push({
        name: $scope.nuevo.name,
        email: $scope.nuevo.email,
        phone: $scope.nuevo.phone
        }, function () { 
        $scope.nuevo = { name: '', email: '', phone: '' };
        }
      );
    }

  };

  $scope.borrarContacto = function (index, key) {

    var contactoRef = new Firebase('https://iw7-e3b.firebaseio.com/contactos/'+key);
    contactoRef.remove(function () { 
        $timeout(function () {
           $scope.contactos.splice(index, 1);
        }, 500); 
    });
  };
  $scope.getTuits = function () {
    //Hemos intentado implementar esta funcion pero hemos tenido problemas con la libreria twit
      var tuits = getTuitsBot($scope.usr);
      console.log(tuits);
  };

});