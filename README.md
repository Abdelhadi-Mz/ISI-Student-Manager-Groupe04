
## TP 3 — Gestion collaborative des versions avec Git et GitHub

**Projet :** ISI Student Manager  
**Groupe :** 04  



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

# Étudiant A (Abdelhadi El Mezouari) — Création du dépôt et page d'accueil

### 1. Création du dépôt GitHub

L'étudiant A est responsable de la création du dépôt commun :

`ISI-Student-Manager-Groupe04`
<img width="1908" height="645" alt="image" src="https://github.com/user-attachments/assets/b0f8df75-4984-4c23-b0cc-a2a0822f94d5" />

Il invite les étudiants B, C et D comme collaborateurs.

<img width="1919" height="976" alt="image" src="https://github.com/user-attachments/assets/71d7156e-78f1-4212-8cb8-ac5a787b45e5" />



### 2. Configuration de Git

```bash
git --version
git config --global user.name "Nom Etudiant A"
git config --global user.email "email@example.com"
git config --list
<img width="388" height="228" alt="image" src="https://github.com/user-attachments/assets/1951f9ce-02cf-4541-be44-9f698b56e520" />

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

<img width="1910" height="965" alt="image" src="https://github.com/user-attachments/assets/f99ad1b0-9d2f-4036-a086-3b0eb62a3c46" />
<img width="1912" height="968" alt="image" src="https://github.com/user-attachments/assets/3d601cca-69e9-4980-b0ae-32c175290558" />


---

# Étudiant B — Gestion des étudiants

### 1. Configuration Git et SSH

L'étudiant B configure Git et sa connexion SSH à GitHub.
<img width="1600" height="235" alt="WhatsApp Image 2026-10-28 at 15 01 11" src="https://github.com/user-attachments/assets/98b1b0cd-5d57-4b47-b1c9-aa69c1b4dae8" />


### 2. Clonage du dépôt commun
<img width="1321" height="402" alt="Screenshot 2026-10-28 153120" src="https://github.com/user-attachments/assets/91dd3fc7-860d-4957-ac5e-121027336f5e" />

<img width="865" height="85" alt="Screenshot 2026-10-28 153335" src="https://github.com/user-attachments/assets/a64a4dc8-44cb-4702-aec5-9610fbc20527" />

```bash
git clone git@github.com:Abdelhadi-Mz/ISI-Student-Manager-Groupe04.git
```
<img width="952" height="185" alt="Screenshot 2026-10-28 153544" src="https://github.com/user-attachments/assets/07636833-0ff2-4112-89d4-d036a44e7c3c" />


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
<img width="1917" height="995" alt="image" src="https://github.com/user-attachments/assets/fb1275aa-2879-49a3-b29b-54ef01ac90d5" />


### 6. Commit et push

```bash
git add etudiants.php
git commit -m "Ajout de la page étudiants"
git push -u origin feature/etudiants
```

### 7. Pull Request

Création d'une Pull Request vers `main` et demande de revue de code.

---
### 8. Ajout et commit du fichier

<img width="947" height="86" alt="image" src="https://github.com/user-attachments/assets/37ca4094-d0ee-4174-a54c-90f5cf8c13aa" />

### 9. Publication de la branche sur GitHub

<img width="1391" height="304" alt="image" src="https://github.com/user-attachments/assets/2f97c596-ad04-4a5a-8c89-4990f3ca1be9" />
<img width="1088" height="45" alt="image" src="https://github.com/user-attachments/assets/495772f4-d1cb-481e-95e1-a61f2ac9c69e" />


### 10. Création de la Pull Request

Création d'une Pull Request avec les paramètres :



### 11. Revue de code

Laisser un commentaire pour l'etudiant B


### 12. Après validation, le groupe fusionne la Pull Request




# Étudiant C — Gestion des projets (Marieme AMZIL)

### 1. Configuration de Git

Vérification de l'installation de Git et configuration de l'identité de l'utilisateur.

<img width="859" height="244" alt="image" src="https://github.com/user-attachments/assets/15d8f3d6-018e-4bca-9b9f-878bd785b97a" />

### 2. Configuration SSH dans GitHub

Génération d'une paire de clés SSH :

```bash
ssh-keygen -t ed25519 -C "amzilmarieme@gmail.com"
```
<img width="1370" height="624" alt="image" src="https://github.com/user-attachments/assets/a17c9439-8794-4ea6-b483-812e0f93d3ef" />

Ajout de la clé publique dans GitHub :

<img width="1432" height="387" alt="image" src="https://github.com/user-attachments/assets/d4b92dbc-5ea1-4e81-b0ab-3df3b1dd021d" />

**Settings → SSH and GPG keys → New SSH key**

Test de la connexion :

<img width="1058" height="185" alt="image" src="https://github.com/user-attachments/assets/ca18f182-74c7-4c8a-85b4-bd8785008ecb" />


La connexion SSH a été établie avec succès.

### 3. Clonage du dépôt commun

<img width="1581" height="157" alt="image" src="https://github.com/user-attachments/assets/1a0b4a13-1ef9-41a4-af13-89df126c749e" />

### 4. Mise à jour de la copie locale

Après les modifications réalisées par les autres membres du groupe, récupération de la dernière version de la branche principale :

<img width="1359" height="500" alt="image" src="https://github.com/user-attachments/assets/7a732f85-add3-49c9-a9b8-6a3861f4805d" />

### 5. Création de la branche feature/projets

Vérification de la branche active :

<img width="1469" height="131" alt="image" src="https://github.com/user-attachments/assets/74c41152-0a4c-4abc-a069-0e53f85eb84d" />

### 6. Développement du fichier projets.php

Création du fichier `projets.php`.
<img width="1170" height="713" alt="image" src="https://github.com/user-attachments/assets/9481cd5e-0304-4753-8930-2ba07b46810f" />

### 7. Test de l'application

<img width="785" height="428" alt="image" src="https://github.com/user-attachments/assets/9f629550-fad4-4cd5-b2ff-ab19ff143f76" />

La liste des projets s'affiche correctement dans le navigateur.

### 8. Ajout et commit du fichier

<img width="1373" height="491" alt="image" src="https://github.com/user-attachments/assets/503e2f6d-05d6-4248-9270-36fa3e96b51a" />

### 9. Publication de la branche sur GitHub

<img width="1391" height="304" alt="image" src="https://github.com/user-attachments/assets/2f97c596-ad04-4a5a-8c89-4990f3ca1be9" />

La branche `feature/projets` est publiée sur le dépôt distant.

### 10. Création de la Pull Request

Création d'une Pull Request avec les paramètres :

<img width="1384" height="816" alt="Screenshot (692)" src="https://github.com/user-attachments/assets/f88fcd95-cd5d-49ef-9352-1859cfe42e72" />


Cette Pull Request permet de proposer les modifications de l'étudiant C pour intégration dans le projet commun.

### 11. Revue de code

Laisser un commentaire pour l'etudiant B

<img width="1361" height="700" alt="Screenshot (693)" src="https://github.com/user-attachments/assets/6c86175b-b7b4-4af2-ab79-d06bb51bc2aa" />

### 12. Après validation, le groupe fusionne la Pull Request

<img width="1225" height="743" alt="image" src="https://github.com/user-attachments/assets/743547d6-e587-42f0-a093-5555168fd467" />


# Étudiant D — Style CSS et navigation

### 1. Configuration Git et SSH
<img width="667" height="552" alt="configuration" src="https://github.com/user-attachments/assets/f45c3ca7-5cbf-4726-941a-d70a31d48ecc" />
<img width="840" height="411" alt="configuration ssh" src="https://github.com/user-attachments/assets/2024916b-c817-4b9b-8e9f-eea661d49aa8" />
<img width="1311" height="336" alt="git3" src="https://github.com/user-attachments/assets/a779038e-ac94-49bf-8710-5b35d92555c5" />


### 2. Clonage du dépôt

```bash
git clone git@github.com:Abdelhadi-Mz/ISI-Student-Manager-Groupe04.git
```
<img width="738" height="152" alt="clonage depot" src="https://github.com/user-attachments/assets/f96bcdf0-23ea-437f-a68d-12af960099aa" />


### 3. Accès au projet

```bash
cd ISI-Student-Manager-Groupe04
git status
```
<img width="750" height="367" alt="git6" src="https://github.com/user-attachments/assets/39d48ad8-3ceb-430b-973a-edfc1f3ab17f" />



### 4. Création de la branche CSS

```bash
git switch -c feature/style
```
<img width="742" height="56" alt="git7" src="https://github.com/user-attachments/assets/ac6401bb-fe47-41e4-b1ca-e0ffcc1519f8" />


### 5. Développement du style

Création du fichier `style.css` pour améliorer la présentation graphique de l'application.
<img width="883" height="582" alt="git8" src="https://github.com/user-attachments/assets/71fae661-7fce-4535-bd10-fd2616aaa609" />


### 6. Commit et push

```bash
git add style.css
git push -u origin feature/style
```
<img width="757" height="47" alt="git9" src="https://github.com/user-attachments/assets/8a9503ee-58c5-4c5c-8814-94a38931397e" />

### 7. Pull Request

Création d'une Pull Request de `feature/style` vers `main`, suivie d'une revue de code.
<img width="716" height="170" alt="git10" src="https://github.com/user-attachments/assets/c2b1ceea-3a47-4d09-bb49-426ab1969b39" />

<img width="1352" height="377" alt="git11" src="https://github.com/user-attachments/assets/8bc28826-f993-45f4-8daa-0214c1654a5a" />



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
