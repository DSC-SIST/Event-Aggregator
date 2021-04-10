# Setting up the Project

Here lies the instructions on how to setup the tools and execute this project. :scroll:

The following tools have to be setup in your PC for the development of our project.

## Tools Needed :pick:

Install the tools in this particular order.

### 1. Git

-   Refer this [link](https://github.com/KamalDGRT/SetupStuff/tree/master/Git) to know how setup `Git` in your PC.
-   We will be using Git to track the changes.

### 2. GitHub Desktop (optional but recommended)

-   Go to [desktop.github.com](https://desktop.github.com) and download the application.
-   After downloading just click on the application.
-   It will get installed automatically.
-   GitHub Desktop acts as a middle man between `Git` and `GitHub.com`.

### 3. Microsoft Visual Studio Code a.k.a. VS Code

-   Refer this [link](https://github.com/KamalDGRT/SetupStuff/tree/master/Microsoft%20Visual%20Studio%20Code) to get more info on how to set up `VS Code`.
-   We will be using `VS Code` as our Integrated Development Environment.

### 4. Xampp Application

-   Refer to this [link](https://github.com/KamalDGRT/SetupStuff/tree/master/XAMPP) to know how to setup `Xampp` in your PC.
-   `Xampp` contains `Apache` and `MySQL` servers that are need for a PHP code to execute.

### 5. Adding PHP and MySQL to the `Path` variable

-   Refer to this [link](https://github.com/KamalDGRT/SetupStuff/tree/master/Adding%20php%20and%20mysql%20to%20Path) on how to do add `php` and `mysql` to the `System Environment Variable`.
-   This will allow us to access the `php` and `mysql` command from anywhere in the File Explorer.

### 6. Composer

-   Refer to this [link](https://github.com/KamalDGRT/SetupStuff/tree/master/Composer) to know how to setup `Composer` in your PC.
-   We will be using `Composer` for managing the various packages in our Project.

### 7. VS Code Extensions

-   Install the following extensions in your `VS Code` application.

| Extension Name            | Author       |
| ------------------------- | ------------ |
| Material Icon Theme       | Philipp Kief |
| PHP Intelephense          | Ben Mewburn  |
| Prettier-Code Formatter   | Prettier     |
| GitLens--Git supercharged | Eric Amado   |
| Bracket Pair Colorizer 2  | CoenraadS    |
| indent-rainbow            | oderwat      |

-   Sign in to your `GitHub` account for setting up `GitLens` in the `VS Code`.
-   Authorize `GitlLens` to access your `GitHub` Account.
-   Set `Prettier` Tab Width to 4.
    -   Open `Settings` in `VS Code` using Keyboard Shortcut. `(Ctrl + ,)`
    -   Search for `prettier.tabWidth`.
    -   Set the Tab Width to 4.
    -   This will help us to maintain the 4 space indentation.

### 8. Fira Code Font Ligatures (Optional but highly recommended)

-   Install the `Fira Code` Font from [here](https://github.com/tonsky/FiraCode).
-   Change the Font Family in your `VS Code`.
-   Enable the font ligatures in `VS Code`.

---

**_Now, that we have installed the right tools, let us setup the actual project! :tada: :rocket:_**

### Step 1: Forking the project

-   Fork the [DSC-SIST/Event-Aggregator Repository](https://github.com/DSC-SIST/Event-Aggregator).

![Step 01](https://i.imgur.com/FQT7m82.png)

### Step 2: Cloning and Opening in VS Code

-   Step 2.1: Copy the URL of your fork of the repository by clicking on the :clipboard: icon.

![Step 2.1](https://i.imgur.com/FbJ7jv8.png)

-   Step 2.2: Clone your fork inside the `htdocs` folder of the `Xampp` installation.
    -   In my case the `htdocs` folder is present in `C:\LEO\xampp\htdocs`.

![Step 2.2](https://i.imgur.com/7QYk8fp.png)

-   Step 2.3: Rename the cloned folder in this format: `<your-name>-Event-Aggregator`.
    -   In my case, I'll be renaming the folder to: `kanika-Event-Aggregator`.

![Step 2.3](https://i.imgur.com/LE1KBBO.png)

-   Step 2.4: After renaming, open the folder using `Visual Studio Code`.

![Step 2.4](https://i.imgur.com/TPqihfx.png)

-   Step 2.5: After opening in `VS code`, it will look something like this:

![Step 2.5](https://i.imgur.com/8oZF5ui.png)

### Step 3: Creating the _Hosts_ folder

-   Create a folder in `Desktop` with the name `Hosts`.

![Step 03](https://i.imgur.com/ry9Pxmr.png)

### Step 4: Opening the Xampp Installation folder

-   Press `Windows + E` in the keyboard.
-   This is open up the `File Explorer`.
-   Now open the folder where you have installed `Xampp`.

If you had followed the instructions in the [SetupStuff](https://github.com/KamalDGRT/SetupStuff/) repository,
you would have installed over here:

```
C:\<your folder>\xampp
```

![Step 04](https://i.imgur.com/51CuOaS.png)

### Step 5: Creating shortcut for _htdocs_ folder

-   First just single click on the `htdocs` folder.
-   Right click on the `htdocs` folder which is present inside the `xampp` folder.
-   Click on the `Send to`.
-   Choose the `Desktop (create shortcut)`.

![Step 05](https://i.imgur.com/ZWhlJIv.png)

### Step 6: Creating shortcut for _extra_ folder

-   Now go to this location in the `File Explorer`:

```
C:\<your folder>\xampp\apache\conf\
```

-   In my case it will be: `C:\LEO\xampp\apache\conf\` .
-   First just single click on the `extra` folder.
-   Right click on the `extra` folder.
-   Click on the `Send to`.
-   Choose the `Desktop (create shortcut)`.

![Step 06](https://i.imgur.com/AucZqwE.png)

### Step 7: Creating shortcut for _etc_ folder

-   Now go to this location in the File Explorer:

```
C:\Windows\System32\drivers\
```

Hopefully, the above location will be the same for all the Windows users.

-   First just single click on the `etc` folder.
-   Right click on the `etc` folder.
-   Click on the `Send to`.
-   Choose the `Desktop (create shortcut)`.

![Step 07](https://i.imgur.com/lFayQYX.png)

### Step 8: Moving the new shortcuts to _Hosts_ folder

-   Go to the `Desktop`.
-   Now, move the shortcuts that you got from [Step 5](#step-5-creating-shortcut-for-htdocs-folder),
    [Step 6](#step-6-creating-shortcut-for-extra-folder) and [Step 7](#step-7-creating-shortcut-for-etc-folder) to the
    `Hosts` folder.
-   The `Hosts` folder has been mentioned in [Step 3](#step-3-creating-the-hosts-folder).

![Step 08](https://i.imgur.com/Vag2Oa1.png)

### Step 9: Starting the Xampp servers

-   Start the `Apache` and `MySQL` servers in the `Xampp Control Panel`.
-   Click on the `Admin` of `MySQL` to open up the `phpMyAdmin` page.

![Step 9.1](https://i.imgur.com/3wL1LKQ.png)

-   The `phpMyAdmin` page will look something like this:

![Step 9.2](https://i.imgur.com/4SQbZV3.png)

### Step 10: Creating the database for the project

-   Each `Yii2` project will be associated with a database.
-   We will be storing the tables there.
-   So, lets create the database for your fork of the [DSC-SIST/Event-Aggregator](https://github.com/DSC-SIST/Event-Aggregator) repository.
-   Have the database name in this format:

```
<yourname>_dscevent
```

**_For example:_**

I will be creating the `kanika_dscevent` database for my fork of the [DSC-SIST/Event-Aggregator](https://github.com/DSC-SIST/Event-Aggregator) repo.

![Step 10.1](https://i.imgur.com/9FwoEnj.png)

-   The newly created database will look something like this:

![Step 10.2](https://i.imgur.com/8NKJGzA.png)

### Step 11: Initializing the framework in _Development_ mode

-   Open a terminal in the `VS Code`.
-   Initialize the `Yii2` Advanced template in the Development mode by typing this in the terminal:

```
php init
```

![Step 11.1](https://i.imgur.com/bvBr273.png)

-   Press `0` for the `Development mode`.

![Step 11.2](https://i.imgur.com/Qs4q9JA.png)

-   Type `yes` to confirm that you are building the template in `Development mode`.

![Step 11.3](https://i.imgur.com/Eg4Iepr.png)

-   This will generate some files for us.

![Step 11.4](https://i.imgur.com/z45oXKg.png)

### Step 12: Informing the framework regarding the database change

-   Go to this file in `VS Code` or the `text editor`:

```
/<path-to-project-folder>/common/config/main-local.php.
```

-   In my case it will be:

```
C:\LEO\xampp\htdocs\kanika-Event-Aggregator\common\config\main-local.php
```

-   Since we have already opened this project folder in `VS code` I'll be navigating through
    the files in the `VS code's` sidebar and change the database name in that file.

![Step 12.1](https://i.imgur.com/akkXYJy.png)

-   i.e. `dbname=<newly created database name>`
-   The name should be same as the one that you created in [Step 10](#step-10-creating-the-database-for-the-project).
-   Replace `<newly created database name>` with the database name that you have created 
    in [Step 10](#step-10-creating-the-database-for-the-project).
-   In my case I will be giving it as `kanika_dscevent`.

![Step 12.2](https://i.imgur.com/sj5SWVW.png)

-   We are doing this step to let the `Yii2` know that we are going to use that database for the project.

### Step 13: Composer Update

-   In the terminal of the `VS Code` execute this command:

```
composer update
```

![Step 13.1](https://i.imgur.com/98Iw6BE.png)

-   This will bring us the packages that are needed to execute the code.
-   It is similar to the node-modules involved in a JavaScript project.
-   This is how it will look when the `composer` collects the dependent packages.

![Step 13.2](https://i.imgur.com/pAc1Amf.png)

-   This might take some time depending on your internet speed.
-   This is how it will look once it's done.

![Step 13.3](https://i.imgur.com/vI0MOAC.png)

### Step 14: Applying the _migrations_

-   Type the following command to create the migrations:

```
php yii migrate
```

![Step 14.1](https://i.imgur.com/wYtx5M4.png)

-   After that it will ask:

```
Apply the above migrations? (yes|no) [no]:
```

-   Type `yes`.

![Step 14.2](https://i.imgur.com/oabwBw3.png)

-   This is how it will look once the migrations are applied.

![Step 14.3](https://i.imgur.com/3nLuPla.png)

-   For us it shows two migrations because we started this documentation when the project was
    freshly initiated. So for you guys it will have more than two migrations.
-   To verify that the tables are created go to the `phpMyAdmin` homepage.

![Step 14.4](https://i.imgur.com/Eu1tDYM.png)

-   When you see the project's database, you can see that it has created some tables for us.
-   The `migrations` keeps tracks of all the database related stuff that we have done so far.

### Step 15: Opening the _httpd-vhosts.conf_

-   Open the `Hosts` folder.
-   It is present in the `Desktop`.
-   Double click on the `extra` folder.
-   Right click on the `httpd-vhosts.conf` file.
-   Open that file using `VS Code`.

![Step 15.1](https://i.imgur.com/I7mbBu5.png)

-   This is how the file looks like.

![Step 15.2](https://i.imgur.com/vYZqrS0.png)

### Step 16: Setting up the First Virtual Host: _localhost_

-   Add these at the end of the `httpd-vhosts.conf` file.

```xml
<VirtualHost *:80>
ServerName localhost
DocumentRoot "C:\<your folder>\xampp\htdocs"

    <Directory "C:\<your folder>\xampp\htdocs">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php
        # use index.php as index file
        DirectoryIndex index.php
        # ...other settings...
        # Apache 2.4
        Require all granted

        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>

</VirtualHost>
```

-   Replace `<your-folder>` with the name that you have given while installing `Xampp`.
-   In my case I have installed it to `C:\LEO\xampp`.
-   So my virtual host configuration will look like this:

```xml
<VirtualHost *:80>
ServerName localhost
DocumentRoot "C:\LEO\xampp\htdocs"

    <Directory "C:\LEO\xampp\htdocs">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php
        # use index.php as index file
        DirectoryIndex index.php
        # ...other settings...
        # Apache 2.4
        Require all granted

        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>

</VirtualHost>
```

![Step 16.1](https://i.imgur.com/Sr7ARd5.png)

-   Save the file.
-   We are adding the above lines to allow us to run the normal `PHP` project/stuff.
-   By normal I mean, without any framework.

### Step 17: Setting up the Second Virtual Host: _dsc-eventag.kanika_

-   Add these at the end of the `httpd-vhosts.conf` file.

```xml
<VirtualHost *:80>
ServerName dsc-eventag.<your name>
DocumentRoot "C:\<your folder>\xampp\htdocs\<name>-Event-Aggregator"

    <Directory "C:\<your folder>\xampp\htdocs\<name>-Event-Aggregator">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php
        # use index.php as index file
        DirectoryIndex index.php
        # ...other settings...
        # Apache 2.4
        Require all granted

        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>

</VirtualHost>
```

-   Save the file after filling out the appropriate details in place of:
    `<your folder>` , `<name>` and `<your name>`.
-   In my case it will be:

```xml
<VirtualHost *:80>
ServerName dsc-eventag.kanika
DocumentRoot "C:\LEO\xampp\htdocs\kanika-Event-Aggregator"

    <Directory "C:\LEO\xampp\htdocs\kanika-Event-Aggregator">
        # use mod_rewrite for pretty URL support
        RewriteEngine on
        # If a directory or a file exists, use the request directly
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        # Otherwise forward the request to index.php
        RewriteRule . index.php
        # use index.php as index file
        DirectoryIndex index.php
        # ...other settings...
        # Apache 2.4
        Require all granted

        ## Apache 2.2
        # Order allow,deny
        # Allow from all
    </Directory>

</VirtualHost>
```

![Step 17.1](https://i.imgur.com/YUADaRK.png)

-   We add these lines to let the `Apache` server know that when we enter the URL given in the `ServerName`, it should present us with the output of the code present in `DocumentRoot` folder.

### Step 18: Opening the _hosts_ folder

-   Open the `Hosts` folder.
-   It is present in the `Desktop`.
-   Double click on the `etc` folder.
-   Right click on the `hosts` file.
-   Open that file using `VS Code`.

![Step 18.1](https://i.imgur.com/4BjgV3z.png)

-   The `hosts` file will look like this:

![Step 18.2](https://i.imgur.com/UoTHO50.png)

### Step 19: Adding the URLs for the Virtual Host

-   Add these at the end of the `hosts` file.

```
127.0.0.1      localhost
127.0.0.1      dsc-eventag.<your name>
```

-   In my case it will be like this:

```
127.0.0.1      localhost
127.0.0.1      dsc-eventag.kanika
```

![Step 19.1](https://i.imgur.com/S2dJjHc.png)

-   Save it.
-   When you try to save it there will be pop-up on the bottom-right corner.
-   Click on the `Retry as Admin` button in that pop-up.

![Step 19.2](https://i.imgur.com/8RAPSkv.png)

-   Wait for few seconds.
-   There will be an another pop-up from the Command Prompt.
-   Select `Yes`.
-   And now the `hosts` file is saved.
-   The command prompt popup may or may not appear for everyone.

![Step 19.3](https://i.imgur.com/SDdgWYy.png)

### Step 20: Restarting the _Apache_ server

-   Stop the `Apache` server in the `Xampp` Control Panel.

![Step 20.1](https://i.imgur.com/mpuygIJ.png)

-   Start the `Apache` server in the `Xampp` Control Panel.

![Step 20.2](https://i.imgur.com/8raPGdR.png)

-   After starting the server it will look like this:

![Step 20.3](https://i.imgur.com/FPtriSL.png)

-   We are doing this because:
    -   We modified the content of a file which is present inside `apache` folder.
    -   We added our own local hosting URLs in the `hosts` file.

### Step 21: Opening the virtual URL

-   Now open your browser.
-   Type the URL that we added in the `httpd-vhosts.conf` file in the address bar along with
    the `http://` in the front.
-   Like this: `http://dsc-eventag.<your name>`
-   For me it will be `http://dsc-eventag.kanika`
-   Press Enter.
-   I am able to see the default `Yii2` Congratulations page; but for you guys it will be something else.

![Step 21.1](https://i.imgur.com/4lrtAqH.png)

-   The next time when you want to exeucte the project, you should do it with the newly created URL.

### _Note_

-   The locally hosted URL should be different for each `Yii2` project.
-   Make sure that whatever URL you are choosing to keep, it is not used by some one else previously.
    Like make sure that it is not hosted.
    For example , you cannot give the `ServerName` as `github.com` because it already exists.
-   The database name should be different for each `Yii2` project.
-   You will be adding the content in [Step 17](#step-17-setting-up-the-second-virtual-host-dsc-eventagkanika)
    only once for each project folder.
-   In the `httpd-vhosts.conf` give the project folder path correctly in `DocumentRoot` and `Directory`.
-   Even with the `localhost/<project foldername>` it will work. But we won't be executing in that method from now on.
-   At a time have only one `Xampp` application running.
-   Do not have multiple instances of `Xampp` at the same time. This might lead to some `Access error` type of issues.
-   And whenever you start `Xampp`, open with Administrator privileges.
-   Here is how you can do that:
    -   Click on Start button
    -   Search for `Xampp`
    -   In the Right hand side you can see `Run as Administrator`.
    -   Click on that.
    -   A pop up will come up.
    -   Click `Yes`.
