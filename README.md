# ExoPOO2ex1
EXERCICES POO PHP 2 Exercice 1


Exercice 1 : L’opérateur de résolutions de portée

Dans cet exercice vous aller créer une classe très simple chargée de représenter un objet que vous
connaissez tous ainsi que quelques unes de ses caractéristiques : les Renault Clio.

Vous allez donc déclarer une classe clio dans laquelle nous allons intégrer quelques caractéristiques
d’une vraie clio à savoir : le nombre de portes, la couleur de la carrosserie, et le prix neuf de la
voiture.

Une fois cette classe avec ses attributs, ses getters et ses setters créée, instanciez plusieurs clio avec
des nombres de portes différents et des couleurs différentes et affichez ces valeurs à l’écran.


Attention : l’objectif de cet exercice est de vous faire travailler sur l’opérateur de résolution de
portée, c’est à dire les constantes de classe, les attributs statiques et les fonctions statiques.
Autrement-dit il faudra bien vous interroger sur ce que vous utiliser, il n’y aura pas que de simples
attributs et méthodes dans votre classe.
De plus vous allez vous renseignez sur le mode strict de
PHP et l’intégrer à votre script. De cette manière vous pourrez par exemple dire que telle méthode
attend explicitement un integer, une string ou un autre types.

Pour vous aider, voici quelques petites informations que vous devriez savoir :
- Une clio n’a que deux nombres de portes possibles : 3 et 5 cela ne change jamais !
- Une clio n’a que 8 couleurs de carrosserie possibles, une couleur est définie par un nom « bleu
nuit » par exemple et une référence couleur telle que 213800058. Quand on demande la couleur de
la carrosserie avec le getter, c’est cette référence qui est appelée.
- Le prix neuf de la voiture est commun à toute les clios crées, si le prix neuf d’une voiture change
alors celui de toutes les voitures change aussi. Ce prix est défini directement au sein du
constructeur.
