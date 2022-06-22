######## SHWIRL CAPTCHAS README #########


Here is how the working repository should look like

└───Captcha Generator
    ├───OUTPUT
    └───shwirl_captchas
        └───vendor
            ├───composer
            └───omranjamal
                └───real-captcha
                    ├───examples
                    │   └───output
                    └───resources
                        ├───fonts
                        └───fonts2

important directories:
OUPUT: is where the file.jpg default image is stored and overwritten after each re-run of te program
fonts and fonts2: folders where you can store sets of fonts for the program to choose from when generating captchas



--- How to operate the shwirl captchas generator: ---

- Open Visual Studio Code

- if the project isn't opened by default -> File -> open Folder -> open it from its root (aka "Captcha Generator")

- Open the "shwirl_captchas.php" file and the "file.jpg" side by side (you can drag nd drop files to your working window)

- make the "shwirl_captchas.php" window active and press "ctrl + alt + n" to bring up the terminal and run the code for the first time

- to easily re-run the code, in the terminal just press the up arrow key to brin the last executed command (which should look like: php "d:\bitbird\Shwirl\Bed Dweller\Captcha Generator\shwirl_captchas\shwirl_captchas.php") and press ENTER to re-run it. (to clear you terminal just execute the command "clear")

- once you changed some parameters in the "shwirl_captchas.php" for customisation purposes don't forget to save it (ctrl + s) before re-running the command

- to save the image that you like I suggest you to rename the current "file.jpg" to something else so it doesnt get overwritten by the next re-run


--- How to customize the captchas: ---

- Height and Width: pretty straight forward, just change the values (in pixel) at line 24 & 25.

- Color Choices: you can either enter your color manually or let it be random. The colors are random by default but you can overwrite them with chosen fixed colors:
to do so: uncomment (remove the "//" before the line) the lines 34 and/or 35 and input the rgb values of your desired colors in the "array(r,g,b)". replace the "r", "g" and "b" with a number between 0 and 255. to convert hex colors to rgb values you'll have to do the maths... (no, google has an useful hex to rgb converter thanks god)
you can of course choose to have a fixed background color and let the text colo be random by just uncommenting the background_color line (line 34 here) or the inverse!

- you can add your own fonts to spice up the look of the captchas. to do so just add the .ttf files of your choice in the "fonts" or "fonts2" folder or even create other fonts folders to have fully customed fonts sets.

- to choose your fonts sets (aka fonts folders) you just need to change the name of the last folder in the path at line 39. example: change "shwirl_cpatchas/.../resources/fonts" to "shwirl_cpatchas/.../resources/fonts2"

- to modify your text input, go to line 45 and it all happens inside the parantheses of the "array()".
just add as many words as you want as long as they are separated by a ",".
if a word doesn't appear on the image or is only one or two letters long try adding "\n" in front of it. example: return array("stroopwaffles","\n+", "milk", "\n=", "love");

- to modify the jpg compression quality just head over to line 48 and change the number in the last argument of the "file" function by anything between 1 and 100. (1 being the worst image compression you have ever seen)