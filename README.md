# symfony1-skeleton

A skeleton for new symfony1 projects.

### Features

* [Apache Ant](http://ant.apache.org/) build file
  * defaults for [HudsonCI](http://hudson-ci.org) integration
  * targets for symfony operation
  * **release** target for Hudson's [Release Plugin](http://wiki.hudson-ci.org/display/HUDSON/Release+Plugin)
* script for displaying project information in dev/staging environments
* special symfony library include file for working in different environments

## New Project Instructions

The following are my recommended instructions for creating a new project based on this skeleton

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