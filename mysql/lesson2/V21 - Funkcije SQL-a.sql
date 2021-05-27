/* Funkcije u SQL - u */

/* Vraća ASCII vrednost prvog karaktera vrednosti imena glumca: */

SELECT ASCII(first_name) AS NumCodeOfFirstChar, first_name
FROM actor;

/* Vraća dužinu string-a: */

SELECT CHAR_LENGTH(first_name) AS LengthOfString, first_name from actor;

/* Spajanje nekoliko 'kolona' u jednu: */

SELECT CONCAT(first_name, " ", last_name, ", ", last_update) AS ConcatenatedString from actor;

/* Spajanje nekoliko 'kolona' u jednu sa separatorom: */
SELECT CONCAT_WS("-", first_name, last_name, last_update) AS ConcatenatedString from actor;

/* Vraća poziciju indeksa u string listi: */

SELECT FIELD("q", "s", "q", "l");

/* Ubacuje string "MySQL" u string "ITAcademy". RZamenjuje prvih 9 karaktera: */

SELECT INSERT("ITAcademy", 1, 9, "MySQL");

/* Pronalazi poziciju za "A" u stringu "ITAcademy" i prikazuje je: */

SELECT INSTR("ITAcademy", "A") AS MatchPosition;

/* Konvertuje tekst u mala slova: */

SELECT LOWER("SQL Vežbe mogu biti COOL!");

/* Konvertuje tekst u velika slova: */

SELECT UPPER("SQL Vežbe mogu biti COOL!");

/* Uklanja višak spejsova iz string-a: */

SELECT LTRIM("     SQL ;)  Vežbe     ") AS LeftTrimmedString;

/* Izdvaja substring iz string-a (počevši od pozicije 5, ostavljajući 3 karaktera): */

SELECT MID("SQL Vežbe", 5, 3) AS ExtractString;

/* Zamena dela stringa, "SQL" sa "HTML": */

SELECT REPLACE("SQL Tutorial", "SQL", "HTML");

/* Poređenje dva stringa: */

SELECT STRCMP("SQL Tutorial", "SQL Tutorial");
SELECT STRCMP("HTML Tutorial", "SQL Tutorial");
SELECT STRCMP("SQL Tutorial", "HTML Tutorial");

/* Prikazivanje substring-a od string-a pre navedednog karaktera iz pozicije: */

SELECT SUBSTRING_INDEX("IT_Akademija", "A", 1);

/* Left-pad: popunjavenje sa leva u desno stringom "ABC", do dužine od 20 karaktera (sa ponavljanjem): */

SELECT LPAD("IT Academy", 20, "ABC");

/* Right-pad: popunjavenje sa desna u levo stringom "ABC", do dužine od 20 karaktera (sa ponavljanjem): */

SELECT RPAD("IT Academy", 20, "ABC");

/* Reversno ispisivanje string-a: */

SELECT REVERSE("IT Academy");
SELECT REVERSE("AnaVoliMilovana");