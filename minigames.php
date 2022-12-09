<!DOCTYPE html>

<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/minigames/css/NavBar.css">
        <link rel="stylesheet" type="text/css" href="/minigames/css/dashboard.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Round">
        <title>Minigames</title>
</head>
    
    <body>
        
      <div class="dashboard">
          
          
          <section class="navi">
              
             <div class="logo">
                  
                <a href="index.html"><img src = "/minigames/_images/ConnectMe_DarkModeV3.png" alt=""></a>
              
              </div>
        
         
              <div class="links">
                  
              <!--<a href="dashboard.html" class="link">Home</a><br>
              <a href="inbox.html" class="link">Inbox</a><br>
              <a href="meetings.html" class="link">Meetings</a><br>
              <a href="icebreaker.html" class="link">IceBreaker</a><br>
                  
                  -->
                  
                  <a href="/dashboard.html" class="buttons">
                    <span class="material-icons-round">space_dashboard</span>
                      <h3>Dashboard</h3>
                  </a>
                  <a href="404.html" class="buttons">
                    <span class="material-icons-round">inbox</span>
                      <h3>Inbox</h3>
                  </a>
                  <a href="/meetings.html" class="buttons"> 
                    <span class="material-icons-round">groups</span>
                      <h3>Meetings</h3>
                  </a>
                  
                  <a href="minigames.php" class="buttons">
                    <span class="material-icons-round">videogame_asset</span>
                      <h3>MiniGames</h3>
                  </a>
                  
                  <a href="/settings.html" class="buttons">
                    <span class="material-icons-round">settings</span>
                      <h3>Settings</h3>
                  </a>
                  
                  <a href="/index.html">
                    <span class="material-icons-round" class="buttons">logout</span>
                      <h3>Log Out</h3>
                  </a>
                  
                  
              </div>
              
              
          </section>

          <!-- NavBar for Mobile Dashboard -->
          
          <div class="mob-dash">
          
              <section class="mob-navi">
              
                  <div class="logo">
                  
                      <a href="/index.html"><img src = "/minigames/_images/ConnectMe_DarkModeV3.png" alt=""></a>
                  
                  </div>
                  
                  
                  <div class="links">
                  
                  <a href="/dashboard.html" class="buttons">
                    <span class="material-icons-round">space_dashboard</span>
                      <h3>Dashboard</h3>
                  </a>
                  <a href="/404.html" class="buttons">
                    <span class="material-icons-round">inbox</span>
                      <h3>Inbox</h3>
                  </a>
                  <a href="/meetings.html" class="buttons"> 
                    <span class="material-icons-round">groups</span>
                      <h3>Meetings</h3>
                  </a>
                  
                  <a href="minigames.php" class="buttons">
                    <span class="material-icons-round">videogame_asset</span>
                      <h3>Minigames</h3>
                  </a>
                  
                  <a href="/settings.html" class="buttons">
                    <span class="material-icons-round">settings</span>
                      <h3>Settings</h3>
                  </a>
                  
                  <a href="/index.html">
                    <span class="material-icons-round" class="buttons">logout</span>
                      <h3>Log Out</h3>
                  </a>
                  
                  
              </div>
              
              </section>
          
          </div>
       <!-- BUTTON FUNCTIONALITY-->
       <?php 
        if(key_exists('MP', $_POST)) {
            MP();
        }
        function MP() {
          echo "You are playing: Meeting Prediction";
          // require("MeetingPrediction.php"); 
        
        }

        if(key_exists('WYR', $_POST)) {
          WYR();
        }
        function WYR() {
          // echo "You are playing: Would You Rather?";
          //require("WouldYouRather.php")
      }

      //   if(key_exists('TIC', $_POST)) {
      //     TIC();
      //   }
      //   function TIC() {
      //     // echo "You are playing: Tic Tac Toe";
      //     //require ("ttt.php");
        
      // }

      ?>

        <!-- THESE ARE THE BUTTONS  -->

        <form action = "mp/meeting-prediction.php" method="post">
          <input type="submit" name="MP"
            value="Meeting Prediction"/>
        </form>
    

        <form action = "wyr/would-you-rather.php" method="post">
          <input type="submit" name="WYR"
            value="Would You Rather?"/>
        </form>
      
<!-- 
        <form action = "ttt.php" method="post">
            <input type="submit" name="TIC"
              value="Tic-Tac-Toe"/>
        </form> -->
    </h3>
</html>