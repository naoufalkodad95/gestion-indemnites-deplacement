# Système d'application web pour la gestion de l'état des indemnités de déplacement

Projet réalisé dans le cadre d'un stage (du 20/02/2023 au 18/03/2023) au sein de l'Office Régional de Mise en Valeur Agricole de la Moulouya (ORMVAM).

Cette application web a pour objectif principal d'informatiser, d'automatiser et de fiabiliser le processus de gestion et de validation des indemnités de déplacement pour les employés de l'office.

## ✨ Fonctionnalités principales

Voici les fonctionnalités clés de l'application :

* Authentification sécurisée :Espaces distincts pour les employés, les chefs de service (validateurs) et les administrateurs.
* Gestion des Déplacements :
    * Les employés peuvent créer, modifier et soumettre leurs fiches de déplacement.
    * Calcul automatique des indemnités basé sur les règles de l'office.
* Workflow de Validation :
    * Un processus de validation à plusieurs niveaux (ex: validation par le chef de service, puis par le service financier).
    * Notifications par email lors des changements de statut.
* Suivi en temps réel :Les employés peuvent consulter l'état d'avancement de leurs demandes (En attente, Validée, Rejetée, Payée).
* Tableau de bord Administrateur :
    * Gestion des utilisateurs (employés, validateurs).
    * Gestion des services et des barèmes d'indemnité.
    * Statistiques et génération de rapports (ex: dépenses mensuelles).

*(Pensez à adapter cette liste pour qu'elle corresponde exactement à ce que fait VOTRE application)

| Interface | Capture |
|------------|----------|
| 🏠 Page d’accueil | ![Page d’accueil](https://github.com/user-attachments/assets/9a89b469-a14e-43c7-a0d3-889105b24ff9) |
| 🔑 Page de connexion | ![Page de connexion](https://github.com/user-attachments/assets/27b30c71-b5b5-48a0-be6d-333676298bbb) |
| 📊 Tableau de bord | ![Tableau de bord](https://github.com/user-attachments/assets/73852597-8cb7-44dd-bae8-4f84e447f0f2) |
| 📝 Formulaire de déplacement | ![Formulaire](https://github.com/user-attachments/assets/cc0a6fa6-0975-45fa-a558-f984e813fbb7) |
| 🔍 Détails d’un déplacement | ![Show](https://github.com/user-attachments/assets/eac19e42-adc3-44eb-b376-e7eaad8f0235) |


## 💻 Technologies utilisées

* Framework Backend : PHP / Laravel
* Base de données : MySQL
* Frontend : HTML5, CSS3, JavaScript
* Framework CSS :Bootstrap 5

## 🚀 Installation et Lancement (en local)


1.  **Cloner le dépôt :**
    ```bash
    git clone [https://github.com/naoufalkodad95/gestion-indemnites-deplacement.git](https://github.com/naoufalkodad95/gestion-indemnites-deplacement.git)
    cd gestion-indemnites-deplacement
    ```

2.  **Installer les dépendances (backend) :**
    ```bash
    composer install
    ```

3.  **Configurer l'environnement :**
    * Copiez le fichier `.env.example` et renommez-le en `.env`.
    * Configurez vos identifiants de base de données (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Lancer les migrations de la base de données :**
    ```bash
    php artisan migrate
    ```

5.  **(Optionnel) Remplir la base de données avec des données de test :**
    ```bash
    php artisan db:seed
    ```

6.  **Démarrer le serveur local :**
    ```bash
    php artisan serve
    ```

7.  Ouvrez votre navigateur et allez sur `http://127.0.0.1:8000`.

## 👥 Auteurs et Encadrement

Ce projet a été réalisé par :
* **Mr. Kanba Bilal**
* **Mr. Kodad Naoufal**

Sous l'encadrement de :
* Mr. Redouane Yakoubi
* Mr. Guerrid El Mehdi
* Mr. Mohamed Hajji
* Mr. Mouad Dichri

Un grand merci à toute l'équipe de l'ORMVAM pour cette opportunité.
