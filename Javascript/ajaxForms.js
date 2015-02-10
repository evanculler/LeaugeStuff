
var champs = new Array('Aatrox','Ahri');
var champs2 = new Array('Blitz','Bulwark');

populateSelect();

$(function(){
  $('#champSelect').change(function(){
    populateSelect();
  });
});

function populateSelect(){
  var champSelect = $('#champSelect').val();
  $('#items').html(champSelect);
  $('#item').html('');

  if(champSelect == 'Champs'){
    champs.forEach(function(t){
      $('#item').append('<option>'+t+'</option>');
    });
  }
  if(champSelect == 'Items'){
    champs2.forEach(function(t){
      $('#item').append('<option>'+t+'</option>')
    });
  }

}
