# Makefile for main commands
SHELL := /bin/bash

default: install install-to-www

install:
	# install dependicies for linux
	bash install.sh

install-to-www:
	bash install_to_www.sh


clean:
	# clean this work dir from temporary files
	rm -rf *~* # this is from emacs
