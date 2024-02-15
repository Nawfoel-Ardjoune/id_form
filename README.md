# id_form
Exercice de création de formulaire sécurisé.

# La structure
J'ai un dossier pour la vérification.php et la base de données avec un identifiant test: (Nawfoel) et un mot de passe test: (Test).

J'ai 2 fichier HTML: 
	1.index pour la page principale qui contient le formulaire.
	2.singup pour une future page de création de compte.

chaque page à un dossier image, un dossier script et un dossier style.

# Les Fonctions
J'ai une fonction reset qui emet des alarme si les champs sont vides ou les vide si il y à quelque chose dedans.

Une fonction pour afficher le mot de passe quand on coche la case prévu à cet effet. 

Une fonction de vérification des champs pour savoir si il y a des caractères interdit (que j'utiliserai plus tard).

Une fonction send(event) fait pour le submit du formulaire qui est sensé controler le formulaire et l'envoyer à ma base de données via la verification.php puis en fonction de la réponse afficher un massage d'erreur ou de validation. (cette partie de fonctionne pas encore). 

# Les Problèmes 
J'ai des erreurs liée à l'acces à mon fichier php apparement pour des raisons de sécurité.

