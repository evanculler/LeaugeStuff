$(function(){
  $("#pics").click(function(){
    var textO = '<p>Champion selected</p>';
    textO += '<textarea id = "Champion"> Matchup Data </textarea>';
    $('#matchUp').append(textO);
  });
  var output = '';
  $.ajax({
    url: 'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/champion.json',
    type: 'GET',
    dataType: 'json',
    data: {

    },
    success: function(json){
      for(var name in json.data){
//        output += '<div id = pic' + name + 'div>';
        output += '<img id = pic' + name + 'id src=http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/' + name + '.png>';
//        output += '</div>';
      }
      $('#pics').html(output);
    },
    error: function(){
      alert('there were erros');
    }
  });
});
