<?php
return [

    /**
     * Shared
     */
    'recently_created' => 'Créé récemment',
    'recently_created_pages' => 'Pages créées récemment',
    'recently_updated_pages' => 'Pages mises à jour récemment',
    'recently_created_chapters' => 'Chapitres créés récemment',
    'recently_created_books' => 'Livres créés récemment',
    'recently_update' => 'Mis à jour récemment',
    'recently_viewed' => 'Vus récemment',
    'recent_activity' => 'Activité récente',
    'create_now' => 'En créer un maintenant',
    'revisions' => 'Révisions',
    'meta_revision' => 'Révision #:revisionCount',
    'meta_created' => 'Créé :timeLength',
    'meta_created_name' => 'Créé :timeLength par :user',
    'meta_updated' => 'Mis à jour :timeLength',
    'meta_updated_name' => 'Mis à jour :timeLength par :user',
    'x_pages' => ':count pages',
    'entity_select' => 'Sélectionner l\'entité',
    'images' => 'Images',
    'my_recent_drafts' => 'Mes brouillons récents',
    'my_recently_viewed' => 'Vus récemment',
    'no_pages_viewed' => 'Vous n\'avez rien visité récemment',
    'no_pages_recently_created' => 'Aucune page créée récemment',
    'no_pages_recently_updated' => 'Aucune page mise à jour récemment',
    'export' => 'Exporter',
    'export_html' => 'Fichiers web',
    'export_pdf' => 'Fichier PDF',
    'export_text' => 'Document texte',

    /**
     * Permissions and restrictions
     */
    'permissions' => 'Permissions',
    'permissions_intro' => 'Une fois activées ces permission prendont la priorité sur tous les sets de permissions pré-existants.',
    'permissions_enable' => 'Activer les permissions personnalisées',
    'permissions_save' => 'Enregistrer les permissions',

    /**
     * Search
     */
    'search_results' => 'Résultats de recherche',
    'search_total_results_found' => ':count résultats trouvés|:count résultats trouvés au total',
    'search_clear' => 'Réinitialiser la recherche',
    'search_no_pages' => 'Aucune page correspondant à cette recherche',
    'search_for_term' => 'recherche pour :term',
    'search_more' => 'Plus de résultats',
    'search_filters' => 'Filtres de recherche',
    'search_content_type' => 'Type de contenu',
    'search_exact_matches' => 'Correspondances exactes',
    'search_tags' => 'Recherche par tags',
    'search_viewed_by_me' => 'Vu par moi',
    'search_not_viewed_by_me' => 'Non vu par moi',
    'search_permissions_set' => 'Ensemble d\'autorisations',
    'search_created_by_me' => 'Créé par moi',
    'search_updated_by_me' => 'Mis à jour par moi',
    'search_updated_before' => 'Mis à jour avant',
    'search_updated_after' => 'Mis à jour après',
    'search_created_before' => 'Créé avant',
    'search_created_after' => 'Créé après',
    'search_set_date' => 'Choisir la date',
    'search_update' => 'Actualiser la recherche',

    /**
     * Books
     */
    'book' => 'Livre',
    'books' => 'Livres',
    'x_books' => ':count livre|:count livres',
    'books_empty' => 'Aucun livre n\'a été créé',
    'books_popular' => 'Livres populaires',
    'books_recent' => 'Livres récents',
    'books_new' => 'Nouveaux livres',
    'books_popular_empty' => 'Les livres les plus populaires apparaîtront ici.',
    'books_new_empty' => 'Les livres les plus récents apparaitront ici.',
    'books_create' => 'Créer un nouveau livre',
    'books_delete' => 'Supprimer un livre',
    'books_delete_named' => 'Supprimer le livre :bookName',
    'books_delete_explain' => 'Ceci va supprimer le livre nommé \':bookName\', tous les chapitres et pages seront supprimés.',
    'books_delete_confirmation' => 'Êtes-vous sûr(e) de vouloir supprimer ce livre ?',
    'books_edit' => 'Modifier le livre',
    'books_edit_named' => 'Modifier le livre :bookName',
    'books_form_book_name' => 'Nom du livre',
    'books_save' => 'Enregistrer le livre',
    'books_permissions' => 'Permissions du livre',
    'books_permissions_updated' => 'Permissions du livre mises à jour',
    'books_empty_contents' => 'Aucune page ou chapitre n\'a été ajouté à ce livre.',
    'books_empty_create_page' => 'Créer une nouvelle page',
    'books_empty_or' => 'ou',
    'books_empty_sort_current_book' => 'Trier les pages du livre',
    'books_empty_add_chapter' => 'Ajouter un chapitre',
    'books_permissions_active' => 'Permissions personnalisées activées',
    'books_search_this' => 'Chercher dans le livre',
    'books_navigation' => 'Navigation dans le livre',
    'books_sort' => 'Trier les contenus du livre',
    'books_sort_named' => 'Trier le livre :bookName',
    'books_sort_show_other' => 'Afficher d\'autres livres',
    'books_sort_save' => 'Enregistrer l\'ordre',

    /**
     * Chapters
     */
    'chapter' => 'Chapitre',
    'chapters' => 'Chapitres',
    'x_chapters' => ':count chapitre|:count chapitres',
    'chapters_popular' => 'Chapitres populaires',
    'chapters_new' => 'Nouveau chapitre',
    'chapters_create' => 'Créer un nouveau chapitre',
    'chapters_delete' => 'Supprimer le chapitre',
    'chapters_delete_named' => 'Supprimer le chapitre :chapterName',
    'chapters_delete_explain' => 'Ceci va supprimer le chapitre \':chapterName\', toutes les pages seront déplacées dans le livre parent.',
    'chapters_delete_confirm' => 'Etes-vous sûr(e) de vouloir supprimer ce chapitre ?',
    'chapters_edit' => 'Modifier le chapitre',
    'chapters_edit_named' => 'Modifier le chapitre :chapterName',
    'chapters_save' => 'Enregistrer le chapitre',
    'chapters_move' => 'Déplacer le chapitre',
    'chapters_move_named' => 'Déplacer le chapitre :chapterName',
    'chapter_move_success' => 'Chapitre déplacé dans :bookName',
    'chapters_permissions' => 'Permissions du chapitre',
    'chapters_empty' => 'Il n\'y a pas de page dans ce chapitre actuellement.',
    'chapters_permissions_active' => 'Permissions du chapitre activées',
    'chapters_permissions_success' => 'Permissions du chapitre mises à jour',
    'chapters_search_this' => 'Rechercher dans ce chapitre',

    /**
     * Pages
     */
    'page' => 'Page',
    'pages' => 'Pages',
    'pages_popular' => 'Pages populaires',
    'pages_new' => 'Nouvelle page',
    'pages_attachments' => 'Fichiers joints',
    'pages_navigation' => 'Navigation des pages',
    'pages_delete' => 'Supprimer la page',
    'pages_delete_named' => 'Supprimer la page :pageName',
    'pages_delete_draft_named' => 'supprimer le brouillon de la page :pageName',
    'pages_delete_draft' => 'Supprimer le brouillon',
    'pages_delete_success' => 'Page supprimée',
    'pages_delete_draft_success' => 'Brouillon supprimé',
    'pages_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer cette page ?',
    'pages_delete_draft_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce brouillon ?',
    'pages_editing_named' => 'Modification de la page :pageName',
    'pages_edit_toggle_header' => 'Afficher/cacher l\'en-tête',
    'pages_edit_save_draft' => 'Enregistrer le brouillon',
    'pages_edit_draft' => 'Modifier le brouillon',
    'pages_editing_draft' => 'Modification du brouillon',
    'pages_editing_page' => 'Modification de la page',
    'pages_edit_draft_save_at' => 'Brouillon sauvé le ',
    'pages_edit_delete_draft' => 'Supprimer le brouillon',
    'pages_edit_discard_draft' => 'Ecarter le brouillon',
    'pages_edit_set_changelog' => 'Remplir le journal des changements',
    'pages_edit_enter_changelog_desc' => 'Entrez une brève description des changements effectués',
    'pages_edit_enter_changelog' => 'Entrer dans le journal des changements',
    'pages_save' => 'Enregistrez la page',
    'pages_title' => 'Titre de la page',
    'pages_name' => 'Nom de la page',
    'pages_md_editor' => 'Editeur',
    'pages_md_preview' => 'Prévisualisation',
    'pages_md_insert_image' => 'Insérer une image',
    'pages_md_insert_link' => 'Insérer un lien',
    'pages_md_insert_drawing' => 'Insérer un dessin',
    'pages_not_in_chapter' => 'La page n\'est pas dans un chapitre',
    'pages_move' => 'Déplacer la page',
    'pages_move_success' => 'Page déplacée à ":parentName"',
    'pages_permissions' => 'Permissions de la page',
    'pages_permissions_success' => 'Permissions de la page mises à jour',
    'pages_revision' => 'Révision',
    'pages_revisions' => 'Révisions de la page',
    'pages_revisions_named' => 'Révisions pour :pageName',
    'pages_revision_named' => 'Révision pour :pageName',
    'pages_revisions_created_by' => 'Créé par',
    'pages_revisions_date' => 'Date de révision',
    'pages_revisions_number' => '#',
    'pages_revisions_changelog' => 'Journal des changements',
    'pages_revisions_changes' => 'Changements',
    'pages_revisions_current' => 'Version courante',
    'pages_revisions_preview' => 'Prévisualisation',
    'pages_revisions_restore' => 'Restaurer',
    'pages_revisions_none' => 'Cette page n\'a aucune révision',
    'pages_copy_link' => 'Copier le lien',
    'pages_permissions_active' => 'Permissions de page actives',
    'pages_initial_revision' => 'Publication initiale',
    'pages_initial_name' => 'Nouvelle page',
    'pages_editing_draft_notification' => 'Vous éditez actuellement un brouillon qui a été sauvé :timeDiff.',
    'pages_draft_edited_notification' => 'La page a été mise à jour depuis votre dernière visite. Vous devriez écarter ce brouillon.',
    'pages_draft_edit_active' => [
        'start_a' => ':count utilisateurs ont commencé à éditer cette page',
        'start_b' => ':userName a commencé à éditer cette page',
        'time_a' => 'depuis la dernière sauvegarde',
        'time_b' => 'dans les :minCount dernières minutes',
        'message' => ':start :time. Attention à ne pas écraser les mises à jour de quelqu\'un d\'autre !',
    ],
    'pages_draft_discarded' => 'Brouillon écarté, la page est dans sa version actuelle.',

    /**
     * Editor sidebar
     */
    'page_tags' => 'Mots-clés de la page',
    'tag' => 'Mot-clé',
    'tags' =>  'Mots-clé',
    'tag_value' => 'Valeur du mot-clé (Optionnel)',
    'tags_explain' => "Ajouter des mot-clés pour catégoriser votre contenu.",
    'tags_add' => 'Ajouter un autre mot-clé',
    'attachments' => 'Fichiers joints',
    'attachments_explain' => 'Ajouter des fichiers ou des liens pour les afficher sur votre page. Ils seront affichés dans la barre latérale',
    'attachments_explain_instant_save' => 'Ces changements sont enregistrés immédiatement.',
    'attachments_items' => 'Fichiers joints',
    'attachments_upload' => 'Uploader un fichier',
    'attachments_link' => 'Attacher un lien',
    'attachments_set_link' => 'Définir un lien',
    'attachments_delete_confirm' => 'Cliquer une seconde fois sur supprimer pour valider la suppression.',
    'attachments_dropzone' => 'Glissez des fichiers ou cliquez ici pour attacher des fichiers',
    'attachments_no_files' => 'Aucun fichier ajouté',
    'attachments_explain_link' => 'Vous pouvez attacher un lien si vous ne souhaitez pas uploader un fichier.',
    'attachments_link_name' => 'Nom du lien',
    'attachment_link' => 'Lien de l\'attachement',
    'attachments_link_url' => 'Lien sur un fichier',
    'attachments_link_url_hint' => 'URL du site ou du fichier',
    'attach' => 'Attacher',
    'attachments_edit_file' => 'Modifier le fichier',
    'attachments_edit_file_name' => 'Nom du fichier',
    'attachments_edit_drop_upload' => 'Glissez un fichier ou cliquer pour mettre à jour le fichier',
    'attachments_order_updated' => 'Ordre des fichiers joints mis à jour',
    'attachments_updated_success' => 'Détails des fichiers joints mis à jour',
    'attachments_deleted' => 'Fichier joint supprimé',
    'attachments_file_uploaded' => 'Fichier ajouté avec succès',
    'attachments_file_updated' => 'Fichier mis à jour avec succès',
    'attachments_link_attached' => 'Lien attaché à la page avec succès',

    /**
     * Profile View
     */
    'profile_user_for_x' => 'Utilisateur depuis :time',
    'profile_created_content' => 'Contenu créé',
    'profile_not_created_pages' => ':userName n\'a pas créé de page',
    'profile_not_created_chapters' => ':userName n\'a pas créé de chapitre',
    'profile_not_created_books' => ':userName n\'a pas créé de livre',

    /**
     * Comments
     */
    'comment' => 'Commentaire',
    'comments' => 'Commentaires',
    'comment_add' => 'Ajouter un commentaire',
    'comment_placeholder' => 'Entrez vos commentaires ici',
    'comment_count' => '{0} Pas de commentaires|{1} 1 Commentaire|[2,*] :count Commentaires',
    'comment_save' => 'Enregistrer le commentaire',
    'comment_saving' => 'Enregistrement du commentaire...',
    'comment_deleting' => 'Suppression du commentaire...',
    'comment_new' => 'Nouveau commentaire',
    'comment_created' => 'commenté :createDiff',
    'comment_updated' => 'Mis à jour :updateDiff par :username',
    'comment_deleted_success' => 'Commentaire supprimé',
    'comment_created_success' => 'Commentaire ajouté',
    'comment_updated_success' => 'Commentaire mis à jour',
    'comment_delete_confirm' => 'Etes-vous sûr de vouloir supprimer ce commentaire?',
    'comment_in_reply_to' => 'En réponse à :commentId',
];
