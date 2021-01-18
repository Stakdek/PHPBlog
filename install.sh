#!/bin/bash
if [ "$(uname -s)" != "Linux" ] ; then
    echo "This program must be run in Linux!"
    exit 1
fi

set -e # bash you need to stop if you break

echo 'Update Repo…'
#git pull

# define dependicies
linux_dependicies="php libapache2-mod-php apache2"

read -p "This will install '$linux_dependicies'.
    Sure you want to keep going? " -n 1 -r
if [[ $REPLY =~ ^[Yy]$ ]]
then
  echo -e "\nInstalling now $linux_dependicies…"
  sudo apt-get update
  sudo apt install $linux_dependicies -y --reinstall
  echo "Activating PHP + Apache2"
  sudo a2dismod mpm_event && sudo a2enmod mpm_prefork && sudo a2enmod php7.4
  echo "Restarting Apache2 service"
  sudo systemctl restart apache2
fi
