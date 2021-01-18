#!/bin/bash
if [ "$(uname -s)" != "Linux" ] ; then
    echo "This program must be run in Linux!"
    exit 1
fi

set -e # bash you need to stop if you break

# define source and target paths/folder
src_www=www
trg_www=/var/

read -p "This will overwrite your current $trg_www$src_www
    Sure you want to keep going? " -n 1 -r
if [[ $REPLY =~ ^[Yy]$ ]]
then
  echo -e "\nCopying files from $src_www to $trg_www…"
  sudo cp -r $src_www $trg_www
  echo "Copying files done."
fi
echo "Serving know on http://localhost/index.php with Apache2"
