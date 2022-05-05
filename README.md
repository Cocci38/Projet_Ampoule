# Projet_Ampoule
Dashboard de gestion des changements d'ampoule du gardien d'immeuble

Un gardien de copropriété s\'occupe de changer régulièrement les ampoules des communs de son immeuble de 11 étages.
Réaliser un Dashboard responsive dans lequel le gardien peut ajouter, modifier ou supprimer chaque changement d\'ampoule.

L\'application de base comportera :

une page qui liste l\'historique des changements d\'ampoules.
une page qui comportera le formulaire permettant d\'ajouter/modifier un changement d\'ampoule.
La suppression d\'un changement d\'ampoule se fera depuis la page qui liste l\'historique des changements d\'ampoules. Une boîte d\'alerte doit s\'afficher prévenant si la personne veut continuer ou annuler l\'action. Une fois la suppression terminée, afficher une alerte de type toasts qui indique que le changement d\'ampoule a bien été supprimé.



Le formulaire d\'ajout / modification doit comporter les champs suivants :

- La date du changement
- L\'étage ( rez-de-chaussée, étage1, étage2, étage3.....étage11)
- La position ( côté gauche, côté droit, fond)
- Le prix de l\'ampoule

Tous les champs du formulaire sont obligatoires et seront testés en HTML et PHP



Les +
Si le temps vous le permet vous pouvez ajouter un ou tous les points ci-dessous :

Une pagination de l\'historique
Une protection d\'accès aux pages par un formulaire de login et un lien de déconnexion


Rappel des étapes
Réaliser un wireframe de vos pages
Installer votre serveur Web
Créer votre base de données
Réaliser la page qui permet d\'ajouter un changement d\'ampoule
Réaliser la page qui liste l\'historique des changements d\'ampoule
Adapter le formulaire d\'ajout pour qu\'il puisse aussi modifier un changement d\'ampoule
Gérer la suppression d\'un changement d\'ampoule
Réaliser le responsive

Projet Ampoule – suite

1-Créer une table ‘user’ contenant au moins les champs :
‘id’, ‘login’, ‘password’, ‘email’, ‘tel portable’
Le mot de passe doit être crypté en base (utiliser les fonctions natives PHP password_hash et password_verify)
2-Ajouter un lien ‘Mot de passe oublié ?’ et la page associée (cf. exemple plus bas). 
3-Ajouter un lien ‘Je n’ai pas de compte’ et la page associée (cf. exemple plus bas).

Page de création de compte :
En javascript, vérifier que les valeurs saisies dans les champs ‘Mot de passe’ et ‘Confirmez le mot de passe’ sont identiques.
4-Créer une table ‘message’ contenant au moins les champs :
‘id’, ‘message’, ‘author_id’, date

5-Modifier la table ‘historique’ et ajouter deux clés étrangères ‘user_id’ et ‘message_id’.
Lors de la validation du changement d’ampoule, ‘user_id’ reçoit l’id de l’utilisateur courant, ‘message_id’ reçoit l’identifiant du message éventuellement saisi par l’utilisateur.

6-Créer un champ de saisie ‘Recherche’. 
L’utilisateur saisi un mot clé et on affiche tous les messages contenant ce mot clé. La recherche se fera en ‘full text’ en utilisant la directive SQL ‘MATCH(…) AGAINST(…)’
