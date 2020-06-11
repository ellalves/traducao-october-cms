<?php

return [
    'plugin' => [
        'name' => 'Small Extension',
        'description' => 'Extensões para o blog e as páginas do Rainlab',
        'category' => 'Pequenos plugins',
    ],
    'labels' => [
        'wysiwyg_section' => 'Editor WYSIWYG',
        'enable_wysiwyg' => 'Ativar o editor WYSIWYG para o plugin Rainlab.Blog?',
        'enable_wysiwyg_description' => 'Substitua o editor Markdown padrão por Richtext.',
        'enable_wysiwyg_toolbar' => 'Botões da barra de ferramentas do editor personalizado (deixe em branco para o conjunto padrão)',
        'enable_wysiwyg_toolbar_description' => '<p> <small> Aqui você pode alterar os botões da barra de ferramentas do editor. <a href="https://octobercms.com/docs/backend/forms#widget-richeditor" target="_blank"> Veja tipos disponíveis. </a> Ou você pode tentar <a href = "https: //www.froala.com/wysiwyg-editor/examples/custom-buttons "target =" _ blank "> defina seus próprios botões personalizados. </a> </small> </p> ',
        'enable_featured_image' => 'Publicar imagem em destaque do gerenciador de mídia',
        'enable_featured_image_description' => 'Substitua o campo de upload de imagens em destaque original por um selecionável no Gerenciador de mídia. Twig: {{post.custom_fields.featured_image | media}}. ',
        'enable_featured_image_meta' => 'Adicionar título e descrição à imagem',
        'enable_featured_image_meta_description' => 'Twig: Título: {{post.custom_fields.featured_image_title}}, Descrição: {{post.custom_fields.featured_image_alt}}.',
        'enable_menu_notes' => 'Ativar notas do menu',
        'enable_menu_notes_description' => 'Adicione uma nova guia e um campo do Notes aos itens do menu Páginas estáticas.',

        'enable_menu_image' => 'Ativar imagem do menu',
        'enable_menu_image_description' => 'Permite adicionar imagem.',
        'enable_menu_color' => 'Ativar cor do menu',
        'enable_menu_color_description' => 'Permite definir cores.',

        'enable_blog_author' => 'Ativar alteração do autor da postagem',
        'enable_blog_author_description' => 'Se marcado, o menu suspenso com a lista de administradores ativos será adicionado ao formulário de postagem do blog',

        'enable_blog_rainlab_user' => 'Permitir atribuir o usuário Rainlab à postagem do blog',
        'enable_blog_rainlab_user_description' => 'Se marcado, o menu suspenso com a lista de Usuários Rainlab será adicionado ao formulário de postagem do blog. Twig: {{post.custom_fields.rainlab_user}} ',

        'autor' => 'Autor',
        'author_comment' => 'Definir autor desta postagem',
        'author_empty' => 'Não definido',

        'rainlab_user' => 'Usuário',
        'rainlab_user_comment' => 'Vincular usuário a esta postagem',
        'rainlab_user_empty' => 'Nenhum',

        'static_pages_section' => 'Campos extras',

        'hide_content' => 'Ocultar guia Conteúdo',
        'hide_content_description' => 'Oculta a guia Conteúdo ao editar a Página estática. Útil para quem usa campos {variable} e está um pouco confuso com a guia de conteúdo secundário padrão. ',

        'custom_fields_section' => 'Campos personalizados',
        'custom_fields_section_description' => '',

        'custom_fields_hint_title' => 'O que são campos personalizados',
        'custom_fields_hint_line1' => 'Campos personalizados são adicionados à página de edição da postagem do blog na <strong> guia Mais </strong>.',
        'custom_fields_hint_line2' => 'Você pode acessar os valores dos campos personalizados no Twig com, por exemplo. {{post.custom_fields.api_code}}. ',
        'custom_fields_hint_line3' => 'Você pode facilmente <a target="_blank" href="https://octobercms.com/docs/plugin/localization#overriding"> substituir nomes e comentários de campos personalizados </a>.',

        'custom_fields_hint_title2' => 'Limitações',
        'custom_fields_hint_line4' => 'A tradução de etiquetas não está funcionando no momento. Estou procurando uma solução. ',

        'custom_fields_label' => 'Rótulo do campo',

        'custom_fields_api_code' => 'Código da API',
        'custom_fields_api_code_description' => '',

        'enable_custom_fields_api_code' => 'Adicionar campo de código da API',
        'enable_custom_fields_api_code_description' => 'Twig: {{post.custom_fields.api_code}}',

        'custom_fields_string' => 'Texto breve',
        'custom_fields_string_description' => '',
        'enable_custom_fields_string' => 'Adicionar STRING',
        'enable_custom_fields_string_description' => 'Twig: {{post.custom_fields.string}}',

        'custom_fields_text' => 'Richeditor text',
        'custom_fields_text_description' => '',
        'enable_custom_fields_text' => 'Adicionar richeditor TEXT',
        'enable_custom_fields_text_description' => 'Twig: {{post.custom_fields.text}}',

        'custom_fields_repeater' => 'Repetidor',
        'custom_fields_repeater_description' => '',
        'custom_fields_repeater_prompt' => 'Adicionar novo item',
        'enable_custom_fields_repeater' => 'Adicionar REPEATER',
        'enable_custom_fields_repeater_description' => 'Twig: {{post.custom_fields.repeater}}',

        'blog_custom_fields_repeater_title_allow' => 'Mostrar título',
        'blog_custom_fields_repeater_description_allow' => 'Mostrar descrição',
        'blog_custom_fields_repeater_image_allow' => 'Mostrar imagem',
        'blog_custom_fields_repeater_url_allow' => 'Mostrar URL',
        'blog_custom_fields_repeater_text_allow '=>' Mostrar texto ',

        'custom_fields_repeater_items' => [
            'title' => 'Title',
            'description' => 'Descrição',
            'imagem' => 'Imagem',
            'url' => 'URL',
            'text' => 'Texto',
        ],

        'custom_fields_switch' => 'Alternar',
        'custom_fields_switch_description' => '',
        'enable_custom_fields_switch' => 'Adicionar SWITCH',
        'enable_custom_fields_switch_description' => 'Twig: {{post.custom_fields.switch}}',

        'custom_fields_datetime' => 'Data e hora',
        'custom_fields_datetime_description' => '',
        'enable_custom_fields_datetime' => 'Adicionar DATA E HORA',
        'enable_custom_fields_datetime_description' => 'Twig: {{post.custom_fields.datetime}}',

        'custom_fields_image' => 'Imagem',
        'custom_fields_image_description' => '',
        'enable_custom_fields_image' => 'Adicionar imagem',
        'enable_custom_fields_image_description' => 'Twig: {{post.custom_fields.featured_image | media}}',

        'pages_menu_items_hint_title' => 'Aviso',
        'pages_menu_items_hint_line1' => 'Há um erro no plug-in de páginas estáticas que impede que a imagem reapareça após salvar e reabrir o item de menu.',
        'pages_menu_items_hint_line2' => 'Até ser corrigido, você pode usar <a target="_blank" href="https://github.com/rainlab/pages-plugin/pull/286"> versão editada do plugin </a>.' ,

        'custom_fields_featured_image' => 'Imagem em destaque',
        'custom_fields_featured_image_description' => '',

        'custom_fields_featured_image_title' => 'Título da imagem em destaque',
        'custom_fields_featured_image_title_description' => '',
        'custom_fields_featured_image_alt' => 'Descrição da imagem em destaque',
        'custom_fields_featured_image_alt_description' => '',

        'wysiwyg_section' => 'Editor WYSIWYG',
        'media_section' => 'Mídia',
        'settings_section' => 'outras configurações',
        'custom_fields_section' => 'Campos personalizados',
        'menu_section' => 'Itens do menu',
        'static_page_section' => 'Conteúdo da página',
        'server_info_section' => 'Informações do servidor',
        'twig_section' => 'Extensões Twig',
        'twig_functions_allow' => 'Permitir novas funções',
        'twig_functions_allow_description' => 'Adicione novas funções do Twig. Consulte a documentação para informações detalhadas. ',

        'system_extensions_section' => 'Extensões do sistema',
        'add_backend_admin_fields' => 'Adicionar campos de formulário de administração de back-end',
        'add_backend_admin_fields_comment' => 'Isso adicionará campos extras ao formulário do administrador de back-end.',

        'tab_blog' => 'Blog',
        'tab_blog_fields' => 'Campos personalizados do blog',
        'tab_static_pages' => 'Páginas estáticas',
        'tab_content' => 'Conteúdo',
        'tab_media' => 'Mídia',
        'tab_other' => 'Outro',
        'tab_custom_fields' => 'Campos personalizados',
        'tab_custom_fields_repeater' => 'Notas',
        'tab_system' => 'Sistema',
        'tab_twig' => 'Twig',

        'php_info_box' => 'Informações do PHP',

        'tab_components' => 'Componentes',
        'force_login_section' => 'Forçar componente de login',
        'force_backend_login' => 'Permitir login forçado',
        'force_backend_login_comment' => 'Ao marcar isso e colocar o componente [forceLogin] na sua página, layout ou parcial, você pode forçar o visitante a fazer login na área de back-end.',


    ],
    'blog' => [
        'label' => 'Blog',
        'description' => 'Extensões para o Rainlab.Blog.',
    ],
    'static_menu' => [
        'notes' => 'Notes',
    'imagem' => 'Imagem',
    'color' => 'Color',
        'add_note' => 'Adicione uma nota a este item de menu',
        'add_note_comment' => 'Adicione uma nota a este item de menu. Ele estará acessível a partir da página / layout com: {{item.viewBag.note}}. ',
        'add_image' => 'Adicionar uma imagem',
        'add_image_comment' => '',
        'add_color' => 'Adicionar uma cor',
        'add_color_comment' => '',
    ],
    'permissões' => [
        'settings_tab' => 'Pequenas extensões',
        'settings_description' => 'Gerenciar preferências de back-end.',
    ],
    'tabs' => [
        'custom_fields' => 'Mais',
        'custom_fields_repeater' => 'Notas',
    ],
    'backend_admin_fields' => [
        'tab_info' => 'Informações',
        'description' => 'Descrição',
        'ativo' => 'Ativo',
    ],
    'reportwidgets' => [
        'cachecleaner' => [
            'label' => 'Extensões pequenas - Limpador de cache',
            'label_short' => 'Limpador de cache',
            'label_button' => 'Excluir arquivos',
            'thumbs_remove' => 'Excluir miniaturas',
            'thumbs_path' => 'Caminho das miniaturas',
            'thumbs_regex' => 'Expressão regular para encontrar miniaturas',
            'thumbs_error' => 'Caminho ou expressão regular ausente',

            'flash' => [
                'success' => 'O cache foi limpo com sucesso.',
                'error' => 'Houve um erro ao limpar o cache. Para obter mais informações, consulte o log do sistema. ',
            ],
        ],
        'optimizedb' => [
            'label' => 'Small Extensions - otimizar banco de dados',
            'label_short' => 'Otimizar banco de dados',
            'label_button' => 'Otimização da execução',

            'flash' => [
                'success' => 'O banco de dados foi otimizado com sucesso.',
                'error' => 'Ocorreu um erro ao otimizar seu banco de dados. Para obter mais informações, consulte o log do sistema. ',
                'error_unsupported_db' => 'Desculpe, mas seu banco de dados ainda não é suportado!',
            ],
        ],
    ],

    'components' => [

        'force_login' => [

            'name' => 'Forçar login',
            'description' => 'Permitir acesso à página apenas para administradores conectados',

        ],

    ],

];
