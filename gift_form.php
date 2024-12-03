<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>document</title>
  </head>
  <body>
    <h2>Final</h2>

    <form action="process.php" method="POST">
      <span>Available Gifts:</span>
      <ul>
        <li>0 - Book</li>
        <li>1 - Toy</li>
        <li>2 - Gadget</li>
        <li>3 - Video Game</li>
        <li>4 - Headphones</li>
        <li>5 - Smartphone</li>
        <li>6 - Laptop</li>
        <li>7 - Watch</li>
        <li>8 - Shoes</li>
        <li>9 - Wallet</li>
        <li>10 - Headset</li>
        <li>11 - Camera</li>
        <li>12 - Drone</li>
        <li>13 - Smart Watch</li>
        <li>14 - Bluetooth Speaker</li>
      </ul>

      <label for="gifts"
        >Enter gift number separated by commas (e.g., 0,1,2):</label
      >
      <input
        style="margin-bottom: 10px"
        type="text"
        id="gifts"
        name="gifts"
        required
      />
      <br />

      <button type="submit">Submit</button>
    </form>
  </body>
</html>