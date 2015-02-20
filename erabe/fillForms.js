
$('#searchtwo').keyup(function(){
  var searched = $('#searchtwo').val().replace(/\W+/g, "");
  $.ajax({
    url: './retrieveAnime.php',
    type: 'GET',
    dataType: 'json',
    data:{

    },
    success: function(json){
      alert('weDidit');
    },
    error: function(){
      alert('weDidnt');
    }
  });
});

//Populate option menu based on the string in the search bar, update option menu as keys are released.
$('#search').keyup(function(){
  var searchField = $('#search').val().replace(/\W+/g, "");
//  var searchExp = new RegExp(searchField, "i");
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
            //alert(JSON.stringify(json.genres[0]));
            $('#showInfo').append(json.genres[genre].name + '<br />');
          }
        }
        else{
        $('#showInfo').append(data + ' : ' + json[data] + '<br />');
        }
      }
//      alert('hey');
//      alert($('#test').val());
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
/*
for (var name in json){
  if(name == 'genres'){
    $('#test').append('Genre: <br />');
    for(genre in json[name]){
      $('#test').append(json[name][genre].name + '<br />');
    }
  }
}
*/
