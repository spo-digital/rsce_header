<?php

return array(
  'label' => array(
    'de' => array( 'Kopfzeile' ),
    'en' => array( 'Header' ),
    'ru' => array( 'Шапка сайта')
  ),
  'types' => array('module'),
  'contentCategory' => 'RSCE: Header',
  'beTemplate' => 'be_wildcard',
  'standardFields' => array( 'cssID' ),
  'wrapper' => array(
    'type' => 'none',
  ),
  'fields' => array(

    ### group ###
    'icon_group' => array(
      'label' => array(
        'de' => array( 'Logo ', 'Hier können Sie ein Bild hinzufügen' ),
        'en' => array( 'Logo ', 'You can add an image here' ),
        'ru' => array( 'Логотип', 'Вы можете добавить изображение здесь' ),
      ),
      'inputType' => 'group',
    ),

    ### image ###
    'icon' => array(
      'label' => array(
        'de' => array( 'Logo ', 'Hier können Sie ein Bild hinzufügen' ),
        'en' => array( 'Logo ', 'You can add an image here' ),
        'ru' => array( 'Логотип', 'Вы можете добавить изображение здесь' ),
      ),
      'inputType' => 'fileTree',
      'eval' => array(
        'fieldType' => 'radio',
        'filesOnly' => true,
        'extensions' => 'jpg,jpeg,png,gif,svg,webp',
        'tl_class'=>'clr',
        'mandatory' => true,
      ),
    ),

    ### image alt ###
    'icon_alt' => array(
      'label' => array(
        'de' => array( 'Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben' ),
        'en' => array( 'Alt attributes', 'Here you can enter an alt attribute for the image' ),
        'ru' => array( 'Alt атрибут', 'Здесь вы можете ввести атрибут alt для изображения' ),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
      'mandatory' => true,
    ),

    ### image title ###
    'icon_title' => array(
      'label' => array(
        'de' => array( 'Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
        'en' => array( 'Image title', 'Здесь вы можете ввести название изображения (атрибут title)' ),
        'ru' => array( 'Заголовок изображения', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
      'mandatory' => true,
    ),

    ### group ###
    'module_group' => array(
      'label' => array(
        'de' => array( 'Modul ', 'Hier können Sie die ID-Nummer des Moduls eingeben' ),
        'en' => array( 'Module ', 'Here you can enter the id-number of the module' ),
        'ru' => array( 'Модуль ', 'Здесь вы можете ввести ID номер модуля' ),
      ),
      'inputType' => 'group',
    ),

    'module' => array(
      'label'     => array(
        'de' => array( 'Modul ', 'Hier können Sie die ID-Nummer des Moduls eingeben' ),
        'en' => array( 'Module ', 'Here you can enter the id-number of the module' ),
        'ru' => array( 'Модуль ', 'Здесь вы можете ввести ID номер модуля' ),
      ),
      'inputType' => 'text',
      'eval'      =>  array(
        'mandatory' => true,
        'tl_class' => 'w50 clr'
      ),
    ),

    ### group ###
    'features_group' => array(
      'label' => array(
        'de' => array( 'Eigenschaften ', 'Sie können die Elemente auswählen, die im mobilen Menü angezeigt werden sollen' ),
        'en' => array( 'Features ', 'You can select the items to be displayed in the mobile menu' ),
        'ru' => array( 'Настройки отображения', 'Вы можете выбрать элементы которые должны отображаться в мобильном меню' ),
      ),
      'inputType' => 'group',
    ),


    ### checkbox ###
    'logo_chbx' => array(
      'label' => array(
        'de' => array( 'Logo', 'Logo zum mobilen Menü hinzufügen' ),
        'en' => array( 'Logo', 'Add logo to mobile menu' ),
        'ru' => array( 'Лого', 'Добавить лого в меню' ),
      ),
      'inputType' => 'checkbox',
      'eval' => array(
        'tl_class' => 'w50 clr',
      ),
    ),

    'title_chbx' => array(
      'label' => array(
        'de' => array( 'Titel ', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Title ', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'checkbox',
      'eval' => array(
        'tl_class' => 'w50 clr',
      ),
    ),

    'contacts_chbx' => array(
      'label' => array(
        'de' => array( 'Kontakte ', 'Hier können Sie Kontakte hinzufügen' ),
        'en' => array( 'Contacts ', 'You can add contacts here' ),
        'ru' => array( 'Контакты', 'Вы можете добавить контакты здесь' ),
      ),
      'inputType' => 'checkbox',
      'eval' => array(
        'tl_class' => 'w50 clr',
      ),
    ),

    'sml_chbx' => array(
      'label' => array(
        'de' => array( 'Social Media Kontakte', 'Hier können Sie Kontakte hinzufügen' ),
        'en' => array( 'Social media contacts ', 'You can add contacts here' ),
        'ru' => array( 'Контакты в социальных сетях', 'Вы можете добавить контакты здесь' ),
      ),
      'inputType' => 'checkbox',
      'eval' => array(
        'tl_class' => 'w50 clr',
      ),
    ),


    ### group ###
    'title_group' => array(
      'label' => array(
        'de' => array( 'Überschrift', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'group',
      'dependsOn' => [
        'field' => 'title_chbx',
      ],
    ),

    ### title ###
    'title' => array(
      'label' => array(
        'de' => array( 'Überschrift', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'inputUnit',
      'options' => array('h3', 'h4', 'h5', 'h6'),
      'eval' => array('tl_class' => 'w50 clr'),
      'dependsOn' => [
        'field' => 'title_chbx',
      ],
    ),

    ### group ###
    'contacts_title_group' => array(
      'label' => array(
        'de' => array( 'Überschrift für Kontakte', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading for contacts', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок для контактов', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'group',
      'dependsOn' => [
        'field' => 'contacts_chbx',
      ],
    ),

    ### title ###
    'contacts_title' => array(
      'label' => array(
        'de' => array( 'Überschrift', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
      'mandatory' => false,
      'dependsOn' => [
        'field' => 'contacts_chbx',
      ],
    ),

    'contacts_list' => array(
      'label' => array(
        'de' => array( 'Kontakte ', 'Hier können Sie Kontakte hinzufügen' ),
        'en' => array( 'Contacts ', 'You can add contacts here' ),
        'ru' => array( 'Контакты', 'Вы можете добавить контакты здесь' ),
      ),
      'elementLabel' => array(
        'de' => ' Kontakt %s',
      ),
      'inputType' => 'list',
      'minItems' => 0,
      'maxItems' => 10,

      'fields' => array(
        ### image ###
        'icon' => array(
          'label' => array(
            'de' => array( 'Bild ', 'Hier können Sie ein Bild hinzufügen' ),
            'en' => array( 'Icon ', 'You can add an image here' ),
            'ru' => array( 'Иконка', 'Вы можете добавить изображение здесь' ),
          ),
          'inputType' => 'fileTree',
          'eval' => array(
            'fieldType' => 'radio',
            'filesOnly' => true,
            'extensions' => 'jpg,jpeg,png,gif,svg,webp',
            'tl_class'=>'clr',
            'mandatory' => false,
          ),
        ),

        ### image alt ###
        'icon_alt' => array(
          'label' => array(
            'de' => array( 'Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben' ),
            'en' => array( 'Alt attributes', 'Here you can enter an alt attribute for the image' ),
            'ru' => array( 'Alt атрибут', 'Здесь вы можете ввести атрибут alt для изображения' ),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
          'mandatory' => false,
        ),

        ### image title ###
        'icon_title' => array(
          'label' => array(
            'de' => array( 'Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
            'en' => array( 'Image title', 'Здесь вы можете ввести название изображения (атрибут title)' ),
            'ru' => array( 'Заголовок изображения', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
          'mandatory' => false,
        ),

        ### link ###
        'link' => array(
          'label' => array(
            'Link',
            'Hier können Sie einen link auswählen',
          ),
          'inputType' => 'url',
          'eval' => array(
            'tl_class' => 'w50 clr',
            'mandatory' => true,
          ),
        ),
        ### text ###
        'link_text' => array(
          'label' => array(
            'Link-Text',
            'Hier können Sie einen Text für den Link eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50',
            'mandatory' => true,
          ),
        ),

        ### text ###
        'link_title' => array(
          'label' => array(
            'Link Title',
            'Hier können Sie einen Titel für den Link eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50 clr',
            'mandatory' => true,
          ),
        ),
        ### text ###
        'link_aria_label' => array(
          'label' => array(
            'Aria-Label',
            'Hier können Sie ein Aria-Label für den Link eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50',
            'mandatory' => true,
          ),
        ),
      ),

      'dependsOn' => [
        'field' => 'contacts_chbx',
      ],
    ),

    ### group ###
    'sml_title_group' => array(
      'label' => array(
        'de' => array( 'Überschrift für SML', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading for SML', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок для социальных сетей', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'group',
      'dependsOn' => [
        'field' => 'sml_chbx',
      ],
    ),

    ### title ###
    'sml_title' => array(
      'label' => array(
        'de' => array( 'Überschrift', 'Hier können Sie die Überschrift hinzufügen' ),
        'en' => array( 'Heading', 'Here you can add the heading' ),
        'ru' => array( 'Заголовок', 'Вы можете добавить заголовок' ),
      ),
      'inputType' => 'text',
      'eval' => array('tl_class' => 'w50 clr'),
      'mandatory' => false,
      'dependsOn' => [
        'field' => 'sml_chbx',
      ],
    ),

    'sml_list' => array(
      'label' => array(
        'de' => array( 'Social Media Kontakte', 'Hier können Sie Kontakte hinzufügen' ),
        'en' => array( 'Social Media Contacts', 'You can add contacts here' ),
        'ru' => array( 'Контакты в социальных сетях', 'Вы можете добавить контакты здесь' ),
      ),
      'elementLabel' => array(
        'de' => ' Kontakt %s',
      ),
      'inputType' => 'list',
      'minItems' => 0,
      'maxItems' => 10,

      'fields' => array(
        ### image ###
        'icon' => array(
          'label' => array(
            'de' => array( 'Bild ', 'Hier können Sie ein Bild hinzufügen' ),
            'en' => array( 'Icon ', 'You can add an image here' ),
            'ru' => array( 'Иконка', 'Вы можете добавить изображение здесь' ),
          ),
          'inputType' => 'fileTree',
          'eval' => array(
            'fieldType' => 'radio',
            'filesOnly' => true,
            'extensions' => 'jpg,jpeg,png,gif,svg,webp',
            'tl_class'=>'clr',
            'mandatory' => true,
          ),
        ),

        ### image alt ###
        'icon_alt' => array(
          'label' => array(
            'de' => array( 'Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben' ),
            'en' => array( 'Alt attributes', 'Here you can enter an alt attribute for the image' ),
            'ru' => array( 'Alt атрибут', 'Здесь вы можете ввести атрибут alt для изображения' ),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
          'mandatory' => true,
        ),

        ### image title ###
        'icon_title' => array(
          'label' => array(
            'de' => array( 'Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
            'en' => array( 'Image title', 'Здесь вы можете ввести название изображения (атрибут title)' ),
            'ru' => array( 'Заголовок изображения', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)' ),
          ),
          'inputType' => 'text',
          'eval' => array('tl_class' => 'w50 clr'),
          'mandatory' => true,
        ),

        ### link ###
        'link' => array(
          'label' => array(
            'Link',
            'Hier können Sie einen link auswählen',
          ),
          'inputType' => 'url',
          'eval' => array(
            'tl_class' => 'w50 clr',
            'mandatory' => true,
          ),
        ),

        ### text ###
        'link_title' => array(
          'label' => array(
            'Link Title',
            'Hier können Sie einen Titel für den Link eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50 clr',
            'mandatory' => true,
          ),
        ),
        ### text ###
        'link_aria_label' => array(
          'label' => array(
            'Aria-Label',
            'Hier können Sie ein Aria-Label für den Link eingeben',
          ),
          'inputType' => 'text',
          'eval' => array(
            'tl_class' => 'w50',
            'mandatory' => true,
          ),
        ),
      ),

      'dependsOn' => [
        'field' => 'sml_chbx',
      ],
    ),

    ### group ###
    'hamburger_group' => array(
      'label' => array(
        'de' => array( 'Hamburger-Icon', 'Hier können Sie die entsprechende Button-Anzeige auswählen, um das mobile Menü zu öffnen' ),
        'en' => array( 'Hamburger icon', 'Here you can select the corresponding button display to open the mobile menu' ),
        'ru' => array( 'Hamburger иконка', 'Здесь вы можете выбрать соответствующую кнопку, чтобы открыть мобильное меню' ),
      ),
      'inputType' => 'group',
    ),

    ### select ###
    'hamburger' => array(
      'label' => array(
        'de' => array( 'Hamburger-Icon', 'Hier können Sie die entsprechende Button-Anzeige auswählen, um das mobile Menü zu öffnen' ),
        'en' => array( 'Hamburger icon', 'Here you can select the corresponding button display to open the mobile menu' ),
        'ru' => array( 'Hamburger иконка', 'Здесь вы можете выбрать соответствующую кнопку, чтобы открыть мобильное меню' ),
      ),
      'inputType' => 'select',
      'default' => 'hamburger--collapse',
      'options' => array(
        'arrow' => 'arrow',
        'arrowalt' => 'arrowalt',
        'arrowturn' => 'arrowturn',
        'collapse' => 'collapse',
        'elastic' => 'elastic',
        'minus' => 'minus',
        'slider' => 'slider',
        'spin' => 'spin',
        'squeeze' => 'squeeze',
        'vortex' => 'vortex',
      ),
      'eval' => array('tl_class' => 'w50'),
    ),

    ### colorpicker ###
    'colorpicker' => array(
      'label' => array(
        'de' => array( 'Farbe des Symbols', 'Die Farbe ist frei wählbar oder es kann HEX-Farbe ohne # eingegeben werden' ),
        'en' => array( 'Colour of the icon', 'The colour can be freely selected or HEX colour without # can be entered' ),
        'ru' => array( 'Цвет иконки', 'Цвет может быть выбран произвольно или может быть введен HEX-цвет без #' ),
      ),
      'inputType' => 'text',
      'eval' => array(
        'colorpicker' => true,
        'tl_class' => 'wizard w50 clr',
      ),
    ),
  ),
);