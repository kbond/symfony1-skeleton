#!/bin/sh

PROJECT_DIRECTORY=$(cd `dirname $0` && pwd)/../
VENDOR=$PROJECT_DIRECTORY/lib/vendor

mkdir $VENDOR

cd $VENDOR && svn co http://svn.symfony-project.com/tags/RELEASE_1_4_8/ symfony