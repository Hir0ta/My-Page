  <div class="panel-body">
    <h1>Wanna play a game?</h1>
    <p>I tell you what's gonna be: I think about a number between 1 and 100! You will try to guess it! You will have 10 try! <br> I will even tell you if your guess is low or high! If you can't guess it correctly on the 10th try...well you can restart the game! ;) </p>
    <h2>Let's the game begin!<h2>
    <div class="guessContainer">
      <p class = "guesses"></p>
      <p class = "lastResult"></p>
      <p class = "lowOrHi"></p>
      <div class="field">
        <label for="guessField">Enter a guess: </label><input type="text" id="guessField" class="guessField">
        <input type="submit" value="Submit" class="guessSubmit">
      </div>
    </div>
    <script>
      var randomNumber = Math.floor(Math.random()*100) +1;
      //debug
      //console.log(randomNumber);
      var guesses = document.querySelector(".guesses");
      var lastResult = document.querySelector(".lastResult");
      var lowOrHi = document.querySelector(".lowOrHi");
      var guessSubmit = document.querySelector(".guessSubmit");
      var guessField = document.querySelector(".guessField");
      var guessCount = 1;
      var resetButton;
      //Check the users guess:
      function checkGuess() {
        var userGuess = Number(guessField.value);
        if (guessCount === 1){
          guesses.textContent = "Previous guesses:";
        }
        guesses.textContent += userGuess + ",";
      
        if (userGuess == randomNumber){
          lastResult.textContent = "Congratulations! You got it right!";
          lastResult.style.color ="white";
          lastResult.style.backgroundColor = "green";
          lowOrHi.textContent = "";
          setGameOver();
        }else if (guessCount == 10){
          lastResult.textContent = "!!!GAME OVER!!!";
          setGameOver();
        }else{
          lastResult.textContent = "Wrong";
          lastResult.style.color ="black";
          lastResult.style.backgroundColor = "red";
          if (userGuess < randomNumber){
            lowOrHi.textContent = "Last guess was too low";
          }else if (userGuess > randomNumber){
            lowOrHi.textContent = "Last guess was too high";
          }
        }
        guessCount ++;
        guessField.value = "";
        guessField.focus();
      }
      
      guessSubmit.addEventListener("click", checkGuess);
      //function when the game is over:
      function setGameOver(){
        guessField.disabled = true;
        guessSubmit.disabled = true;
        resetButton = document.createElement("button");
        resetButton.textContent = "Start new game";
        document.body.appendChild(resetButton);
        resetButton.addEventListener("click",resetGame);
      }
      //reset the game:
      function resetGame(){
        guessCount = 1;
        var resetParas = document.querySelectorAll(".resultParas p");
        for (var i = 0;i < resetParas.length; i++){
          resetParas[i].textContent = "";
        }
        resetButton.parentNode.removeChild(resetButton);
        guessField.disabled = false;
        guessSubmit.disabled = false;
        guessField.value = "";
        guessField.focus();
        lastResult.style.backgroundColor = "";
        lastResult.textContent = "";
        guesses.textContent = "";
        randomNumber = Math.floor(Math.random()*100) +1;
        //debug
        //console.log(randomNumber);
      }
    </script>
  </div>