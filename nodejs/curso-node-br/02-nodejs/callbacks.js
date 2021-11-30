
function getUser(callback) {
  setTimeout(() => {
    return callback(null, {
      id: 1,
      name: 'Aladin',
      date: new Date()
    })
  }, 400)
}

function getPhone(idUser, callback){
  setTimeout(() => {
    return callback(null, {
      phone: '+351 211 451 415'
    })
  }, 1000);
}

function getAddress(idUser, callback) {
  setTimeout(() => {
    return callback(null, {
      street: 'Street 123, Porto',
      number: '5 AB'
    })
  }, 500);
}


// execution
getUser(function(error, user){
  if (error){
    console.error("Error: ", error);
    return;
  }
  
  getPhone(user.id, function(error1, phone){
    if (error1){
      console.error("Error: ", error1);
      return;
    }
    
    getAddress(user.id, function(error2, address){
      if (error2){
        console.error("Error: ", error2);
        return;
      }
      console.log(`
        Name: ${user.name}, 
        Phone: ${phone.phone}, 
        Address: ${address.street}`
      );
    })
  })
});