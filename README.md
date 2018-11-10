
# Social App

[![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome) ![](https://img.shields.io/badge/HNG-StrikeWork-brightgreen.svg)
[![Pull Requests Welcome](https://img.shields.io/badge/PRs-welcome-red.svg?style=flat)](http://makeapullrequest.com)
[![first-timers-only Friendly](https://img.shields.io/badge/first--timers--only-friendly-purple.svg)](http://www.firsttimersonly.com/)
![](https://img.shields.io/badge/Social-App-blue.svg)

This is the Repository for the **Social App Project** :fire: <br>

# Contributor's Guide

**Note:** accepts PR's (pull requests) from **newbies**
only, this is to help **newbies** get familiar with contribution processes.

Issues can be submitted by anyone, seasoned developers or newbies.

### Getting Started

1.  If you are new to Git and Github, it is advisable you go through
    [GitHub For Beginners](http://readwrite.com/2013/09/30/understanding-github-a-journey-for-beginners-part-1/)
    before moving to the next step.

2.  Fork the project on Github,
    [Help Guide to Fork a repository](https://help.github.com/articles/fork-a-repo/).

    ![Illustration for how to fork a repository](https://hisham.hm/img/posts/github-fork.png)

3.  Clone the project.

    ![Illustration for how to clone the project](https://services.github.com/on-demand/images/gifs/github-desktop/clone-repository-locally.gif)

4.  Create a branch specific to the issue you are working on.

    ```shell
    git checkout -b update-readme-file
    ```


    ```

    For clarity to yourself and others on the issue you're working on, name
    your branch something like `update-xxx` or `fix-xxx` where `xxx` is a short
    description of the changes you're making. For example `update-readme` or
    `fix-typo-on-contribution-md`.

5.  Open up the project in your favourite text editor, select the file you want
    to contribute to and make your changes.

    If you are making changes to the README.md file, you would need to have
    Markdown knowledge. Visit
    [here to read about GitHub Markdown](https://guides.github.com/features/mastering-markdown/)
    and
    [here to practice](http://www.markdowntutorial.com/).

    - If you are adding a new project/organisation to the README, make sure
      it's listed in alphabetical order.
    - If you are adding a new organisation, make sure you add an organisation
      label to the organisation name. This would help distinguish projects
      from organisation projects.

6.  After making your changes in the new git branch then add your modified
    files to git,
    [How to add, commit, push and go](http://readwrite.com/2013/10/02/github-for-beginners-part-2/).

    ```shell
    git add path/to/filename.ext
    ```


    ```

    You can also add all unstaged files using:

    ```shell
    git add .



    ```

    Note, using a `git add .` will automatically add all files. You can do a
    `git status` to see your changes, but do it before `git add`.

7.  Commit your changes using a descriptive commit message.

    ```shell
    git commit -m "Brief Description of Commit"
    ```


    ```

8.  Push your commits to your Github Fork:

    ```shell
    git push -u origin branch-name
    ```


    ```

9.  Submit a pull request.

    Within GitHub, visit this main repository and you should see a banner
    suggesting to make a pull request. While you're writing up the pull
    request, you can add `Closes #XXX` in the message body where `#XXX` is the
    issue you're fixing. So an example would be `Closes #42` would close issue
    `#42`.

### Submitting a Pull Request

[What is a pull request?](https://yangsu.github.io/pull-request-tutorial/)

If you decide to fix an issue, it's advisable to check the comment thread in
case there's somebody already working on a fix. If no one is working on it at
the moment, kindly leave a comment stating that you intend to work on it so
other people don't accidentally duplicate your effort.

In a situation whereby somebody decides to fix an issue but doesn't follow up
for a particular period of time, say 2-3 weeks, it's acceptable to still pick
up the issue but make sure to leave a comment.

### Helpful Resources

- [Pro GIT Book](https://git-scm.com/book/en/v2)

- [Try Git](https://try.github.io/)

- [Git/ Git Hub on Windows](https://www.youtube.com/watch?v=J_Clau1bYco)



# Setting Up the Laravel project
Laravel is often referred to as the “PHP Framework For Web Artisans”. It is an interesting technology to work with as a server-side(back-end) developer but as a front-end developer you can work with it too.

Requirements
To be able to work on a laravel project, there are some basic requirements:

* Composer: This is a tool for dependency management in PHP, if you do not have it installed in your computer globally please pause and install it [here](https://getcomposer.org/download/)

* PHP: It is advisable to root for PHP versions >= 7.0, get it [here](http://php.net/downloads.php)

Command Line Interface : No actual recommendation here, anyone you choose is suitable(git bash, CMD, Terminal etc).
Introduction
Laravel uses a different view rendering technique called blading.<br>
Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade view files use the  ``.blade.php`` file extension and are typically stored in the ``resources/views`` directory.

* Stage 1: Setting up project on local machine

1.  Clone the socialapp project to your local machine preferably in you www(windows) and www/html(linux) folder.

2. Enter into the project directory my running the cd command
 ``cd socialapp``
 ``cd src``

3. Run the composer command to download and install are required laravel dependencies.
 ``composer install``

4. Make a copy of the sample environment file (at this point the project should be open in your text editor)
 ``cp .env.example .env``
(you should see the new file added through your editor).

5. Generate you unique APP_KEY 
 ``php artisan key:generate``
The key will automatically be updated in your environment file in your editor. If it doesn’t you can always copy and paste.

* Stage 2: Connecting your database

1.  Go to your ``localhost/phpmyadmin`` , login and create a new database

2. Go to your .env file and edit DB_DATABASE , DB_USERNAME and DB_PASSWORD to match the credentials you just created, where DB_USERNAME and DB_PASSWORD are the credentials of your phpmyadmin.

3. Go to your CLI and run ``php artisan migrate`` to create the appropriate tables for you in your local database.

4. Run php artisan db:seed seed the tables for you in your local database.

5. Or you can run step 3& 4 together as php artisan migrate --seed to create the appropriate tables and seed them in your local database.

* Stage 3: Food is ready

The project is ready to be served in your local machine. To do this run php artisan serve to serve the project at ``localhost:8080`` or ``127.0.0.1:8000`` .

To alternatively serve in through another port run php artisan serve --port=<port no> . For instance if port 8000 is occupied you can run it on 8080 like this ``php artisan serve --port=8080`` .

Visit ``127.0.0.1:8000`` or ``127.0.0.1:<port no>`` to see your project up and running

