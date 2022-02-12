<?php

/**
 * r: Opens file for read only. 
 * w: Opens file for write only. Erases the contents of the file or creates a new file if it doesn't exist. 
 * a: Opens file for write only. 
 * x: Creates new file for write only. 
 * r+: Opens file for read/write. 
 * w+: Opens file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. 
 * a+: Opens file for read/write. Creates a new file if the file doesn't exist 
 * x+: Creates new file for read/write. 
 */

$openFile = fopen("text.txt", "w"); //otwieranie pliku w trubie zapisu jezeli istnieje, jezeli plik nie istenieje to zostanie stworzony