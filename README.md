# symfony1-skeleton

A skeleton for new symfony1 projects.

### Features

* [Apache Ant](http://ant.apache.org/) build file
  * defaults for [HudsonCI](http://hudson-ci.org) integration
  * targets for symfony operation
  * **release** target for Hudson's [Release Plugin](http://wiki.hudson-ci.org/display/HUDSON/Release+Plugin)
* script for displaying project information in dev/staging environments
* special symfony library include file for working in different environments

## Creating a New Project

The following are my recommended instructions for creating a new project
based on this skeleton.

### Step 1 - Clone this repository

Clone symfony1-skeleton repo locally (do not fork for new projects)

    git clone git@github.com:kbond/symfony1-skeleton.git [project-name]

### Step 2 - Setup your project

Delete .git folder

    rm -rf .git

Clear out ``README.md``

Open ``config/properties.ini`` - set your project information

### Step 3 - Initialize your new project's repository

Initialize new git repository

    git init

Add all files

    git add .

Initial commit

    git commit -m "initial commit"

### Step 4 - Push your new project to github (or equivalent)

Add remote

    git remote add origin [remote]

Push to remote

    git push origin master

## symfony library configuration

The path to the symfony library is specified in ``config/include.php``.  By default,
this file is ignored so that you may have different symfony libraries on different
machines.

For example, if you develop on 2 different machines (linux and windows), you would
have a different symfony library location for both.  On your staging/production server
you would embed the library.  ``config/config.php.dist`` has some examples.

Bundled are two ant targets for updating that file: ``symfony.lib.embed`` and
``symfony.lib.shared``.

*The idea of having this additional include file is something I struggle with.
This functionality can be easily removed.  Feedback appreciated.*

## build.xml

This skeleton comes with an Apache Ant ``build.xml`` file that includes some
useful *targets*.  Make sure you have Apache Ant installed or use an IDE like
[Netbeans](http://www.netbeans.org).  Additional comments are in the ``build.xml`` file.

* ``symfony.dir``: creates directories in your project required by symfony
* ``symfony.lib.embed``: checks out the symfony library to ``lib/vendor/symfony``
* ``symfony.lib.shared``: adds a shared symfony library to ``config/include.php``
* ``symfony.clearcache``: calls ``symfony cc``
* ``symfony.permissions``: calls ``symfony project:permissions``
* ``symfony.plugins``: installation of 3rd party plugins
* ``project.config``: any configuration to be run on CI server (ie. load fixtures)
* ``project.test``: runs your project's test suite

There are some additional targets that are intended for you CI server.