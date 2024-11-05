import sys


price = 0.0

pizzasize = sys.argv[1]
toppings = int(sys.argv[2])

if pizzasize == "L":
    price += 6.0
elif pizzasize == "XL":
    price += 10.0
if toppings == 1:
    price += 1.0
elif toppings == 2:
    price += 1.75
elif toppings == 3:
    price += 2.50
elif toppings == 4:
    price += 3.35

# Output the final price
print(price)
