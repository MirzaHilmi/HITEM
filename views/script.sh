#!/bin/bash

for x in *.html; do 
  t=${x%.html}.sapi.php
  mv $x $t && echo "moved $x -> $t"
done

