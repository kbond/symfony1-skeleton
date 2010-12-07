#!/bin/sh

VENDOR=`pwd`/../lib/vendor

mkdir lib/vendor

cd $VENDOR && svn co http://svn.symfony-project.com/tags/RELEASE_1_4_8/ symfony