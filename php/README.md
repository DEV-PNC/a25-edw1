# **EXERCICE 1 — Vérifier que PHP est installé**

## Objectif : S’assurer que PHP fonctionne depuis le terminal

**Instruction :**
Ouvrir un terminal / PowerShell / CMD et exécuter :

```bash
php -v
```

**Résultat attendu :**
Une version de PHP apparaît, par exemple :

```txt
PHP 8.2.12 (cli) …
```

**Si erreur :**

- `php n’est pas reconnu` → PHP n’est pas installé ou pas dans le PATH.
- Version trop ancienne → risque d’erreurs avec mysqli/PDO.

---

# **EXERCICE 2 — Vérifier que MySQL est installé**

## Objectif : S’assurer que la commande mysql fonctionne

**Instruction :**

Dans le terminal :

```bash
mysql -u root -p
```

Entrer le mot de passe.

**Résultat attendu :**
Une ligne comme :

```txt
mysql>
```

**Si erreur :**

- `Command not found` → MySQL pas installé ou PATH non configuré
- `Access denied` → mauvais mot de passe

---

# **EXERCICE 3 — Créer une base de données et une table**

## Objectif : Vérifier que MySQL fonctionne réellement

**Instruction :**

Dans MySQL :

```sql
CREATE DATABASE test_env;
USE test_env;

CREATE TABLE test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);
```

**Résultat attendu :**
Pas d’erreur, la table existe.

**Si erreur :**

- Syntaxe
- Pas les permissions
- Mauvaise DB sélectionnée

---

# **EXERCICE 4 — Tester mysqli (extension PHP)**

## Objectif : Vérifier que `mysqli` est activé

**Instruction :**
Créer un fichier **test_mysqli.php** :

```php
<?php
echo extension_loaded("mysqli") ? "mysqli OK" : "mysqli NON ACTIVÉ";
?>
```

Lancer :

```bash
php test_mysqli.php
```

**Résultat attendu :**

```txt
mysqli OK
```

**Si erreur :**

- Activer dans php.ini : `extension=mysqli`

---

# **EXERCICE 5 — Tester PDO**

## Objectif : Vérifier que PDO + driver MySQL fonctionne

Créer un fichier **test_pdo.php** :

```php
<?php
echo extension_loaded("pdo_mysql") ? "PDO OK" : "PDO MySQL NON ACTIVÉ";
?>
```

**Résultat attendu :**

```txt
PDO OK
```

**Si erreur :**

- Activer : `extension=pdo_mysql`

---

# **EXERCICE 6 — Lancer un serveur PHP**

## Objectif : Savoir lancer et comprendre le serveur local

**Instruction :**

1. Dans un terminal, se placer dans le dossier contenant le fichier PHP :

Exemple :

```bash
cd C:\Users\Nom\Documents\php-tests
```

ou sur Mac/Linux :

```bash
cd ~/Documents/php-tests
```

2. Lancer :

```bash
php -S localhost:8000
```

**Résultat attendu :**
Le terminal affiche :

```txt
Listening on http://localhost:8000
```

**Erreurs possibles :**

- `Address already in use` → le port 8000 est occupé
- Solution : tester un autre port → `php -S localhost:8080`

---

# **EXERCICE 7 — Accéder à un fichier PHP via le navigateur**

## Objectif : Comprendre les chemins et la structure

Créer un fichier **hello.php** :

```php
<?php echo "Bonjour !"; ?>
```

Dans le navigateur :

[http://localhost:8000/hello.php](http://localhost:8000/hello.php)

**Résultat attendu :**

```html
Bonjour !
```

**Erreurs fréquentes :**

- Mauvaise orthographe du fichier
- Mauvais dossier dans le terminal
- Le fichier est dans un sous-dossier (ex: `/public`)
  → alors : `http://localhost:8000/public/hello.php`

---

# **EXERCICE 8 — Exercice final intégrateur**

## Objectif : Vérifier toute la chaîne MySQL → PHP → navigateur

**Consigne :**

1. Créer la DB `test_connect`
2. Créer la table `users`
3. Insérer 2 utilisateurs
4. Créer un fichier `connect.php`
5. Tester la connexion avec mysqli ET PDO
6. Lancer un serveur PHP
7. Afficher les résultats dans un navigateur

**Template fourni :**

```php
<?php
$pdo = new PDO("mysql:host=localhost;dbname=test_connect;charset=utf8", "root", "");

foreach($pdo->query("SELECT * FROM users") as $row) {
    echo $row["username"] . " - " . $row["email"] . "<br>";
}
?>
```

**Résultat attendu :**

```txt
alice - alice@example.com
bob - bob@example.com
```
