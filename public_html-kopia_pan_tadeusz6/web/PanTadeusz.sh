#!/bin/bash

mkdir PanTadeusz2
cd PanTadeusz2
git init

LICZNIK=1
TEKST=""
while [ $LICZNIK -lt 13 ]; do
	TEKST="../kopia/ksiega_"$LICZNIK".html"
	cp $TEKST ./
	git add "ksiega_"$LICZNIK".html"
	git commit -a -m "Dodanie księgi $LICZNIK"
	LICZNIK=$(($LICZNIK+1))
done

CIAG=""
LICZNIK=1
for CIAG in `git log | grep "commit *" | cut -d " " -f2 | cut -c1-4 | tac`; do
	for LICZBA in 4 8 10; do
		if [ $LICZNIK -eq $LICZBA ]; then
			git revert $CIAG --no-edit	
		fi
	done
	LICZNIK=$(($LICZNIK+1))
done

cd ..
