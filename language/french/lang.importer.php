<?php

 /**
 * Solspace - Importer
 *
 * @package		Solspace:Importer
 * @author		Solspace DevTeam
 * @copyright	Copyright (c) 2008-2012, Solspace, Inc.
 * @link		http://solspace.com/docs/addon/c/Importer/
 * @version		2.1.0
 * @filesource 	./system/expressionengine/third_party/importer/language/english/
 */

$lang = $L = array(

/**	----------------------------------------
/**	Required for modules page
/**	----------------------------------------*/

'importer_module_name'						=>
'Importer',

'importer_module_description'				=>
'Importer des entr�es � partir de sources CSV, JSON et XML.',

'importer'									=>
'Importer',

'importer_module_version' =>
"Version",

// --------------------------------------------
//  CP Main Menu
// --------------------------------------------

'importer_preferences' =>
"Pr�f�rences",

'importer_homepage' =>
"Page d'accueil",

'online_documentation' =>
"Documentation en ligne",

'importer_yes' =>
"Oui",

'importer_no' =>
"Non",

// --------------------------------------------
//  Homepage/Imports
// --------------------------------------------

'create_new_importer' =>
"Cr�er un nouveau profil d'importation",

'no_importer_profiles' =>
"Aucun profil d'importation existant",

'saved_imports' =>
"Imports enregistr�s",

'importer_name' =>
"Nom",

'importer_edit' =>
"�diter", /** verb or noun ? */

'importer_datatype' =>
"Type de donn�es",

'importer_cron_urls' =>
"URLs CRON",

'importer_cron' =>
"Cron",

'importer_cron_batch' =>
"Traitement par lots",

'importer_batch_processing_explaination' =>
"Importer a une limite interne fix�e � 100 �l�ments import�s � la fois, et ce afin d'�viter de d�passer les ressources serveur.
Si le nombre d'�l�ments � importer exc�de ce total, le traitement par lots est d�clench� automatiquement.
Afin d'utiliser le traitement par lots avec un travail CRON, vous devez d�finir un deuxi�me Cron afin de traiter les lots.",

'right_click_to_copy' =>
"clique droit pour copier",

'importer_delete' =>
"Supprimer",

'importer_run_profile' =>
"Ex�cuter",

'importer_run_now' =>
"Ex�cuter maintenant",

'importer_profile_name' =>
"Nom de profil",

'importer_instructions' =>
"Instructions",

'importer_instructions_subtext' =>
"Tous les d�tails ou instructions que vous voudriez avoir sous la main au moment de r�aliser des imports avec ce profil.",

'importer_profile_deleted' =>
"Profil Importer supprim�",

'importer_profiles_deleted' =>
"%i% profils Importer supprim�s",

"profile_delete_question" =>
"�tes-vous certain de vouloir supprimer %i% %profils% ?",

"action_can_not_be_undone" =>
"Cette action ne peut pas �tre annul�e.",

'importer_profile_delete_confirm' =>
"Confirmation de suppression de profil Importer",

'manual_upload_no_cron' =>
"T�l�versement manuel, aucun Cron disponible",

'manual_import_form' =>
"Import manuel � partir de",

'importer_continue' =>
"Continuer",

'save_and_continue' =>
"Enregistrer et Continuer",

'save_and_finish' =>
"Enregistrer et Terminer",

'importer_profile' =>
"Profil Importer",

'importer_edit_profile' =>
"�diter le profil Importer",

'importer_new_profile' =>
"Nouveau profil Importer",

'importer_profile_updated' =>
"Profil Importer mis � jour",

'invalid_importer_profile_name' =>
"Le nom de profil Importer soumis est invalide",

'error_duplicate_profile_name' =>
"Erreur : un doublon de nom de profil Importer a �t� soumis",

'success_importer_profile_name_updated' =>
"Le nom et les instructions li�s au profil Importer ont �t� mis � jour avec succ�s",

'success_importer_settings_updated' =>
"ILes param�tres du profil Importer ont �t� mis � jour avec succ�s",

'invalid_importer_profile_id' =>
"ID de profil Importer invalide",

'invalid_importer_profile_datatype' =>
"Le type de donn�es soumis pour ce profil Importer est invalide",

'invalid_datatype_given' =>
"Un type de donn�es invalide a �t� fourni",

'invalid_datatype' =>
"Type de donn�es invalide",

'importer_channel' =>
"Canal d'import",

'importer_channel_subtext' =>
"Le canal dans lequel cette source de donn�es sera import�e.",

'choose_channel' =>
"Choisissez un canal",

'importer_profile_source' =>
"Source de profil Importer",

'import_source' =>
"Source d'import",

'choose_data_source' =>
"Choisissez la source de donn�es",

'importer_data_source' =>
"Source de donn�es",

'importer_data_source_subtext' =>
"Les donn�es destin�es � Importer peuvent �tre r�cup�r�es selon les m�thodes list�es ici. Choisissez-en une et renseignez les d�tails requis. Un essai
sera effectu� pour r�cup�rer le fichier quand vous cliquerez sur Soumettre.",

'importer_data_source_filename' =>
"Fichier local",

'importer_data_source_url' =>
"URL distante",

'importer_data_source_ftp' =>
"Fichier via FTP",

'importer_data_source_sftp' =>
"Fichier via SFTP",

'choose_data_source' =>
"Choisissez la source de donn�es",

'importer_local_filename' =>
"Nom de fichier local",

'importer_local_filename_subtext' =>
"Le chemin d'enregistrement absolu du fichier plac� sur votre serveur.",

'importer_remote_url' =>
"URL distante",

'importer_remote_url_subtext' =>
"L'adresse URL compl�te du fichier. http:// et https:// sont tous les deux support�s.",

'importer_http_auth_username' =>
"Identifiant (nom d'utilisateur) pour l'authentification HTTP",

'importer_http_auth_username_subtext' =>
"Le fichier distant est peut-�tre prot�g� par une authentification HTTP. Note : pour des raisons de s�curit�, l'identifiant et le mot de passe seront encrypt�s AVANT d'�tre stock�s dans la base de donn�es ExpressionEngine.",

'importer_http_auth_password' =>
"Mot de passe authentification HTTP",

'importer_ftp_host' =>
"H�te",

'importer_ftp_username' =>
"Identifiant",

'importer_ftp_password' =>
"Mot de passe",

'importer_ftp_password_subtext' =>
"Note : pour des raisons de s�curit�, l'identifiant et le mot de passe seront encrypt�s AVANT d'�tre stock�s dans la base de donn�es ExpressionEngine.",

'importer_ftp_port' =>
"Port",

'importer_ftp_path' =>
"Chemin sur le serveur distant",

'importer_manual_upload' =>
"T�l�versement manuel",

'importer_data_source_manual_upload' =>
"T�l�verser manuellement le fichier",

'importer_manual_upload' =>
"Fichier t�l�vers� manuellement",

'importer_manual_upload_subtext' =>
"Cette option signifie qu'� chaque fois que vous utiliserez ce profil Importer, vous devrez t�l�verser manuellement un fichier � partir de votre ordinateur local.",

'importer_ftp_test' =>
"Tester la connexion FTP/SFTP",

'ftp_perform_connection_test' =>
"R�aliser un test de connexion",

'importer_ftp_test_subtext' =>
"Une connexion de test va �tre r�alis�e en utilisant AJAX et le fichier sera d�tect� (mais pas t�l�charg�) afin de s'assurer que vos param�tres sont op�rationnels.",

'import_location' =>
"Emplacement d'importation",

// --------------------------------------------
//  Source Form Errors
// --------------------------------------------

'invalid_channel_submitted' =>
"Canal soumis invalide",

'invalid_channel_permissions' =>
"Vous n'avez pas les droits n�cessaires pour poster dans le canal soumis et ne pouvez donc pas y r�aliser un import.",

'invalid_data_source_submitted' =>
"Source de donn�es soumise invalide. Merci de vous assurer que vous avez s�lectionn� une source de donn�es et que vous avez renseign� les champs requis.",

'invalid_filename_fullpath' =>
"Chemin du fichier soumis invalide. Merci de vous assurer que c'est un chemin de serveur absolu.",

'invalid_filename_not_found' =>
"Chemin du fichier soumis invalide. Le fichier n'a pas �t� trouv� sur le serveur.",

'invalid_remote_url_not_found' =>
"URL distante soumise invalide. Une tentative pour r�cup�rer le fichier a �chou�.",

'problem_retreiving_file_data' =>
"Probl�me lors de la r�cup�ration des donn�es du fichier.",

'source_data_contained_invalid_data' =>
"Le fichier source contenait soit aucune donn�e, soit des donn�es invalides.",

'failure_downloading_remote_file' =>
"�chec lors du t�l�chargement du fichier distant � partir du serveur.",

'unable_to_create_unzipping_directory' =>
"Impossible de cr�er un r�pertoire pour d�zipper votre fichier dans le r�pertoire de cache d'ExpressionEngine. Merci de v�rifier vos droits d'�criture sur le dossier concern�.",

'unable_to_create_importer_directory' =>
"Impossible de cr�er un r�pertoire pour stocker les fichiers de donn�es Importer dans le cache d'ExpressionEngine. Merci de v�rifier vos droits d'�criture sur le dossier concern�.",

'error_unable_to_read_data_file' =>
"Erreur : impossible de lire le fichier de donn�es.",

'importer_memory_usage_warning' =>
"Importer a d�termin� que la taille de la source de donn�es est trop importante pour que votre serveur la prenne en charge.",

// --------------------------------------------
//  Settings Form - GLOBAL
// --------------------------------------------

'invalid_data_received' =>
"Les donn�es re�ues de votre source de donn�es n'�taient pas valides et n'ont pas pu �tre lues.",

'invald_content_type_settings' =>
"Param�tres de type de contenu invalides",

'importer_notifications' =>
"Notifications",

'importer_notification_emails' =>
"Courriels",

'importer_notification_emails_subtext' =>
"S�parer les adresses multiples avec des virgules ou des sauts de ligne.",

'importer_notification_cc' =>
"CC",

'importer_notification_cc_subtext' =>
"S�parer les adresses multiples avec des virgules ou des sauts de ligne.",

'importer_notification_subject' =>
"Objet",

'importer_notification_message' =>
"Message",

'importer_notification_message_subtext' =>
"Les variables suivantes sont disponibles :<br />
{author_ids}, {channel_id}, {site_id},<br />
{profile_name}, {content_type}, {datatype},<br />
{emails}, {email_cc},<br />
{import_date}, {import_ip_address}, {import_location},<br />
{last_import_date}, {run_time},<br />
{start_or_end},<br />
{total_inserted}, {total_updated}, {entries_deleted}",

'importer_notification_rules' =>
"R�gles",

'importer_notification_rules_disabled' =>
"Ne pas envoyer de courriel",

'importer_notification_rules_start' =>
"Envoyer un courriel au d�but de l'importation",

'importer_notification_rules_end' =>
"Envoyer un courriel � la fin de l'importation",

'importer_notification_rules_start_end' =>
"Envoyer un courriel au d�but et � la fin de l'importation",

'importer_element' =>
"�l�ment",

'importer_default_value' =>
"Valeur par d�faut",

'importer_modal_save' =>
"Enregistrer",

'save_and_do_import' =>
"Enregistrer et r�aliser l'import",

// --------------------------------------------
//  Import Log
// --------------------------------------------

'import_log' =>
"Fichier de log de l'import",

'import_date' =>
"Date",

'import_details' =>
"D�tails",

'no_imports_logged' =>
"Aucune importation dans le fichier de log",

'importer_delete_logs' =>
"Supprimer les fichiers de log",

"logs_delete_question" =>
"�tes-vous certain de vouloir supprimer %i% fichiers de log?",

"log_delete_question" =>
"�tes-vous certain de vouloir supprimer ce fichier de log ?",

'importer_logs_delete_confirm' =>
"Confirmation de suppression de fichier de log Importer",

'importer_log_deleted' =>
"Fichier de log Importer supprim�",

'importer_logs_deleted' =>
"%i% fichiers de log Importer supprim�s",

// --------------------------------------------
//  AJAX Connection Test
// --------------------------------------------

'error_ajax_request' =>
"Erreur : la requ�te AJAX a �chou�",

'error_importer_ftp_test' =>
"Erreur : le test de connexion FTP/SFTP a �chou�",

'invalid_or_missing_fields' =>
"Champs invalides ou manquants. Merci de vous assurer que tous les champs ont bien �t� renseign�s.",

'ftp_file_does_not_exist' =>
"FTP : le fichier n'existe pas",

'ftp_ssl_not_supported' =>
"Les connexions SSL ne sont pas support�es par votre serveur.",

'ftp_unable_to_connect' =>
"Impossible de cr�er une connexion avec le serveur FTP.",

'ftp_unable_to_login' =>
"Impossible de se connecter au serveur FTP avec les donn�es d'identification soumises.",

'ftp_bad_local_path' =>
"Le chemin local fourni pour t�l�charger le(s) fichier(s) FTP est erron�.",

'ftp_local_path_not_writable' =>
"Le chemin local fourni pour t�l�charger le(s) fichier(s) FTP n'est pas inscriptible.",

'ftp_bad_local_path' =>
"Le chemin local fourni n'est pas accept� par la biblioth�que FTP.",

'ftp_bad_remote_path' =>
"Le chemin distant fourni n'est pas valide.",

'ftp_bad_remote_file' =>
"Le chemin du fichier distant fourni n'est pas valide.",

'ftp_unable_to_download' =>
"Impossible de t�l�charger le fichier � partir de votre serveur FTP.",

'ftp_file_does_not_exist' =>
"Le fichier ne semble pas exister sur votre serveur FTP.",

'error_sftp_connection_failure' =>
"�chec de la connexion au serveur SFTP",

'error_sftp_file_failure' =>
"Impossible de trouver le fichier sur le serveur.",

'success_importer_ftp_test' =>
"Test de connexion r�ussi !",

'connection_test_successful_file_found' =>
"Le test de connexion a fonctionn� et le fichier a �t� trouv� sur le serveur.",

'modal_close_button' =>
"Fermer",

'beginning_connection_test' =>
"D�but du test de connexion",

'connection_test_underway_please_standby' =>
"Votre test de connexion FTP/SFTP est en cours. Merci de patienter, la confirmation pourra prendre jusqu'� 15 secondes.",

'modal_press_esc_to_close' =>
"Appuyer sur la touche ESC/�chap pour fermer la fen�tre.",

'modal_press_esc_to_close_and_discard' =>
"Appuyer sur la touche ESC/�chap pour fermer la fen�tre et abandonner les modifications.",

'additional_data_type_fields' =>
"Champs additionnels de type de donn�es",

// --------------------------------------------
//  Setting Submission Errors - GLOBAL
// --------------------------------------------

'error_invalid_notification_emails' =>
"Erreur : adresses de notification soumises invalides",

'error_invalid_notification_cc' =>
"Erreur : adresses de notification (CC) soumises invalides",

'error_invalid_notification_subject_message_required' =>
"Erreur : si vous envoyer un courriel de notification, un Objet et un Message sont tous deux obligatoires.",

// --------------------------------------------
//  Cron Import
// --------------------------------------------

'successful_import' =>
"Import r�ussi",

'import_was_successfully_completed' =>
"L'import a �t� effectu� dans sa totalit� et sans erreur.",

'failure_of_import' =>
"�chec de l'import",

'importer_invalid_batch' =>
"Lot demand� invalide",

'batch_import_started' =>
"Le processus d'importation en lot a d�but� avec succ�s",

'no_batches_to_process' =>
"Aucun lot � traiter",

// --------------------------------------------
//  Statistics
// --------------------------------------------

'entries_inserted' =>
"Entr�es ins�r�es",

'entries_updated' =>
"Entr�es mises � jour",

'entries_deleted' =>
"Entr�es supprim�es",

'deleted_entries' =>
"Entr�es supprim�es",

'total_entries' =>
"Total des entr�es",

'entry_ids' =>
"IDs des entr�es",

'inserted_entry_ids' =>
"IDs des entr�es ins�r�es",

'updated_entry_ids' =>
"IDs des entr�es mises � jour",

'author_ids' =>
"IDs des auteurs",

'debugging' =>
"D�bogage",

'start_time' =>
"Heure de d�but",

'end_time' =>
"Heure de fin",

'run_time' =>
"Dur�e d'ex�cution",

'site_id' =>
"ID du site",

'number_of_queries' =>
"Nombre de requ�tes",

// -------------------------------------
//	Batch Import
// -------------------------------------

'batch_importer' =>
"Fonction d'import en lot",

'importer_batch_purpose' =>
"Ceci va r�aliser les imports sous forme de lots et vous serez pr�venu une fois l'import termin�.
Cliquer sur 'R�aliser l'Import' pour d�marrer.",

'importer_perform_import' =>
"R�aliser l'Import",

"performing_import_for_batch_" =>
"En cours d'import pour le lot : ",

'importer_percent_completed' =>
"Pourcentage achev�",

'importer_number_of_batches_imported' =>
"Nombre de lots import�s",

'importer_pause' =>
"Pause",

'importer_resume' =>
"Reprendre",

'return_to_importer_homepage' =>
"Vous pouvez d�sormais retourner sur la page d'accueil d'Importer.",

'importer_import_complete' =>
"Import termin�",

'importer_invalid_values' =>
"Valeurs re�ues invalides",

'importer_batch_number_' =>
"Lot n�",

//----------------------------------------
//  Errors
//----------------------------------------

'invalid_request' =>
"Demande invalide",

'importer_module_disabled' =>
"Le module Importer est actuellement d�sactiv�. Merci de vous assurer qu'il est install� et � jour
en vous rendant sur le panneau de contr�le du module situ� dans le Panneau de Contr�le ExpressionEngine",

'disable_module_to_disable_extension' =>
"Pour d�sactiver cette extension, vous devez d�sactiver son <a href='%url%'>module</a> correspondant.",

'enable_module_to_enable_extension' =>
"Pour activer cette extension, vous devez installer son <a href='%url%'>module</a> correspondant.",

'cp_jquery_requred' =>
"L'extension 'jQuery pour le Panneau de Contr�le' doit �tre <a href='%extensions_url%'>activ�e</a> pour utiliser ce module.",

//----------------------------------------
//  Update routine
//----------------------------------------

'update_importer_module' =>
"Mettre � jour le module Importer",

'importer_update_message' =>
"Vous avez r�cemment t�lecharg� une nouvelle version d'Importer, merci de cliquer ici afin d'ex�cuter le script de mise � jour.",

"update_successful" =>
"Le module a �t� mis � jour avec succ�s.",

"update_failure" =>
"Une erreur s'est produite lors de la tentative de mise � jour du module vers la derni�re version.",

'required_field_was_empty' =>
"Un champ obligatoire est rest� vide, merci de revenir en arri�re et de renseigner TOUS les champs.",


// END
''=>''
);
?>