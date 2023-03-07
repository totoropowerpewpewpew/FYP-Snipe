<?php

return [
    'ad'				        => 'Service d\'annuaire',
    'ad_domain'				    => 'Domaine du service d\'annuaire',
    'ad_domain_help'			=> 'C\'est parfois le même que votre domaine d\'e-mail, mais pas toujours.',
    'ad_append_domain_label'    => 'Ajouter un nom de domaine',
    'ad_append_domain'          => 'Ajouter le nom de domaine au champ nom d\'utilisateur',
    'ad_append_domain_help'     => 'L\'utilisateur n\'est pas obligé d\'écrire "username@domain.local", il peut juste taper "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Si vous souhaitez envoyer une copie des courriels d\'association/dissociation qui sont envoyés aux utilisateurs à un compte de messagerie supplémentaire, entrez-le ici. Sinon, laissez ce champ vide.',
    'is_ad'				        => 'C\'est un serveur Active Directory',
    'alerts'                	=> 'Alertes',
    'alert_title'               => 'Mettre à jour les paramètres des alertes',
    'alert_email'				=> 'Envoyer les alertes à',
    'alert_email_help'    => 'Adresses de courriel ou listes de distribution auxquelles vous souhaitez envoyer des alertes, séparées par des virgules',
    'alerts_enabled'			=> 'Alertes activées',
    'alert_interval'			=> 'Seuil d\'expiration des alertes (en jours)',
    'alert_inv_threshold'		=> 'Seuil d\'alerte d\'inventaire',
    'allow_user_skin'           => 'Autoriser un thème utilisateur',
    'allow_user_skin_help_text' => 'Cocher cette case permettra à un utilisateur de remplacer le thème de l\'interface utilisateur par un autre.',
    'asset_ids'					=> 'ID de l\'actif',
    'audit_interval'            => 'Intervalle d\'audit',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Seuil d\'avertissement d\'audit',
    'audit_warning_days_help'   => 'Combien de jours à l\'avance devrions-nous vous avertir lorsque les actifs doivent être vérifiés?',
    'auto_increment_assets'		=> 'Générer des numéros d\'inventaire auto-incrémentés',
    'auto_increment_prefix'		=> 'Préfixe (optionnel)',
    'auto_incrementing_help'    => 'Activez l\'auto-incrémentation des numéros d\'inventaire avant de sélectionner cette option',
    'backups'					=> 'Sauvegardes',
    'backups_help'              => 'Créer, télécharger et restaurer des sauvegardes ',
    'backups_restoring'         => 'Restaurer à partir d\'une sauvegarde',
    'backups_upload'            => 'Téléverser la sauvegarde',
    'backups_path'              => 'Les sauvegardes sont stockées dans <code>:path</code> sur le serveur',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'Tous les utilisateurs existants, y compris vous, seront déconnectés une fois la restauration achevée.',
    'backups_large'             => 'La restauration de fichiers de sauvegardes volumineux peut provoquer une erreur de délai d\'attente (time-out error) et nécessiter d\'être effectuée à l\'aide de la ligne de commande. ',
    'barcode_settings'			=> 'Configuration des codes à barres',
    'confirm_purge'			    => 'Confirmer la purge',
    'confirm_purge_help'		=> 'Entrez le texte « SUPPRIMER » dans la case ci-dessous pour purger vos enregistrements supprimés. Cette action ne peut pas être annulée et supprimera DEFINITIVEMENT tous les éléments et utilisateurs supprimés par le logiciel. (Avant de débuter, faites une sauvegarde juste au cas où.)',
    'custom_css'				=> 'CSS personnalisé',
    'custom_css_help'			=> 'Entrez les codes CSS personnalisé que vous souhaitez utiliser . Ne pas inclure les balises &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL personnalisé de réinitialisation du mot de passe',
    'custom_forgot_pass_url_help'	=> 'Ceci remplace l\'URL de mot de passe intégré oublié sur la page d\'accueil, utile pour rediriger les utilisateurs vers la fonctionnalité de réinitialisation de mot de passe interne ou de serveur LDAP. Cela va désactiver la fonctionnalité du mot de passe oublié au niveau local.',
    'dashboard_message'			=> 'Message du tableau de bord',
    'dashboard_message_help'	=> 'Ce texte apparaît sur le tableau de bord pour toute personne ayant le droit de le voir.',
    'default_currency'  		=> 'Devise par défaut',
    'default_eula_text'			=> 'Licence d\'utilisation par défaut',
    'default_language'			=> 'Langue par défaut',
    'default_eula_help_text'	=> 'Vous pouvez également associer les licences d\'utilisations personnalisés à des catégories spécifiques d\'actifs .',
    'display_asset_name'        => 'Afficher le nom des actifs',
    'display_checkout_date'     => 'Afficher la date d\'association',
    'display_eol'               => 'Afficher la fin de vie dans les tables',
    'display_qr'                => 'Affiche les QR codes',
    'display_alt_barcode'		=> 'Affiche le code-barres 1D',
    'email_logo'                => 'Logo de l\'e-mail',
    'barcode_type'				=> 'Type du code-barres 2D',
    'alt_barcode_type'			=> 'Type du code-barres 1D',
    'email_logo_size'       => 'Les logos carrés dans l\'e-mail rendent mieux. ',
    'enabled'                   => 'Activé',
    'eula_settings'				=> 'Configuration pour les licences d\'utilisation',
    'eula_markdown'				=> 'Cette licence d\'utilisation permet l\'utilisation des <a href="https://help.github.com/articles/github-flavored-markdown/">"Github flavored markdown"</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Les types de fichiers acceptés sont ico, png et gif. Les autres formats d\'image peuvent ne pas fonctionner dans tous les navigateurs.',
    'favicon_size'          => 'Les Favicons doivent être des images carrées de 16x16 pixels.',
    'footer_text'               => 'Texte supplémentaire en pied de page ',
    'footer_text_help'          => 'Ce texte apparaîtra dans le pied de page de droitre. Les liens sont autorisés en utilisant <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Les sauts de ligne, les en-têtes, les images, etc. peuvent entraîner des résultats imprévisibles.',
    'general_settings'			=> 'Configuration générale',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'CLUF par défaut et plus encore',
    'generate_backup'			=> 'Générer une sauvegarde',
    'header_color'              => 'Couleur de l\'en-tête',
    'info'                      => 'Ces paramètres vous permettent de personnaliser certains aspects de votre installation.',
    'label_logo'                => 'Logo du label',
    'label_logo_size'           => 'Les logos, de préférence carrés, sont affichés en haut à droite de chaque étiquette. ',
    'laravel'                   => 'Version de Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'Service d\'annuaire',
    'ldap_client_tls_key'       => 'Clé TLS du client LDAP',
    'ldap_client_tls_cert'      => 'Certificat TLS côté client pour LDAP',
    'ldap_enabled'              => 'LDAP activé',
    'ldap_integration'          => 'Intégration LDAP',
    'ldap_settings'             => 'Paramètres LDAP',
    'ldap_client_tls_cert_help' => 'Le certificat TLS côté client et la clé pour les connexions LDAP ne sont généralement utiles qu\'avec les configurations Google Workspace en mode "LDAP sécurisé". Les deux sont requis.',
     'ldap_client_tls_key'       => 'Clé TLS du client LDAP',
    'ldap_login_test_help'      => 'Entrez un nom d\'utilisateur et mot de passe LDAP valide depuis la base DN que vous avez spécifié ci-dessus afin de tester si votre configuration LDAP est correcte. VOUS DEVEZ D\'ABORD ENREGISTRER VOS PARAMÈTRES LDAP MIS À JOUR.',
    'ldap_login_sync_help'      => 'Ceci vérifie uniquement que LDAP se synchronise correctement. Si votre requête d\'authentification LDAP est incorrecte, les utilisateurs peuvent ne pas pouvoir se connecter. VOUS DEVEZ D\'ABORD ENREGISTRER VOS PARAMÈTRES LDAP MIS À JOUR.',
    'ldap_manager'              => 'Gestionnaire LDAP',
    'ldap_server'               => 'Serveur LDAP',
    'ldap_server_help'          => 'Ca devrait commencer par ldap:// (non crypté ou TLS) ou ldaps:// (SSL)',
    'ldap_server_cert'			=> 'Validation du certificat SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Autorise un certificat SSL invalide',
    'ldap_server_cert_help'		=> 'Sélectionnez cette case à cocher si vous utilisez un certificat SSL auto-signé et voudriez accepter un certificat SSL invalide.',
    'ldap_tls'                  => 'Utilisez TLS',
    'ldap_tls_help'             => 'A cocher seulement si vous utilisez STARTTLS sur votre serveur LDAP. ',
    'ldap_uname'                => 'Nom d\'utilisateur bind LDAP',
    'ldap_dept'                 => 'LDAP Département',
    'ldap_phone'                => 'LDAP Numéro de Téléphone',
    'ldap_jobtitle'             => 'LDAP Intitulé de Poste',
    'ldap_country'              => 'LDAP Pays',
    'ldap_pword'                => 'Mot de passe bind LDAP',
    'ldap_basedn'               => 'Bind de base DN',
    'ldap_filter'               => 'Filtre LDAP',
    'ldap_pw_sync'              => 'Synchronisation du mot de passe LDAP',
    'ldap_pw_sync_help'         => 'Décochez cette case si vous ne souhaitez pas conserver les mots de passe LDAP synchronisés avec les mots de passe locaux. Cette désactivation signifie que vos utilisateurs ne pourront plus se connecter si votre serveur LDAP est injoignable pour une raison quelconque.',
    'ldap_username_field'       => 'Champ nom d\'utilisateur',
    'ldap_lname_field'          => 'Nom de famille',
    'ldap_fname_field'          => 'Prénom LDAP',
    'ldap_auth_filter_query'    => 'Requête d\'authentification LDAP',
    'ldap_version'              => 'Version LDAP',
    'ldap_active_flag'          => 'Signal d\'activation LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Numéro d\'employé LDAP',
    'ldap_email'                => 'E-mail LDAP',
    'ldap_test'                 => 'Tester LDAP',
    'ldap_test_sync'            => 'Tester la synchronisation LDAP',
    'license'                   => 'Licence de logiciel',
    'load_remote_text'          => 'Scripts distants',
    'load_remote_help_text'		=> 'Cette installation Snipe-IT peut charger des scripts depuis le monde extérieur.',
    'login'                     => 'Tentatives de connexion',
    'login_attempt'             => 'Tentative de connexion',
    'login_ip'                  => 'Adresse IP',
    'login_success'             => 'Succès ?',
    'login_user_agent'          => 'User-Agent',
    'login_help'                => 'Liste des tentatives de connexion',
    'login_note'                => 'Note de connexion',
    'login_note_help'           => 'Ajoutez éventuellement quelques phrases sur votre écran de connexion, par exemple pour aider les personnes ayant trouvé un appareil perdu ou volé. Ce champ accepte <a href="https://help.github.com/articles/github-flavored-markdown/">Github aromatisé markdown</a>',
    'login_remote_user_text'    => 'Options de connexion de l\'utilisateur à distance',
    'login_remote_user_enabled_text' => 'Activer la connexion avec l\'en-tête utilisateur distant',
    'login_remote_user_enabled_help' => 'Cette option active l\'authentification via l\'en-tête REMOTE_USER selon l\'interface "Common Gateway Interface" (rfc3875)"',
    'login_common_disabled_text' => 'Désactiver les autres mécanismes d\'authentification',
    'login_common_disabled_help' => 'Cette option désactive les autres mécanismes d\'authentification. N\'activez cette option que si vous êtes sûr que votre login REMOTE_USER fonctionne déjà',
    'login_remote_user_custom_logout_url_text' => 'URL personnalisé de déconnexion',
    'login_remote_user_custom_logout_url_help' => 'Si une URL est spécifiée ici, les utilisateurs seront redirigés vers cette URL après la déconnexion de Snipe-IT. Ceci est utile pour fermer correctement les sessions utilisateur de votre fournisseur d\'authentification.',
    'login_remote_user_header_name_text' => 'En-tête du nom d\'utilisateur personnalisé',
    'login_remote_user_header_name_help' => 'Utiliser l\'en-tête spécifié au lieu de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Utiliser dans les impressions',
    'logo_print_assets_help'    => 'Utiliser la marque dans les listes imprimables des actifs ',
    'full_multiple_companies_support_help_text' => 'Restreindre les utilisateurs (admins compris) assignés à des organisations aux biens de leur propre organisation.',
    'full_multiple_companies_support_text' => 'Support complet des organisations multiples',
    'show_in_model_list'   => 'Afficher dans la liste déroulante des modèles',
    'optional'					=> 'facultatif',
    'per_page'                  => 'Résultats par page',
    'php'                       => 'Version de PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, système, infos',
    'php_overview_help'         => 'Infos système PHP',
    'php_gd_info'               => 'Vous devez installer php-gd afin d\'afficher les QR codes (voir les instructions d\'installation).',
    'php_gd_warning'            => 'Le PHP Image Processing et GD plugin n\'est PAS installé.',
    'pwd_secure_complexity'     => 'Complexité du mot de passe',
    'pwd_secure_complexity_help' => 'Sélectionnez les règles de complexité de mot de passe que vous souhaitez appliquer.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Le mot de passe ne peut pas être identique au prénom, au nom de famille, à l\'adresse électronique ou au nom d\'utilisateur',
    'pwd_secure_complexity_letters' => 'Exiger au moins une lettre',
    'pwd_secure_complexity_numbers' => 'Exiger au moins un chiffre',
    'pwd_secure_complexity_symbols' => 'Exiger au moins un caractère spécial',
    'pwd_secure_complexity_case_diff' => 'Exiger au moins une majuscule et une minuscule',
    'pwd_secure_min'            => 'Mot de passe minimum',
    'pwd_secure_min_help'       => 'La valeur minimale autorisée est de 8',
    'pwd_secure_uncommon'       => 'Empêcher les mots de passe communs',
    'pwd_secure_uncommon_help'  => 'Cela empêchera les utilisateurs d\'utiliser des mots de passe communs parmi les 10 000 premiers mots de passe signalés dans les violations.',
    'qr_help'                   => 'Activer les QR Codes avant de définir ceci',
    'qr_text'                   => 'Texte du QR Code',
    'saml'                      => 'SAML',
    'saml_title'                => 'Mettre à jour les paramètres SAML',
    'saml_help'                 => 'Paramètres SAML',
    'saml_enabled'              => 'SAML activé',
    'saml_integration'          => 'Intégration SAML',
    'saml_sp_entityid'          => 'ID de l\'entité',
    'saml_sp_acs_url'           => 'URL du service ACS (Assertion Consumer Service)',
    'saml_sp_sls_url'           => 'URL du service de déconnexion unique (SLS)',
    'saml_sp_x509cert'          => 'Certificat public',
    'saml_sp_metadata_url'      => 'URL des métadonnées',
    'saml_idp_metadata'         => 'Métadonnées SAML IdP',
    'saml_idp_metadata_help'    => 'Vous pouvez spécifier les métadonnées IdP en utilisant une URL ou un fichier XML.',
    'saml_attr_mapping_username' => 'Mapping d\'attributs - Nom d\'utilisateur',
    'saml_attr_mapping_username_help' => 'NameID sera utilisé si le mapping des attributs n\'est pas spécifié ou est invalide.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Faire de SAML la connexion principale',
    'saml_forcelogin_help'      => 'Vous pouvez utiliser \'/login?nosaml\' pour accéder à la page de connexion normale.',
    'saml_slo_label'            => 'Déconnexion unique SAML',
    'saml_slo'                  => 'Envoyer une requête LogoutRequest à IdP lors de la déconnexion',
    'saml_slo_help'             => 'Cela fera que l\'utilisateur sera d\'abord redirigé vers l\'IdP lors de la déconnexion. Laissez décoché si l\'IdP ne supporte pas correctement SAML SLO.',
    'saml_custom_settings'      => 'Paramètres personnalisés SAML',
    'saml_custom_settings_help' => 'Vous pouvez spécifier des paramètres supplémentaires à la bibliothèque onelogin/php-saml. Utilisez à vos risques et périls.',
    'saml_download'             => 'Télécharger les métadonnées',
    'setting'                   => 'Paramètre',
    'settings'                  => 'Paramètres',
    'show_alerts_in_menu'       => 'Afficher les alertes dans le menu du haut',
    'show_archived_in_list'     => 'Actifs archivés',
    'show_archived_in_list_text'     => 'Afficher les actifs archivés dans la liste "Tous les actifs"',
    'show_assigned_assets'      => 'Afficher les matériels assignés aux matériels',
    'show_assigned_assets_help' => 'Afficher les actifs qui ont été assignés aux autres actifs dans Voir utilisateurs -> Matériels, Voir Utilisateur -> Info -> Imprimer Tous les matériels assignés et présent dans le compte -> Voir les matériels assignés.',
    'show_images_in_email'     => 'Afficher les images dans les courriels',
    'show_images_in_email_help'   => 'Décocher cette case si votre installation de Snipe-IT est derrière un VPN ou un réseau fermé et que les utilisateurs en dehors du réseau ne peuvent pas charger les images servies depuis cette installation dans leurs courriels.',
    'site_name'                 => 'Nom du site',
    'slack'                     => 'Slack',
    'slack_title'               => 'Mettre à jour les paramètres Slack',
    'slack_help'                => 'Paramètres Slack',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Configuration "Slack"',
    'slack_integration_help'    => 'L\'intégration de Slack est optionnelle, cependant le point de terminaison et le canal sont requis si vous souhaitez l\'utiliser. Pour configurer l\'intégration de Slack, vous devez d\'abord <a href=":slack_link" target="_new" rel="noopener">créer un webhook entrant</a> sur votre compte Slack. Cliquez sur le bouton <strong>Tester l\'intégration Slack</strong> pour confirmer que vos paramètres sont corrects avant d\'enregistrer. ',
    'slack_integration_help_button'    => 'Une fois que vous avez enregistré vos informations Slack, un bouton de test apparaîtra.',
    'slack_test_help'           => 'Testez si votre intégration Slack est correctement configurée. VOUS DEVEZ D\'ABORD ENREGISTRER LES PARAMÈTRES DE SLACK MIS À JOUR.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'support_footer'            => 'Support des liens de pied de page ',
    'support_footer_help'       => 'Spécifiez qui voit les liens vers les manuels de support utilisateur Snipe-IT',
    'version_footer'            => 'Version en pied de page ',
    'version_footer_help'       => 'Spécifiez qui peut voir la version de Snipe-IT.',
    'system'                    => 'Information du système',
    'update'                    => 'Mettre à jour les paramètres',
    'value'                     => 'Valeur',
    'brand'                     => 'Marque',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, nom du site',
    'web_brand'                 => 'Type de Web Branding',
    'about_settings_title'      => 'A propos des réglages',
    'about_settings_text'       => 'Ces réglages vous permettent de personnaliser certains aspects de votre installation.',
    'labels_per_page'           => 'Etiquettes par page',
    'label_dimensions'          => 'Dimensions de l\'étiquette (en pouces)',
    'next_auto_tag_base'        => 'Incrément automatique suivant',
    'page_padding'              => 'Marges de la page (en pouces)',
    'privacy_policy_link'       => 'Lien vers la politique de confidentialité',
    'privacy_policy'            => 'Politique de confidentialité',
    'privacy_policy_link_help'  => 'Si une url est incluse ici, un lien vers votre politique de confidentialité sera inclus dans le pied de page de l\'application et dans tous les courriels que le système envoie, conformément au RGPD. ',
    'purge'                     => 'Purger les enregistrements supprimés',
    'purge_deleted'             => 'Purgé les éléments supprimés ',
    'labels_display_bgutter'    => 'Etiquette de la gouttière du bas',
    'labels_display_sgutter'    => 'Etiquette de la gouttière latérale',
    'labels_fontsize'           => 'Taille de caractère de l\'étiquette',
    'labels_pagewidth'          => 'Largeur de l\'étiquette',
    'labels_pageheight'         => 'Hauteur de l\'étiquette',
    'label_gutters'        => 'Espacement de l\'étiquette (en pouces)',
    'page_dimensions'        => 'Dimensions de la page (en pouces)',
    'label_fields'          => 'Champs visibles de l\'étiquette',
    'inches'        => 'pouces',
    'width_w'        => 'l',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Lien vers Snipe-IT dans les e-mails',
    'show_url_in_emails_help_text'      => 'Décochez cette case si vous ne souhaitez pas relier votre installation Snipe-IT à vos pieds de page. Utile si la plupart de vos utilisateurs ne se connectent jamais.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Hauteur maximale de la vignette',
    'thumbnail_max_h_help'   => 'Hauteur maximale en pixels que les vignettes peuvent afficher dans la vue de liste. Min 25, max 500',
    'two_factor'        => 'Authentification en deux étapes',
    'two_factor_secret'        => 'Code à deux facteurs',
    'two_factor_enrollment'        => 'Inscription à deux facteurs',
    'two_factor_enabled_text'        => 'Activer l\'authentification à deux facteurs',
    'two_factor_reset'        => 'Réinitialiser le Secret à deux facteurs',
    'two_factor_reset_help'        => 'Ceci forcera l’utilisateur à inscrire de nouveau leur appareil avec Google Authenticator. Cela peut être utile si leur appareil actuellement inscrit est perdue ou volée. ',
    'two_factor_reset_success'          => 'Dispositif à deux facteurs réinitialisées avec succès',
    'two_factor_reset_error'          => 'Échec de réinitialisation du dispositif à deux facteurs',
    'two_factor_enabled_warning'        => 'L\'activation à deux facteurs si elle n\'est pas actuellement activée vous obligera immédiatement à vous authentifier avec un appareil inscrit Google Auth. Vous aurez la possibilité d\'inscrire votre appareil si aucun n\'est inscrit actuellement.',
    'two_factor_enabled_help'        => 'Cela activera l\'authentification à deux facteurs en utilisant Google Authenticator.',
    'two_factor_optional'        => 'Sélectif (les utilisateurs peuvent activer ou désactiver si permis)',
    'two_factor_required'        => 'Requis pour tous les utilisateurs',
    'two_factor_disabled'        => 'Désactivé',
    'two_factor_enter_code'	=> 'Entre le code à deux facteurs',
    'two_factor_config_complete'	=> 'Soumettre le code',
    'two_factor_enabled_edit_not_allowed' => 'Votre administrateur ne vous permet pas de modifier ce paramètre.',
    'two_factor_enrollment_text'	=> "L’authentification à deux facteurs est nécessaire, mais votre appareil n’a pas encore été inscrit. Ouvrez votre application Google Authenticator et scanner le code QR ci-dessous pour inscrire votre appareil. Une fois que vous avez inscrit votre appareil, saisissez le code ci-dessous",
    'require_accept_signature'      => 'Exiger la signature',
    'require_accept_signature_help_text'      => 'L\'activation de cette fonctionnalité nécessite que les utilisateurs signent physiquement l\'acceptation de cet actif.',
    'left'        => 'gauche',
    'right'        => 'droite',
    'top'        => 'haut',
    'bottom'        => 'bas',
    'vertical'        => 'veritcal',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Numéros de série uniques',
    'unique_serial_help_text'                => 'Cocher cette case forcera une contrainte d\'unicité sur les identifiants d\'actif',
    'zerofill_count'        => 'Longueur des étiquettes de bien, incluant le remplissage de zéros',
    'username_format_help'   => 'Ce paramètre ne sera utilisé par le processus d\'importation que si un nom d\'utilisateur n\'est pas fourni et que nous devons générer un nom d\'utilisateur pour vous.',
    'oauth_title' => 'Paramètres de l\'API OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Paramètres du point de terminaison Oauth',
    'asset_tag_title' => 'Mettre à jour les paramètres de numéro d\'inventaire',
    'barcode_title' => 'Gérer les paramètres des codes-barres',
    'barcodes' => 'Codes-barres',
    'barcodes_help_overview' => 'Paramètres des codes-barres &amp; et codes QR',
    'barcodes_help' => 'Cette opération essaiera de supprimer l\'ensemble des code-barres mis en cache. Cette opération n\'est utile que si les réglages de génération de code-barre ont été changés, ou si l\'URL de votre instance Snipe-IT a été modifiée. Les code-barres seront regénérés au prochain accès.',
    'barcodes_spinner' => 'Tentative de suppression des fichiers...',
    'barcode_delete_cache' => 'Purger le cache de codes-barres',
    'branding_title' => 'Gérer les paramètres de l\'habillage',
    'general_title' => 'Gérer les paramètres généraux',
    'mail_test' => 'Envoyer un message de test',
    'mail_test_help' => 'Cette opération tentera d\'envoyer un courriel de test à :replyto.',
    'filter_by_keyword' => 'Filtrer par mot clé',
    'security' => 'Sécurité',
    'security_title' => 'Gérer les paramètres de sécurité',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Authentification à deux facteurs (2FA), Restrictions de mot de passe',
    'groups_keywords' => 'permissions, permissions de groupe, autorisation',
    'groups_help' => 'Permissions de groupe du compte',
    'localization' => 'Traduction',
    'localization_title' => 'Gérer les paramètres de localisation',
    'localization_keywords' => 'localisation, devise, locale, locale, fuseau horaire, fuseau horaire, international, internationalisation, langue, traduction, traduction',
    'localization_help' => 'Langue, affichage de la date',
    'notifications' => 'Notifications',
    'notifications_help' => 'Alertes par e-mail, paramètres d\'audit',
    'asset_tags_help' => 'Incrémentation et préfixes',
    'labels' => 'Étiquettes',
    'labels_title' => 'Mettre à jour les paramètres d\'étiquetage',
    'labels_help' => 'Taille &amp; paramètres des étiquettes',
    'purge' => 'Purger',
    'purge_keywords' => 'supprimer définitivement',
    'purge_help' => 'Purger les enregistrements supprimés',
    'ldap_extension_warning' => 'Il semble que l\'extension LDAP ne soit pas installée ou activée sur ce serveur. Vous pouvez toujours enregistrer vos paramètres, mais vous devrez activer l\'extension LDAP pour PHP avant que la synchronisation LDAP ne fonctionne.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Numéro d’employé',
    'create_admin_user' => 'Créer un utilisateur ::',
    'create_admin_success' => 'Bravo ! Votre utilisateur administrateur a été ajouté !',
    'create_admin_redirect' => 'Cliquez ici pour vous connecter à votre application !',
    'setup_migrations' => 'Migrations de base de données ::',
    'setup_no_migrations' => 'Il n\'y avait rien à migrer. Vos tables de base de données étaient déjà configurées !',
    'setup_successful_migrations' => 'Vos tables de base de données ont été créées',
    'setup_migration_output' => 'Sortie de la migration :',
    'setup_migration_create_user' => 'Étape suivante : créer un utilisateur',
    'ldap_settings_link' => 'Page des paramètres LDAP',
    'slack_test' => 'Tester l\'intégration de <i class="fab fa-slack"></i>',
];
