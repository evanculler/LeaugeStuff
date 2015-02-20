
//misnamed, file needs to be renamed in the future

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
  //List all Champions (Why the hell would the name Wukong MonkeyKing)
  if(champSelect == 'Champs'){
    $.ajax({
        url: 'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/champion.json',
        type: 'GET',
        dataType: 'json',
        data: {

        },
        success: function (json) {
            for (var name in json.data) {
              $('#item').append('<option>'+ json.data[name].name +'</option>');
            }
        },
        error: function () {
            alert('that shit cray');
        }
    });
  }
  if(champSelect == 'Items'){
    $.ajax({
        url: 'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/item.json',
        type: 'GET',
        dataType: 'json',
        data: {

        },
        success: function (json) {
            for (var name in json.data) {
              $('#item').append('<option value=id' + name + '>' + json.data[name].name +'</option>');
            }
        },
        error: function () {
            alert('that shit cray');
        }
    });
  }
  if(champSelect == 'Runes'){
    $.ajax({
        url: 'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/rune.json',
        type: 'GET',
        dataType: 'json',
        data: {

        },
        success: function (json) {
            for (var name in json.data) {
              $('#item').append('<option value=id' + name + '>' + json.data[name].name +'</option>');
            }
        },
        error: function () {
            alert('that shit cray');
        }
    });
  }

}
