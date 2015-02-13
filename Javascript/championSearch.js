var SUMMONER_NAME = "";
SUMMONER_NAME = "NeverLostMyMojo";
var API_KEY = "";
API_KEY = "fa968abf-cbdd-4744-8c1c-615300da059f";

function appendInfo(div){
  console.log('we made it boys');
}
/*
function updateLikes(element){
  $(element).hover(console.log('R I P A R O N I'));
}
*/
//Function for searching riot static data for Champion information
$('#search').keyup(function () {
    var searchField = $('#search').val();
    var searchExp = new RegExp(searchField, "i");
    var output = '';
    //Find Champions who have the search string in their name, title, blurb, and identification name
    $.ajax({
        url: 'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/champion.json',
        type: 'GET',
        dataType: 'json',
        data: {

        },
        success: function (json) {
            for (var name in json.data) {
                if ((name.search(searchExp) != -1) ||
                (json.data[name].name.search(searchExp) != -1) || (json.data[name].blurb.search(searchExp) != -1) || (json.data[name].title.search(searchExp) != -1) || (JSON.stringify(json.data[name].tags).replace(/\W+/g, " ").search(searchExp) != -1) || (json.data[name].key === searchField)) {
                    console.log($.isArray(json.data[name].tag));
                    console.log($.inArray(searchField, json.data[name].tag));
                    console.log(JSON.stringify(json.data[name].tags));
                    output += '<div id =' + name + 'div> <li class=' + name + 'li>';
                    console.log(name);
                    output += name + ":</br>";
                    output += '<a href=\'/PHP/championPage.php?champ=' + name + '\'> <img id=' + name + ' src= http://ddragon.leagueoflegends.com/cdn/5.2.2/img/champion/' + name + '.png></a>';
                    for(var iter in json.data[name].stats){
                      output += '<p id =' + iter + '>' + iter + ': ' + JSON.stringify(json.data[name].stats[iter]) + '</p>';
                    }
                    output += '</li></div>';
                }
            }
            output += '</ul>';
            $('#test').html(output);
        },
        error: function () {
            alert('that shit cray');
        }
    });
});





/*

function summonerLookUp() {

    $.ajax({
        url:'http://ddragon.leagueoflegends.com/cdn/4.20.1/data/en_US/champion.json',
        type: 'GET',
        dataType: 'json',
        data: {

        },
        success: function(json){
            for(var name in json['data']){
                output += '<li>';
                output += json['data'][name]['name'];
                output += '</li>';
            }
            output += '</ul>';
        },
        error: function(){
            alert('that shit cray');
        }
    });

    if (SUMMONER_NAME !== "") {

        $.ajax({
            url: 'https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/' + SUMMONER_NAME + '?api_key=' + API_KEY,
            type: 'GET',
            dataType: 'json',
            data: {

            },
            success: function (json) {
                var SUMMONER_NAME_NOSPACES = SUMMONER_NAME.replace(" ", "");

                SUMMONER_NAME_NOSPACES = SUMMONER_NAME_NOSPACES.toLowerCase().trim();

                summonerLevel = json[SUMMONER_NAME_NOSPACES].summonerLevel;
                summonerID = json[SUMMONER_NAME_NOSPACES].id;
                sum = json[SUMMONER_NAME_NOSPACES].revisionDate;

                document.getElementById("sLevel").innerHTML = summonerLevel;
                document.getElementById("sID").innerHTML = summonerID + " " + sum;

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("error getting Summoner data!");
            }
        });
    } else {}

    $.ajax({
        url: 'https://na.api.pvp.net/api/lol/na/v1.3/stats/by-summoner/' + summonerID + '/ranked?season=SEASON2014&api_key=' + API_KEY,
        type: 'GET',
        dateType: 'json',
        data: {

        },
        success: function (json) {
            alert(json["champions"][0].stats.totalDeathsPerSession);
            document.getElementById("sLevel").innerHTML = json["champions"][0].stats.totalDeathsPerSession;
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("erro1r");
        }
    });

}
*/
