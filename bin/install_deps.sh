#!/bin/sh

VENDOR=`pwd`/../vendor
PLUGINS=`pwd`/../plugins

cd $PLUGINS && svn co [URL] [NAME]

cd $PLUGINS && git clone [URL] [NAME]