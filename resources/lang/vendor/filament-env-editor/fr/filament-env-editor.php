<?php

return [
    'navigation' => [
        'group' => 'Système',
        'label' => 'Éditeur .Env',
    ],

    'page' => [
        'title' => 'Éditeur .Env',
    ],
    'tabs' => [
        'current-env' => [
            'title' => '.env Actuel',
        ],
        'backups' => [
            'title' => 'Sauvegardes',
        ],
    ],
    'actions' => [
        'add' => [
            'title' => 'Ajouter une nouvelle entrée',
            'modalHeading' => 'Ajouter une nouvelle entrée',
            'success' => [
                'title' => 'La clé ":Name" a été ajoutée avec succès',
            ],
            'form' => [
                'fields' => [
                    'key' => 'clé',
                    'value' => 'valeur',
                    'index' => 'Insérer après une clé existante (optionnel)',
                ],
                'helpText' => [
                    'index' => 'Si vous souhaitez insérer cette nouvelle entrée après une clé existante, vous pouvez en choisir une dans la liste.',
                ],
            ],
        ],
        'edit' => [
            'tooltip' => 'Modifier l\'entrée ":name"',
            'modal' => [
                'text' => 'Modifier l\'entrée',
            ],
        ],
        'delete' => [
            'tooltip' => 'Supprimer l\'entrée ":name"',
            'confirm' => [
                'title' => 'Vous êtes sur le point de supprimer définitivement ":name". Êtes-vous sûr de vouloir continuer ?',
            ],
        ],
        'clear-cache' => [
            'title' => 'Vider les caches',
            'tooltip' => 'Parfois, Laravel met en cache les variables ENV, vous devez donc vider tous les caches ("artisan optimize:clear") pour relire les modifications du fichier .env.',
        ],

        'backup' => [
            'title' => 'Créer une nouvelle sauvegarde',
            'success' => [
                'title' => 'La sauvegarde a été créée avec succès',
            ],
        ],
        'download' => [
            'title' => 'Télécharger le fichier .env actuel',
            'tooltip' => 'Télécharger le fichier de sauvegarde ":name"',
        ],
        'upload-backup' => [
            'title' => 'Téléverser un fichier de sauvegarde',
        ],
        'show-content' => [
            'modalHeading' => 'Contenu brut de la sauvegarde ":name"',
            'tooltip' => 'Afficher le contenu brut',
        ],
        'restore-backup' => [
            'confirm' => [
                'title' => 'Vous êtes sur le point de restaurer ":name" à la place du fichier ".env" actuel. Veuillez confirmer votre choix.',
            ],
            'modalSubmit' => 'Restaurer',
            'tooltip' => 'Restaurer ":name" en tant que fichier ENV actuel',
        ],
        'delete-backup' => [
            'tooltip' => 'Supprimer le fichier de sauvegarde ":name"',
            'confirm' => [
                'title' => 'Vous êtes sur le point de supprimer définitivement le fichier de sauvegarde ":name". Êtes-vous sûr de vouloir continuer ?',
            ],
        ],
    ],
];
