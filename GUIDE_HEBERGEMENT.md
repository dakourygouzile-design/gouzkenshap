# 🚀 Guide d'hébergement gratuit - Gouzkenshap

Ce guide vous explique comment mettre votre site **Gouzkenshap** en ligne gratuitement et créer votre base de données MySQL.

---

## 📌 Sommaire

1. [Choisir un hébergeur gratuit](#1-choisir-un-hébergeur-gratuit)
2. [Créer un compte](#2-créer-un-compte)
3. [Créer une base de données MySQL dans le panneau](#3-créer-une-base-de-données-mysql-dans-le-panneau)
4. [Importer le fichier SQL](#4-importer-le-fichier-sql)
5. [Téléverser les fichiers du site](#5-téléverser-les-fichiers-du-site)
6. [Modifier la connexion à la base](#6-modifier-la-connexion-à-la-base-)
7. [Lancer le setup](#7-lancer-le-setup)
8. [Sécuriser avant mise en ligne](#8-sécuriser-avant-mise-en-ligne)

---

## 1. Choisir un hébergeur gratuit

Voici les meilleures options **gratuites** qui supportent PHP + MySQL :

| Hébergeur | Lien | Avantages | Lien gratuit |
|-----------|------|-----------|--------------|
| **InfinityFree** | infinityfree.net | Fiable, pas de pub obligatoire, 5 Go | `https://votre-site.infinityfreeapp.com` |
| **000webhost** | 000webhost.com | Très simple, interface en français | `https://votre-site.000webhostapp.com` |
| **AwardSpace** | awardspace.com | 2 Go, 1 base MySQL gratuite | `https://votre-site.awardspace.us` |

> 💡 **Recommandation** : **InfinityFree** est le plus stable et le plus généreux pour un test gratuit.

---

## 2. Créer un compte

1. Allez sur le site de l'hébergeur choisi (ex : `infinityfree.net`)
2. Cliquez sur **Sign Up** / **S'inscrire**
3. Saisissez votre email et un mot de passe
4. Vérifiez votre email (lien de confirmation)
5. Connectez-vous à votre **panneau d'administration**

---

## 3. Créer une base de données MySQL dans le panneau

Une fois connecté au panneau d'administration, suivez ces étapes :

### Avec **InfinityFree** :
1. Dans le panneau, allez dans **Control Panel** (hPanel)
2. Cherchez la section **MySQL Databases** / **Bases de données MySQL**
3. Cliquez sur **Create Database** / **Créer une base**
4. Remplissez :
   - **Database Name** : `gouzkenshap_db` (ou un nom de votre choix)
   - **Username** : `root` ou un nom d'utilisateur (ex : `gkouz`)
   - **Password** : créez un mot de passe fort
5. Cliquez sur **Create**
6. Notez précieusement ces informations :
   - **Nom de la base** (ex : `if0_12345678_gouzkenshap_db`)
   - **Nom d'utilisateur** (ex : `if0_12345678`)
   - **Mot de passe**
   - **Hôte MySQL** (souvent `sqlXXX.infinityfree.com`)

### Avec **000webhost** :
1. Dans le panneau, allez sur **Databases** → **MySQL Databases**
2. Cliquez sur **Create New Database**
3. Remplissez le nom de la base et le mot de passe
4. Un utilisateur sera créé automatiquement (souvent identique au nom de la base)

### Avec **AwardSpace** :
1. Dans le panneau, allez sur **MySQL Database**
2. Cliquez sur **Create MySQL Database**
3. Remplissez le nom de la base, l'utilisateur et le mot de passe

> ⚠️ **Important** : Gardez ces informations sous la main, vous en aurez besoin à l'étape 6.

---

## 4. Importer le fichier SQL

Vous devez créer les tables (`users`, `products`, `sales`) dans votre base en ligne.

> 📁 **Fichier SQL à utiliser** : j'ai déjà préparé un fichier **prêt pour l'hébergement** dans votre dossier Desktop :
> `c:/Users/MrGouz/Desktop/Gouzkenshap/database_import.sql`
>
> Ce fichier ne contient pas les lignes `CREATE DATABASE` / `USE` qui posent souvent problème sur les hébergeurs (car ils imposent leur propre nom de base). **Utilisez ce fichier `database_import.sql` pour l'import.**

### Méthode avec phpMyAdmin (recommandé) :
1. Dans le panneau de l'hébergeur, ouvrez **phpMyAdmin**
2. Sélectionnez votre base de données (celle que vous venez de créer)
3. Cliquez sur l'onglet **Importer** / **Import**
4. Cliquez sur **Choose File** et sélectionnez le fichier **`database_import.sql`** (déjà prêt, dans votre dossier Desktop)
5. Cliquez sur **Go** / **Exécuter**

### Si vous préférez exécuter le SQL manuellement :
- Ouvrez phpMyAdmin → sélectionnez votre base → onglet **SQL**
- Collez le contenu de `database_import.sql`
- Cliquez sur **Go**

> ℹ️ **Où trouver les fichiers SQL ?** Le projet principal est dans `c:/xampp/htdocs/gouzkenshap/`. Le fichier d'origine est `sql/init.sql`, mais pour l'hébergement utilisez le fichier `database_import.sql` que j'ai placé dans votre dossier Desktop `Gouzkenshap`.

---

## 5. Téléverser les fichiers du site

Vous devez envoyer tous les fichiers de votre site sur le serveur de l'hébergeur.

### Les fichiers à téléverser :
```
config/          (dossier)
css/             (dossier)
includes/        (dossier)
sql/             (dossier)
uploads/         (dossier - à créer)
admin.php
chemises.php
dashboard.php
db.php
deals.php
gouzrabbits.php
index.php
login.php
logout.php
register.php
vendeur.php
istockphoto-...  (votre image)
```

### Méthode avec le **gestionnaire de fichiers** (le plus simple) :
1. Dans le panneau, ouvrez le **File Manager** / **Gestionnaire de fichiers**
2. Allez dans le dossier `htdocs` (InfinityFree) ou `public_html` (000webhost)
3. Supprimez les fichiers par défaut (`index.html`, etc.)
4. **Téléversez** tous vos fichiers (clic droit → Upload) ou utilisez la fonction glisser-déposer
5. Créez un dossier `uploads` s'il n'existe pas

### Méthode avec **FTP** (pour beaucoup de fichiers) :
1. Installez **FileZilla** (gratuit)
2. Récupérez dans le panneau : **hôte FTP**, **nom d'utilisateur**, **mot de passe**
3. Connectez-vous et glissez-déposez tous les fichiers dans `htdocs` / `public_html`

---

## 6. Modifier la connexion à la base ✏️

Ouvrez le fichier `config/database.php` et remplacez les valeurs avec celles de votre hébergeur :

```php
<?php
define('DB_HOST', 'sqlXXX.infinityfree.com');  // ← Hôte de l'hébergeur
define('DB_NAME', 'if0_12345678_gouzkenshap_db');  // ← Nom complet de votre base
define('DB_USER', 'if0_12345678');  // ← Utilisateur de la base
define('DB_PASS', 'VotreMotDePasse');  // ← Mot de passe de la base
?>
```

> ⚠️ **Astuce** : Modifiez ce fichier **avant** de le téléverser, ou modifiez-le dans le gestionnaire de fichiers après l'upload.

---

## 7. Lancer le setup

Une fois la base configurée et les fichiers en ligne :

1. Ouvrez dans votre navigateur : `https://votre-site.infinityfreeapp.com/setup_marketplace.php`
2. Le script va :
   - Ajouter les colonnes `role` et `is_admin` à `users`
   - Créer les tables `products` et `sales`
   - Créer le compte **admin**
3. Vous verrez le message **"Configuration terminée !"**

### Compte administrateur créé :
- **Email** : `admin@gouzkenshap.com`
- **Mot de passe** : `admin123`

> ⚠️ **Changez ce mot de passe** après votre première connexion pour la sécurité !

---

## 8. Sécuriser avant mise en ligne

Pour protéger votre site, **supprimez ou renommez** ces fichiers une fois le site opérationnel :
- `setup_marketplace.php` (il expose la configuration)
- `check_database.php` (il affiche la structure de la base)
- `db.php` (fichier de connexion de secours)

Vous pouvez les mettre dans un dossier protégé ou simplement les renommer (ex : `setup_marketplace_disabled.php`).

---

## 🎉 Votre site est en ligne !

Vous disposez maintenant d'un lien à partager :
```
https://votre-site.infinityfreeapp.com
```

Partagez ce lien avec vos visiteurs, vos éleveurs de lapins et vos vendeurs de chemises !

---

## ✅ Récapitulatif des pages

| Page | Rôle |
|------|------|
| `index.php` | Page d'accueil |
| `register.php` | Inscription client / vendeur |
| `login.php` | Connexion |
| `vendeur.php` | Espace vendeur (produits + photos) |
| `admin.php` | Administration (approbation + commissions) |
| `gouzrabbits.php` | Vitrine lapins |
| `chemises.php` | Vitrine chemises |
| `dashboard.php` | Tableau de bord utilisateur |

---

## ❓ Questions fréquentes

**Mon site marchera-t-il vraiment en ligne ?**
Oui. Votre site utilise PHP + MySQL, les technologies standard supportées par tous les hébergeurs gratuits cités.

**Puis-je changer d'hébergeur plus tard ?**
Oui. Il suffira de ré-exporter votre base (phpMyAdmin → Export) et de téléverser les fichiers sur le nouvel hébergeur.

**Combien de temps le site reste-t-il gratuit ?**
Les hébergeurs gratuits exigent généralement une **connexion tous les 30 jours** pour garder le compte actif. Sinon, le site peut être suspendu.

**Que faire si les images ne s'affichent pas ?**
Vérifiez que le dossier `uploads` existe bien à la racine et qu'il a les droits d'écriture (permissions 755 ou 777).
