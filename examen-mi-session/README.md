# Examen : Terminal Linux

**Durée** : 2 heures  
**Obligatoire** : Vos caméras doivet êtres allumées tout le long de l'examen

---

**Remise** : Mettez vos réponses dans un fichier .md / .txt / .doc ainsi que les screenshots dans un dossier compréssé nommé ainsi : votre-nom-edw1-mi-session.zip

---

## Partie 1 : Questions théoriques (40%)

### Section A : Vrai/Faux avec explication (10 questions × 2 points = 20 points)

**Choisissez VRAI ou FAUX et expliquez BRIÈVEMENT**

1. **Le terminal est une interface graphique comme Windows ou macOS.**  
   □ VRAI □ FAUX  
   **Explication** :

2. **La commande `ls` permet de créer un nouveau fichier.**  
   □ VRAI □ FAUX  
   **Explication** :

3. **`cd ..` permet de remonter d'un niveau dans l'arborescence.**  
   □ VRAI □ FAUX  
   **Explication** :

4. **`mkdir mon dossier` crée un dossier appelé "mon dossier".**  
   □ VRAI □ FAUX  
   **Explication** :

5. **`rm -r` peut supprimer un dossier et son contenu.**  
   □ VRAI □ FAUX  
   **Explication** :

6. **`pwd` affiche le contenu du dossier courant.**  
   □ VRAI □ FAUX  
   **Explication** :

7. **Un lien symbolique est comme un raccourci Windows.**  
   □ VRAI □ FAUX  
   **Explication** :

8. **`*.txt` sélectionne tous les fichiers terminant par .txt.**  
   □ VRAI □ FAUX  
   **Explication** :

9. **`sudo` permet d'exécuter une commande en tant qu'administrateur.**  
   □ VRAI □ FAUX  
   **Explication** :

10. **`clear` efface définitivement des fichiers.**  
    □ VRAI □ FAUX  
    **Explication** :

### Section B : Questions à choix multiples (10 questions × 2 points = 20 points)

**Une seule réponse correcte par question**

1. **Quelle commande utilise-t-on pour savoir où l'on se trouve dans le système ?**  
   a) `where`  
   b) `locate`  
   c) `pwd`  
   d) `here`

2. **Pour créer un dossier "images", on utilise :**  
   a) `newdir images`  
   b) `create images`  
   c) `mkdir images`  
   d) `folder images`

3. **Que fait la commande `ls -l` ?**  
   a) Liste les fichiers sur une ligne  
   b) Liste avec détails (permissions, taille)  
   c) Liste seulement les dossiers  
   d) Liste les fichiers cachés

4. **Pour se déplacer dans le dossier personnel (home), on tape :**  
   a) `cd home`  
   b) `cd ~`  
   c) `cd /`  
   d) `cd .`

5. **Quelle combinaison de touches efface tout depuis le curseur jusqu'au début de la ligne ?**  
   a) Ctrl + A  
   b) Ctrl + E  
   c) Ctrl + U  
   d) Ctrl + K

6. **Pour obtenir de l'aide sur la commande `mkdir`, on peut taper :**  
   a) `help mkdir`  
   b) `mkdir ?`  
   c) `mkdir --help`  
   d) `man mkdir`  
   e) c et d sont correctes

7. **Que signifie le symbole `~` dans un chemin ?**  
   a) Dossier racine  
   b) Dossier temporaire  
   c) Dossier personnel (home)  
   d) Dossier système

8. **Pour créer un fichier vide nommé "notes.txt", on utilise :**  
   a) `create notes.txt`  
   b) `new notes.txt`  
   c) `file notes.txt`  
   d) `touch notes.txt`

9. **Quelle commande permet de voir les dernières commandes tapées ?**  
   a) `last`  
   b) `previous`  
   c) `history`  
   d) `memory`

10. **Pour quitter le manuel (man), on appuie sur :**  
    a) `q`  
    b) `x`  
    c) `Esc`  
    d) `Ctrl+C`

---

## Partie 2 : Commandes à compléter/corriger (30%)

### Exercice 1 : Complétez les commandes (10 points)

**Remplissez les trous avec les bonnes commandes ou options :**

1. Pour **lister** les fichiers du dossier courant : `______`
2. Pour **créer** un dossier "projet" : `______ projet`
3. Pour **se déplacer** dans le dossier "projet" : `______ projet`
4. Pour **créer** un fichier "readme.txt" : `______ readme.txt`
5. Pour **remonter** au dossier parent : `______ ..`
6. Pour **nettoyer** l'écran du terminal : `______`
7. Pour **savoir** où je suis : `______`
8. Pour **voir** les fichiers cachés : `ls ______`
9. Pour **voir** l'**historique** des commandes : `______`
10. Pour **quitter** le terminal : tapez `______`

### Exercice 2 : Corrigez les erreurs (10 points)

**Ces commandes contiennent des erreurs. Réécrivez-les correctement :**

1. `ls -l /home/mon dossier`
   **Correction** :

2. `mk dir images`
   **Correction** :

3. `cd /home/user/Document`  
   **Correction** :

4. `touch mon fichier.txt`  
   **Correction** :

5. `rm mon_dossier`  
   **Correction** :

### Exercice 3 : Associez les commandes à leur fonction (10 points)

**Reliez chaque commande à sa description :**

```
Commandes :                    Descriptions :
1. ls [ ]                      A. Crée un dossier
2. cd [ ]                      B. Affiche le chemin courant
3. pwd [ ]                     C. Liste les fichiers
4. mkdir [ ]                   D. Change de dossier
5. touch [ ]                   E. Crée un fichier vide
6. clear [ ]                   F. Supprime un fichier
7. rm [ ]                      G. Nettoie l'écran
8. cp [ ]                      H. Copie un fichier
9. mv [ ]                      I. Déplace ou renomme
10. man [ ]                    J. Affiche le manuel
```

---

## Partie 3 : Mise en pratique (30%)

### Exercice 1 : Créez une structure de projet web (15 points)

**Consignes** :  
Créez la structure suivante pour un site web simple.  
**IMPORTANT** : Montrez chaque commande que vous tapez (screenshot)

```
mon_site_web/
├── index.html
├── style.css
├── script.js
└── images/
    ├── logo.png
    └── background.jpg
```

### Exercice 2 : Manipulations de base (15 points)

**À partir de la structure créée à l'exercice 1, réalisez ces tâches :**

1. **Renommez** `style.css` en `styles.css`
2. **Créez un dossier** `backup`
3. **Copiez** tous les fichiers .html et .css dans `backup/`
4. **Créez un lien symbolique** vers `index.html` appelé `accueil.html`
5. **Listez** le contenu avec les détails
6. **Affichez** où vous êtes dans le système
