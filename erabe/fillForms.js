
$('#searchtwo').keyup(function(){
  var searched = $('#searchtwo').val().replace(/\W+/g, "");
  var output = '';
  $.ajax({
    url: './retrieveAnime.php?q=' + searched,
    type: 'GET',
    dataType: 'json',
    data:{

    },
    success: function(json){
      for(var x in json){
        for(var y in json[x]){
          output += json[x][y] + '<br />';
        }
      }
      $('#showInfo').html(output);
    },
    error: function(){
    }
  });
});

//Populate option menu based on the string in the search bar, update option menu as keys are released.
$('#search').keyup(function(){
  var searchField = $('#search').val().replace(/\W+/g, "");
  var output = '';
  console.log(searchField);
  $.ajax({
    url: './apiHandler.php?q=' + searchField,
    type: 'GET',
    dataType: 'json',
    data:{

    },
    success: function (json){
      var idArray = [];
      for (var object in json){
        idArray.push(json[object].title);
      }
      $('#test').empty();
      //idArray.sort();
      for (var x in idArray){
        $('#test').append('<option value=' + json[x].id + '>' + idArray[x] + json[x].id + x +'</option>');
        console.log(idArray[x]);
      }
      $('#test').sort();
    },
    error: function(){
      $('#test').append('shit');
    }

  });
});
//Send info form option menu '#test' too apiHandler to get information about the show the user is looking to evaluate
$('#sender').click(function(){
  var excludeArray = ['alternate_title','started_airing','finished_airing','age_rating','episode_count','episode_length'];
  $.ajax({
    url:'./apiHandler.php?id=' + $('#test').val(),
    type: 'GET',
    dataType: 'json',
    data:{

    },
    success: function(json){
      for(var data in json){
        if(data == 'genres'){
          console.log('data =' + data);
          $('#showInfo').append('Genre: <br />');
          for(genre in json[data]){
            $('#showInfo').append(json.genres[genre].name + '<br />');
          }
        }
        else if(data == 'synopsis'){

        }
        else if($.inArray(data,excludeArray) !== -1){
          console.log('H O L L A W E D E M B O Y Z');
        }
        else{
          $('#showInfo').append(data + ' : ' + json[data] + '<br />');
        }
      }
    },
    error: function(){
//      alert($('#test').val());
    }
  });
});
$('#submitIt').click(function(){
  $.ajax({
    url: './submitAnime.php',
    type: 'POST',
    data: {test : "test"
    },
    success: function(){
      alert('itworked');
    },
    error: function(){
      alert('itdidnt');
    }
  });
});
