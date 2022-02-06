<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  --m: 17.5;
  --wavefreq: calc(100ms * var(--m));
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  align-items: center;
  background-color: rgba(35, 35, 35);
  color: white;
  display: flex;
  flex-flow: column;
  font-family: "Lato", sans-serif;
  font-size: 1.365em;
  font-weight: 300;
  height: 100vh;
  justify-content: center;
  letter-spacing: 0.135em;
  width: 100vw;
}

h1 {
  font-weight: 300;
}

section {
  display: flex;
  gap: 15px;
  margin-top: 5vw;
}

input {
  margin-top: 5vw;
}

@keyframes waveform {
  0% {
    transform: scaleY(0.5);
  }
  50% {
    transform: scaleY(1.5);
  }
  100% {
    transform: scaleY(0.5);
  }
}

[class*="wave"] {
  aspect-ratio: 0.125/1;
  animation: waveform var(--wavefreq) ease-in-out infinite forwards;
  background-color: white;
  border-radius: 15px;
  width: 0.5vw;
}

.wave1 {
  --wavefreq: calc(200ms * var(--m));
}

.wave2 {
  --wavefreq: calc(300ms * var(--m));
}

.wave3 {
  --wavefreq: calc(400ms * var(--m));
}

.wave4 {
  --wavefreq: calc(500ms * var(--m));
}

.wave5 {
  --wavefreq: calc(600ms * var(--m));
}

.wave6 {
  --wavefreq: calc(700ms * var(--m));
}

.footer {
  font-size: 0.7em;
}

    </style>
</head>
<body>
<h1>
  CSS Waveforms
</h1>

<section>
  <div class="wave0">
  </div>
  <div class="wave1">
  </div>
  <div class="wave2">
  </div>
  <div class="wave3">
  </div>
  <div class="wave4">
  </div>
  <div class="wave5">
  </div>
  <div class="wave6">
  </div>
</section>

<input type="range" min="1" max="35" steps="1" name="" value="17.5" id="slider">

<br><br>

<label for="speed">frequency multiplier</label>
<br>
<output id="speed">17.5</output>

<br><br><br><br>
<div class="footer">
  Forked from<br>
  <a href="https://dev.to/rolandixor/css-funstuff-animated-waveforms-4cja" >CSS Funstuff: Animated Waveforms</a><br>
  RolandiXor (Roland L. Taylor)<br>
  DEV Community © 2016 - 2022.
</div>


</body>
<script>
    let speed = document.querySelector("#slider"),
  root = document.documentElement;

speed.addEventListener("change", () => {
  root.style.setProperty("--m", speed.value);
  document.querySelector("output").innerHTML = speed.value;
});

</script>
</html>