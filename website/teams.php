<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>MatchFinder</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        
        <nav id="nav">
            <ul>
                <li class="nav-li"><a href="index.php">HOME</a></li>
                <li class="nav-li"><a href="news.php">SEARCH</a></li>
                <li class="nav-li"><a href="teams.php">MATCHES</a></li>
                <li class="nav-li"><a href="about.php">ALL TEAMS</a></li>
                <li class="nav-li"><a href="registration/index.php">REGISTRATION</a></li>
            </ul>
        </nav>
          
    
     </header>
     <div  id="container"></div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script>
         $.ajax({
         headers: { 'X-Auth-Token': '6e93af43b1ef4689bd8fa13bc7302ae9' },
         url: 'https://api.football-data.org/v2/matches',
         dataType: 'json',
         type: 'GET',
         }).done(function(response) {
             console.log(response)
         response.matches.map(match => {
             var m = document.createElement("p");
             m.innerHTML = match.awayTeam.name + ' vs ' + match.homeTeam.name
             var d = document.createElement('div')
             d.classList.add('card')
             d.setAttribute("style","width: 18rem;")
             var d1 = document.createElement('div')
             d1.classList.add('card-body')
             d1.appendChild(m)
             d.appendChild(d1)
             var element = document.getElementById('container')
             element.appendChild(d)
         });
         });
     </script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>