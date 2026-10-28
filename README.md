# ISI-Student-Manager-Groupe04

<img width="1917" height="966" alt="image" src="https://github.com/user-attachments/assets/fb838651-6c68-4405-9dfe-3ae4921a45f6" />

# ISI-Student-Manager-Groupe04

## TP 3 — Gestion collaborative des versions avec Git et GitHub

**Projet :** ISI Student Manager  
**Groupe :** 04  
**Technologies :** PHP, HTML, CSS, Git et GitHub

### Présentation du projet

Ce projet est réalisé dans le cadre du TP 3 de Méthodologies de Développement et Ateliers PHP.

L'objectif est de développer une mini-application web de gestion des étudiants et des projets, tout en appliquant les principes du travail collaboratif avec Git et GitHub.

Chaque étudiant travaille sur une branche dédiée, puis propose ses modifications à travers une Pull Request.

### Répartition des tâches

| Étudiant | Responsabilité | Fichier | Branche |
|---|---|---|---|
| A | Page d'accueil et dépôt GitHub | `index.php` | `feature/accueil` |
| B | Gestion des étudiants | `etudiants.php` | `feature/etudiants` |
| C | Liste des projets | `projets.php` | `feature/projets` |
| D | Style et navigation | `style.css` | `feature/style` |

---

# Étudiant A — Création du dépôt et page d'accueil

### 1. Création du dépôt GitHub

L'étudiant A est responsable de la création du dépôt commun :

`ISI-Student-Manager-Groupe04`

Il invite les étudiants B, C et D comme collaborateurs.

### 2. Configuration de Git

```bash
git --version
git config --global user.name "Nom Etudiant A"
git config --global user.email "email@example.com"
git config --list
```

### 3. Initialisation du projet

L'étudiant A prépare la structure du projet et la branche principale `main`.

### 4. Création de la branche d'accueil

```bash
git switch -c feature/accueil
```

### 5. Développement de la page d'accueil

Création du fichier `index.php` pour présenter l'application ISI Student Manager.

### 6. Enregistrement et publication

```bash
git add index.php
git commit -m "Ajout de la page d'accueil"
git push -u origin feature/accueil
```

### 7. Pull Request

Création d'une Pull Request de `feature/accueil` vers `main`, suivie d'une revue de code avant fusion.

---

# Étudiant B — Gestion des étudiants

### 1. Configuration Git et SSH

L'étudiant B configure Git et sa connexion SSH à GitHub.

### 2. Clonage du dépôt commun

```bash
git clone git@github.com:Abdelhadi-Mz/ISI-Student-Manager-Groupe04.git
```

### 3. Accès au projet

```bash
cd ISI-Student-Manager-Groupe04
git status
```

### 4. Création de la branche

```bash
git switch -c feature/etudiants
git branch --show-current
```

### 5. Développement

Création du fichier `etudiants.php` pour afficher la liste des étudiants.

### 6. Commit et push

```bash
git add etudiants.php
git commit -m "Ajout de la page étudiants"
git push -u origin feature/etudiants
```

### 7. Pull Request

Création d'une Pull Request vers `main` et demande de revue de code.

---

# Étudiant C — Gestion des projets

### 1. Configuration de Git

Vérification de l'installation de Git et configuration de l'identité de l'utilisateur.

```bash
git --version
git config --global user.name "Nom Etudiant C"
git config --global user.email "email@example.com"
git config --list
```

### 2. Configuration SSH dans GitHub

Génération d'une paire de clés SSH :

```bash
ssh-keygen -t ed25519 -C "email@example.com"
```

Ajout de la clé publique dans GitHub :

**Settings → SSH and GPG keys → New SSH key**

Test de la connexion :

```bash
ssh -T git@github.com
```

La connexion SSH a été établie avec succès.

### 3. Clonage du dépôt commun

Après configuration SSH, clonage du dépôt GitHub :

```bash
git clone git@github.com:Abdelhadi-Mz/ISI-Student-Manager-Groupe04.git
```

![Clonage du dépôt GitHub](image.png)

Accès au dossier du projet :

```bash
cd ISI-Student-Manager-Groupe04
git status
```

### 4. Mise à jour de la copie locale

Après les modifications réalisées par les autres membres du groupe, récupération de la dernière version de la branche principale :

```bash
git switch main
git pull origin main
git status
```

![Mise à jour de la copie locale](image-2.png)

### 5. Création de la branche feature/projets

Vérification de la branche active :

```bash
git status
git branch --show-current
```

Création de la branche dédiée aux projets :

```bash
git switch -c feature/projets
```

![Création de la branche feature/projets](image-1.png)

Vérification de la branche active :

```bash
git branch
git branch --show-current
```

![Vérification de la branche active](image-3.png)

### 6. Développement du fichier projets.php

Création du fichier `projets.php`.

Cette page permet d'afficher dynamiquement une liste de projets à partir d'un tableau PHP.

Fonctionnalités réalisées :

- Définition d'un tableau contenant quatre projets.
- Parcours du tableau avec `foreach`.
- Affichage des projets sous forme de liste HTML.
- Utilisation de `htmlspecialchars()` pour sécuriser l'affichage.

### 7. Test de l'application

Vérification de PHP :

```bash
php -v
```

Démarrage du serveur local :

```bash
php -S localhost:8000
```

Accès à la page :

`http://localhost:8000/projets.php`

La liste des projets s'affiche correctement dans le navigateur.

### 8. Ajout et commit du fichier

```bash
git status
git add projets.php
git commit -m "Ajout de la page liste des projets"
```

Vérification du commit :

```bash
git log -1 --oneline
```

### 9. Publication de la branche sur GitHub

```bash
git push -u origin feature/projets
```

La branche `feature/projets` est publiée sur le dépôt distant.

### 10. Création de la Pull Request

Création d'une Pull Request avec les paramètres :

- **Base :** `main`
- **Compare :** `feature/projets`
- **Titre :** Ajout de la page liste des projets

Cette Pull Request permet de proposer les modifications de l'étudiant C pour intégration dans le projet commun.

### 11. Revue de code

Un autre membre du groupe examine les modifications dans l'onglet **Files changed** et peut laisser un commentaire.

![Revue de code et commentaires](image-4.png)

Après validation de la revue, les modifications peuvent être fusionnées dans `main` par le responsable autorisé.

---

# Étudiant D — Style CSS et navigation

### 1. Configuration Git et SSH

L'étudiant D configure Git et sa connexion SSH à GitHub.

### 2. Clonage du dépôt

```bash
git clone git@github.com:Abdelhadi-Mz/ISI-Student-Manager-Groupe04.git
```

### 3. Accès au projet

```bash
cd ISI-Student-Manager-Groupe04
git status
```

### 4. Création de la branche CSS

```bash
git switch -c feature/style
git branch --show-current
```

### 5. Développement du style

Création du fichier `style.css` pour améliorer la présentation graphique de l'application.

Travail prévu :

- Mise en forme des titres et des textes.
- Personnalisation des couleurs.
- Amélioration de l'affichage des listes.
- Harmonisation de l'apparence des pages.
- Mise en forme des éléments de navigation.

### 6. Commit et push

```bash
git add style.css
git commit -m "Ajout du style CSS"
git push -u origin feature/style
```

### 7. Pull Request

Création d'une Pull Request de `feature/style` vers `main`, suivie d'une revue de code.

---

# Intégration collaborative du projet

Chaque étudiant travaille sur sa propre branche Git.

Le processus de collaboration est le suivant :

1. Création d'une branche de fonctionnalité.
2. Développement et test des modifications.
3. Ajout des fichiers avec `git add`.
4. Enregistrement avec `git commit`.
5. Publication avec `git push`.
6. Création d'une Pull Request.
7. Revue de code par un autre membre.
8. Fusion dans `main` après validation.

Après les fusions, les membres peuvent synchroniser leur copie locale :

```bash
git switch main
git pull origin main
```

# Conclusion

Ce TP permet de mettre en pratique la gestion collaborative des versions avec Git et GitHub.

Les étudiants découvrent l'utilisation des branches, des commits, du dépôt distant, des Pull Requests et des revues de code.

Le travail collaboratif facilite l'organisation du développement et l'intégration progressive des différentes parties de l'application ISI Student Manager.

**Remarque :** les sections des étudiants A, B et D décrivent les tâches à documenter. Elles doivent être vérifiées et complétées avec les commandes, captures et résultats réellement obtenus par chaque membre du groupe.
