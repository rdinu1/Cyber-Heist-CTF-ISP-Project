<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cyber Heist CTF</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #6495ed;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Quiz</h3>

<div class="container">
  <form action="action.php" method="post">
    <label for="fname">Find the arrival time of the 42nd packet? Time rounded to the nearest second.</label>
    <input type="text" id="quiz1" name="quiz1" placeholder="Answer...">

    <label for="lname">How many UDP packets are present in the pcap?</label>
    <input type="text" id="quiz2" name="quiz2" placeholder="Answer...">

    <label for="fname">How many bytes did the IP 192.168.142.42 send to 192.168.142.47?</label>
    <input type="text" id="quiz3" name="quiz3" placeholder="Answer...">
      
    <label for="fname">What is the MAC address that has the IP 192.168.142.44?</label>
    <input type="text" id="quiz4" name="quiz4" placeholder="Answer...">
      
    <label for="fname">Give the hexadecimal representation (without separator) of the destination IP of packet # 321?</label>
    <input type="text" id="quiz5" name="quiz5" placeholder="Answer...">
      
    <label for="fname">A machine loaded a flag from a web page?</label>
    <input type="text" id="quiz6" name="quiz6" placeholder="Answer...">

    <label for="fname">How many different routes did the response to the packet sent to # 2582 pass?</label>
    <input type="text" id="quiz7" name="quiz7" placeholder="Answer...">
      
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</body>
</html>
