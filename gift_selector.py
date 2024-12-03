import sys

gifts_list = [
  "Book", "Toy", "Gadget", "Video Game", "Headphones",
  "Smartphone", "Laptop", "Watch", "Shoes", "Wallet",
  "Headset", "Camera", "Drone", "Smart Watch", "Bluetooth Speaker"
]

try:
  gift_indices = [int(value) for value in sys.argv[1].split(',')]

  gift_unic_code = 0
  for index in gift_indices:
    gift_unic_code |= (1 << index)

  selected_gifts = [gifts_list[i] for i in gift_indices]

  html_output = (
    f"<p>Selected Gifts: {', '.join(selected_gifts)}</p>"
    f"<p>Unique Gift Code: {gift_unic_code}</p>"
  )

  print(html_output)
    
except ValueError:
  print("<p>All gift numbers must be integers</p>")
  sys.exit()