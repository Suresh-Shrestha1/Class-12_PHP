# 🐘 PHP Programs Collection

This repository contains a set of beginner-friendly PHP scripts that demonstrate fundamental programming concepts such as loops, conditionals, arrays, and user input. These are standalone CLI-based scripts — great for learning and practicing PHP basics.

## 📁 Folder Structure

```
php
├── array display.php
├── day.php
├── do while loop.php
├── factorial.php
├── for loop.php
├── largest.php
├── largest10(1).php
├── largest10(2).php
├── middle.php
├── odd or even.php
├── positive or negative.php
├── prime.php
├── sorting number.php
├── sum.php
└── while loop.php
```

## 📄 File Descriptions

|File Name | 🔍 Description |
| -------- | ------------|
|🧾 array display.php | Displays all elements of a predefined array. |
📆 day.php |	Takes a number (1–7) and prints the corresponding day of the week.
🔁 do while loop.php |	Prints numbers from 1 to 10 using a do-while loop.
✖️ factorial.php |	Calculates the factorial of a user-input number. ⚠️ Currently hardcoded to 10.
🔢 for loop.php	| Prints numbers from 0 to 10 using a for loop.
📈 largest.php |	Finds the largest among three user-input numbers.
📈 largest10(1).php	| Finds the largest number in a predefined array of 10 numbers.
📈 largest10(2).php	| Intended to find the largest from user input. ⚠️ Contains syntax error in explode().
📍 middle.php |	Finds the middle value among three user-input numbers.
🔢 odd or even.php |	Checks if a user-input number is odd or even.
➕ positive or negative.php |	Checks if a number is positive or negative.
🔍 prime.php |	Checks if a user-input number is a prime number.
🔀 sorting number.php |	Sorts and displays a predefined array of numbers.
➕ sum.php |	Calculates the sum of two user-input numbers.
🔄 while loop.php	| Prints numbers from 1 to 10 using a while loop.


## How to Run
1. ✅ Ensure PHP is installed
```
Run php -v to verify installation.
```
2. 📂 Navigate to the folder
```
cd php-programs
```
3. 🏃 Run any script using:
```
'php "filename.php"'
```
Replace "filename.php" with the name of the script you want to run.

## 💡 Notes & Tips
- 🧑‍💻 Some programs require user input via CLI (standard input).
- ⚠️ Some scripts may include minor syntax or logic issues, such as:
    * factorial.php — input ignored, always calculates factorial of 10.
    * largest10(2).php — incorrect explode() usage causing errors.
- 📤 All outputs are printed directly to the terminal.
- 🛠️ These scripts are meant for learning purposes — feel free to improve and extend them.
  
## 🧪 Testing & Debugging Tips
- For scripts needing user input, you can pass data via STDIN or modify the code to use predefined variables during testing.
- Use 'var_dump()' or 'print_r()' for internal debugging.
- Use 'php -l filename.php' to quickly lint the script for syntax errors.
