# Tugas_web_service_1


sintaks dasar dari DTD adalah sebagai berikut:

<!DOCTYPE element DTD identifier
[
   declaration1
   declaration2
   ........
]>

Sintaks DTD internal seperti yang ditunjukkan:

<!DOCTYPE root-element [element-declarations]>

di mana akar-unsur adalah nama dari elemen root dan elemen-deklarasi adalah di mana Anda menyatakan unsur-unsur.


Contoh
Berikut ini adalah contoh sederhana dari DTD intern:

<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<!DOCTYPE address [
   <!ELEMENT address (name,company,phone)>
   <!ELEMENT name (#PCDATA)>
   <!ELEMENT company (#PCDATA)>
   <!ELEMENT phone (#PCDATA)>
]>
<address>
   <name>Tanmay Patil</name>
   <company>TutorialsPoint</company>
   <phone>(011) 123-4567</phone>
</address>

Start Declaration- Begin the XML declaration with following statement

<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>DTD- Immediately after the XML header, the document type declaration follows, commonly referred to as the DOCTYPE:
