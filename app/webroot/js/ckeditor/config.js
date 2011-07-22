/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/


CKEDITOR.editorConfig = function( config )


{
    // Define changes to default configuration here. For example:
    config.language = 'ja';//日本語表記

    config.uiColor = '#AAC6EF';//ツールバーのカラー。

    config.enterMode = CKEDITOR.ENTER_BR;//改行タグを<p>タグから<br />タグに変更

    config.skin = 'office2003';//スキンを変更。'kama'、'office2003'、'v2' の3つから選択。


    config.toolbar =//ツールバーのボタン。不要なものは以下から削除。

    [
      ['Source','ShowBlocks','-','Save','NewPage','Preview','-','Templates'],['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print','SpellChecker'],['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField']
      ,'/'
      ,['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Link','Unlink','Anchor'],['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak']
      ,'/'
      ,['Styles','Format','Font','FontSize'],['TextColor','BGColor']

    ];
/*
    [
      
      ['Image','Table','HorizontalRule','SpecialChar','Source','-','Cut','Copy','Paste','PasteText','PasteFromWord','Undo','Redo','-','ImageButton','Link','Unlink']
      ,'/'
      ,['Bold','Italic','Underline','Strike','-','Subscript','Superscript','NumberedList','BulletedList','-','Outdent','Indent','Blockquote','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']
      ,'/'
      ,['Styles','Format','Font','FontSize'],['TextColor','BGColor']

    ];*/

};

