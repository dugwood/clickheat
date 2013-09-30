<?php
/**
 * ClickHeat : Fichier de langue : français
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 27/10/2006
**/

/** Fix for Piwik bad behaviour */
if (defined('LANG_USER'))
{
	return true;
}

define('LANG_USER', 'Utilisateur');
define('LANG_PASSWORD', 'Mot de passe');
define('LANG_LOGIN', 'Connexion');
define('LANG_LOGIN_ERROR', 'Connexion impossible, mauvais utilisateur ou mot de passe');
define('LANG_LOGOUT', 'Déconnexion');
define('LANG_UNKNOWN_DIR', 'Impossible de déterminer le répertoire courant, merci de nous contacter');
define('LANG_DAYS', 'L,M,M,J,V,S,D');
define('LANG_RANGE', 'Jour,Semaine,Mois');
define('LANG_MONTHS', '0,Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre');
define('LANG_SITE', 'Site');
define('LANG_GROUP', 'Groupe');
define('LANG_BROWSER', 'Navigateur');
define('LANG_ALL', 'Tous');
define('LANG_UNKNOWN', 'Autres/inconnus');
define('LANG_EXAMPLE_URL', 'Adresse internet associée');
define('LANG_LAYOUT', 'Mise en page du groupe');
define('LANG_LAYOUT_FIXED', 'Contenu/menu fixe');
define('LANG_LAYOUT_LIQUID', 'Contenu/menu, liquide (adaptation à la place disponible)');
define('LANG_LAYOUT_NONE', 'Marge (pas de contenu), liquide');
define('LANG_LAYOUT_0', 'Contenu et menu liquide');
define('LANG_LAYOUT_1', 'Menu gauche fixe, contenu liquide');
define('LANG_LAYOUT_2', 'Contenu centré fixe (marges droite et gauche automatiques)');
define('LANG_LAYOUT_3', 'Contenu fixe collé à gauche (marge de droite automatique)');
define('LANG_LAYOUT_4', 'Menu droit fixe, contenu liquide');
define('LANG_LAYOUT_5', 'Menus gauche et droit fixes, contenu liquide');
define('LANG_LAYOUT_6', 'Contenu fixe collé à droite (marge de gauche automatique)');
define('LANG_LAYOUT_LEFT', 'Largeur fixe de gauche (pixels)');
define('LANG_LAYOUT_CENTER', 'Largeur fixe centrale (pixels)');
define('LANG_LAYOUT_RIGHT', 'Largeur fixe de droite (pixels)');
define('LANG_SCREENSIZE', 'Taille d\'écran');
define('LANG_HEATMAP', 'Carte de chaleur et sa transparence');
define('LANG_LATEST_CHECK', 'Mise à jour');
define('LANG_LATEST_KO', 'Impossible de connaître dynamiquement la dernière version disponible, la vôtre est la %s, la toute dernière lue directement depuis le site Labsmedia ');
define('LANG_LATEST_OK', 'Vous avez la dernière version disponible (%s)');
define('LANG_LATEST_NO', 'Votre version (%s) n\'est pas la toute dernière disponible (%s). Vous pouvez télécharger la nouvelle version en vous rendant sur notre site :');
define('LANG_LOG_MY_CLICKS', 'Enregistrer mes clics ?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Pour éviter de polluer vos statistiques, vous pouvez\nchoisir de ne pas enregistrer vos propres clics\n\nOK = enregistrer mes clics\nAnnuler = ne pas enregistrer mes clics');
define('LANG_JAVASCRIPT', 'Code Javascript à coller sur les pages que vous voulez étudier');
define('LANG_JAVASCRIPT_IMAGE', 'Afficher le logo ClickHeat sur la page étudiée : ');
define('LANG_JAVASCRIPT_SHORT', 'Code court (3 lignes seulement)');
define('LANG_JAVASCRIPT_QUOTA', 'Limite maximum de clics par page et par visiteur, les clics suivants ne seront pas comptabilisés (0 = pas de limite, 3 est un bon compromis)');
define('LANG_JAVASCRIPT_SITE', 'Nom du site (caractères autorisés : A-Z, a-z, 0-9, souligné, tiret, point)');
define('LANG_JAVASCRIPT_GROUP', 'Nom de groupe, pour regrouper les pages similaires pour une analyse simplifiée');
define('LANG_JAVASCRIPT_GROUP0', 'utiliser un mot-clé ');
define('LANG_JAVASCRIPT_GROUP1', 'caractères autorisés : A-Z, a-z, 0-9, souligné, tiret, point');
define('LANG_JAVASCRIPT_GROUP2', 'utiliser le titre de la page (<a href="http://www.labsmedia.fr/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">vivement déconseillé</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'utiliser l\'adresse de la page (<a href="http://www.labsmedia.fr/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">vivement déconseillé</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Copiez et collez le code ci-dessous sur vos pages, juste avant la fin de la page (avant le tag &lt;/body&gt;) :');
define('LANG_JAVASCRIPT_DEBUG', 'Une fois le code copié sur vos pages, n\'oubliez pas de tester si le code marche bien, en appelant votre page avec le paramètre <span class="error">debugclickheat</span>. Par exemple pour http://www.site.com/index.html appelez http://www.site.com/index.html<span class="error">?debugclickheat</span>. Vous devriez alors voir un message vous indiquant l\'état de Clickheat (en anglais). En cas de problème, n\'hésitez pas à nous contacter');
define('LANG_NO_CLICK_BELOW', utf8_decode('Pas de clics enregistrés en-dessous de cette ligne'));
define('LANG_ERROR_GROUP', 'Ce groupe est inconnu. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'Pas d\'enregistrements pour la période choisie (pensez à supprimer les filtres : navigateur, taille d\'écran). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Avez-vous correctement installé le code javascript sur vos pages ?');
define('LANG_ERROR_FILE', 'Impossible d\'ouvrir le fichier de suivi');
define('LANG_ERROR_SCREEN', 'Taille d\'écran non conforme');
define('LANG_ERROR_LOADING', 'Création de l\'image en cours, patience...');
define('LANG_ERROR_FIXED', 'Toutes les largeurs sont fixes, ce qui est impossible. Merci de changer une des largeurs de votre mise en page ci-dessus.');
define('LANG_DEFAULT', 'par défaut ');
define('LANG_CHECKS', 'Vérifications préliminaires');
define('LANG_CHECK_WRITABLE', 'Droits d\'écriture dans le répertoire de configuration');
define('LANG_CHECK_NOT_WRITABLE', 'PHP n\'a pas les droits d\'écriture dans le répertoire de configuration');
define('LANG_CHECK_GD', 'Librairie graphique GD');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() non disponible, impossible de créer des images (de bonne qualité), vérifiez que GD est installé');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() non disponible, impossible de créer des images transparentes (nécessaire pour faire les cartes de température)');
define('LANG_CHECK_GD_PNG', 'imagepng() non disponible, impossible de créer des images au format PNG, désolé');
define('LANG_CHECKS_OK', 'Étape suivante : configuration');
define('LANG_CHECKS_KO', 'Un ou plusieurs tests ont échoué. Corrigez les problèmes et rafraîchissez la page.');
define('LANG_CONFIG', 'Configuration');
define('LANG_CONFIG_HEADER_HEATMAP', 'Rendu des cartes de températures');
define('LANG_CONFIG_HEADER_DISPLAY', 'Présentation générale');
define('LANG_CONFIG_HEADER_SECURITY', 'Sécurité');
define('LANG_CONFIG_HEADER_LOGIN', 'Paramètres de connexion');
define('LANG_CONFIG_LOGPATH', 'Répertoire des fichiers de suivi');
define('LANG_CONFIG_LOGPATH_DIR', 'Le répertoire des fichiers de suivi n\'existe pas. Merci de le créer');
define('LANG_CONFIG_LOGPATH_KO', 'Le répertoire des fichiers de suivi n\'est pas accessible en écriture, merci de lui donner les droits d\'écriture pour l\'utilisateur PHP');
define('LANG_CONFIG_CACHEPATH', 'Répertoire des fichiers temporaires');
define('LANG_CONFIG_CACHEPATH_DIR', 'Le répertoire des fichiers temporaires n\'existe pas. Merci de le créer');
define('LANG_CONFIG_CACHEPATH_KO', 'Le répertoire des fichiers temporaires n\'est pas accessible en écriture, merci de lui donner les droits d\'écriture pour l\'utilisateur PHP');
define('LANG_CONFIG_REFERERS', 'Liste des noms de domaine (séparés par des virgules) autorisés à enregistrer les clics sur ce serveur');
define('LANG_CONFIG_GROUPS', 'Liste des noms de groupe (séparés par des virgules) autorisés à enregistrer les clics sur ce serveur');
define('LANG_CONFIG_FILESIZE', 'Taille maximale (en Ko) d\'un fichier de suivi d\'un groupe sur un jour (1000 clics font environ 25Ko, 0 = pas de limite)');
define('LANG_CONFIG_CHECK', 'Vérifier la configuration');
define('LANG_CONFIG_MEMORY', 'Limite mémoire (valeur par défaut du php.ini : %dMo, limites : de %d à %dMo, mais <a href="http://www.labsmedia.fr/clickheat/performance.html" onclick="window.open(this.href, \'external\');return false">attention aux grandes valeurs</a>)');
define('LANG_CONFIG_MEMORY_KO', 'merci de respecter la fourchette de valeurs');
define('LANG_CONFIG_STEP', 'Groupement des clics par zone de X*X pixels (accélère l\'affichage des cartes de température)');
define('LANG_CONFIG_STEP_KO', 'les zones ne peuvent pas être en deçà de 1x1 pixels');
define('LANG_CONFIG_DOT', 'Taille en pixels des points sur les cartes de température');
define('LANG_CONFIG_DOT_KO', 'la taille du point ne peut être nulle');
define('LANG_CONFIG_PALETTE', 'Si vous voyez des carrés rouges sur les cartes de température cochez cette case');
define('LANG_CONFIG_HEATMAP', 'Afficher la carte de température par défaut (plutôt que la carte des clics)');
define('LANG_CONFIG_FLASHES', 'Masquer les objets &lt;Flash&gt;'); 
define('LANG_CONFIG_IFRAMES', 'Masquer les balises &lt;iframe&gt;'); 
define('LANG_CONFIG_YESTERDAY', 'Afficher les statistiques d\'hier au démarrage (plutôt que celles d\'aujourd\'hui)');
define('LANG_CONFIG_ALPHA', 'Niveau de transparence (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Effacement automatique des statistiques datant de plus de X jours (mettre 0 conserve tous les fichiers, ce qui est vivement déconseillé)');
define('LANG_CONFIG_START', 'Premier jour de la semaine');
define('LANG_CONFIG_START_M', 'Lundi');
define('LANG_CONFIG_START_S', 'Dimanche');
define('LANG_CONFIG_ADMIN_LOGIN', 'Identifiant administrateur');
define('LANG_CONFIG_ADMIN_PASS', 'Mot de passe administrateur (tapez-le 2 fois)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Identifiant visiteur (si vide, compte visiteur inactif)');
define('LANG_CONFIG_VIEWER_PASS', 'Mot de passe visiteur (tapez-le 2 fois)');
define('LANG_CONFIG_LOGIN', 'l\'identifiant doit contenir au moins 4 caractères');
define('LANG_CONFIG_PASS', 'le mot de passe est vide');
define('LANG_CONFIG_MATCH', 'les mots de passe sont différents');
define('LANG_CONFIG_SAVE', 'Sauvegarder la configuration');
define('LANG_CLEANER_RUNNING', 'Nettoyage en cours...');
define('LANG_CLEANER_RUN', 'Nettoyage terminé : %d fichiers et %d répertoires ont été effacés');
define('LANG_CANCEL', 'Annuler');
define('LANG_UPGRADE', 'Mise à jour');
define('LANG_UPGRADE_NEXT', 'Vérifiez votre configuration puis sauvez-la pour finir la mise à jour');
?>