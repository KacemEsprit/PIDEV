# 🏥 OncoKidsCare - Backend Symfony 6.4

## 🎯 Présentation

**OncoKidsCare** est un backend développé avec **Symfony 6.4** pour gérer un hôpital spécialisé en oncologie pédiatrique.  
Il fournit des **API REST sécurisées** utilisées par une application cliente (ex : JavaFX) et permet de gérer :

- les utilisateurs (patients, médecins, administrateurs, donateurs)
- les médicaments et commandes
- les dons et paiements
- les rendez-vous
- les commentaires communautaires
- les statistiques, les rapports, les sessions médicales, etc.

---

## 🧩 Modules Fonctionnels

### 👶 Patient
- Création de compte, connexion
- Consultation des médicaments
- Panier et passation de commandes
- Génération automatique de **facture PDF**
- Évaluation des commandes
- Accès à un espace communautaire : publications, commentaires, likes, **vocal**
- Prise de **rendez-vous** selon les créneaux des médecins

### 🧑‍⚕️ Médecin
- Connexion sécurisée
- Création de **rapports médicaux**
- Sessions de traitement
- **Évaluation de l’état** de chaque patient

### 💰 Donateur
- Accès à une interface de **paiement par Stripe**
- Don enregistré dans la base de données
- Génération automatique d’un **QR code de reçu**

### 🧑‍💼 Administrateur
- **Création et gestion via Google Sign-up ou formulaire**
- Authentification sécurisée :
  - Google OAuth 2.0
  - Email + mot de passe
  - Mot de passe oublié (via **mail**)
  - **Google reCAPTCHA** pour validation de sécurité
- Tableau de bord :
  - Approbation ou rejet des **dons**
  - Validation des **commentaires**
  - **Confirmation des commandes**
  - Vue globale sur les **statistiques d’avis, évaluations, commandes**

---

## ⚙️ Stack Technique

- **Symfony 6.4**
- **PHP 8.3**
- **MySQL**
- **Doctrine ORM**
- **Twig** (si besoin pour certaines pages d'admin ou mails)
- **Symfony Mailer** (récupération mot de passe)
- **Security + Roles (Patient, Médecin, Admin, Donateur)**
- **JWT ou Authenticator login**
- **API Platform ou Controller personnalisés**
- **Stripe API** (paiement)
- **QR Code Bundle** (reçus, cadeaux)
- **reCAPTCHA Bundle**
- **VichUploader / EasyAdmin (si nécessaire)**

---

## 📁 Arborescence du Projet

