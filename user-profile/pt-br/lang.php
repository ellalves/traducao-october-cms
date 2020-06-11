<?php

return [
    'plugin' => [
        'name' => 'Perfil do usuário',
        'description' => 'Adicione campos de perfil de usuário no front-end.',
    ],
    'settings' => [
        'menu_label' => 'Perfil do usuário',
        'menu_description' => 'Gerenciar campos de perfil de usuário.',
        'form_label' => 'Campos de perfil do usuário',
        'form_comment' => 'Use esta seção para adicionar campos extras ao usuário.',
        'form_prompt' => 'Adicionar um novo campo de perfil',
        'field_name_label' => 'Nome',
        'field_name_comment' => 'Usado como o identificador do campo.',
        'field_name_unique' => 'O nome do campo do perfil deve ser exclusivo.',
        'field_type_label' => 'Tipo',
        'field_label_label' => 'Rótulo',
        'field_label_comment' => 'Exibido como o rótulo do campo.',
        'field_tab_label' => 'Guia',
        'field_tab_comment' => 'A guia da conta de usuário à qual o campo pertence (apenas visual).',
        'field_tab_default' => 'Diversos',
        'field_span_label' => 'Extensão',
        'field_comment_label' => 'Comentário',
        'field_required_label' => 'Obrigatório',
        'field_required_comment' => 'O campo deve ser preenchido.',
        'field_span_auto' => 'Automático',
        'field_span_left' => 'Esquerda',
        'field_span_right' => 'Direito',
        'field_span_full' => 'Completo',
    ],
    'conta' => [
        'conta' => 'Conta (com perfil)'
    ],
    'menu_user_widget' => [
        'menu_user_widget' => 'Menu Usuário Widget',
        'menu_user_widget_desc' => 'Widget de login / logout',
        'account_page' => 'Página da conta',
        'account_page_desc' => 'Nome da página da conta de usuários front-end',
        'forgot_password_page' => 'Esqueceu a página da senha',
        'forgot_password_page_desc' => 'Nome da página para redefinir a senha dos usuários front-end',
    ],
    'messages' => [
        'sign_out' => 'Sair',
        'deactivate_account' => 'Desativar conta',
        'deactivate_account_title' => 'Desativar sua conta?',
        'deactivate_account_description' => "Sua conta será desativada e seus dados serão removidos do site. \ nVocê pode reativar sua conta a qualquer momento fazendo login novamente.",
        'deactivate_account_password' => 'Para continuar, digite sua senha:',
        'deactivate_account_button' => 'Confirmar desativação da conta',
        'deactivate_account_regret' => 'Mudei de ideia'
    ]
];
