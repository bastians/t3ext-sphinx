<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sphinx".
 *
 * Auto generated 09-08-2013 19:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Sphinx Python Documentation Generator and Viewer',
	'description' => 'One-click install Sphinx generator for your TYPO3 website. This extension builds Sphinx/reStructuredText documents (format of official TYPO3 manuals), renders extension manuals as HTML/JSON/PDF and provides an integrated editor for your own extension manuals and documents.',
	'category' => 'service',
	'author' => 'Xavier Perseguers (Causal)',
	'author_company' => 'Causal Sàrl',
	'author_email' => 'xavier@causal.ch',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.1.1-dev',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.3-5.4.99',
			'typo3' => '6.0.0-6.1.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'restdoc' => '1.3.0-0.0.0',
		),
	),
	'_md5_values_when_last_written' => 'a:240:{s:9:"ChangeLog";s:4:"b518";s:20:"class.ext_update.php";s:4:"3128";s:21:"ext_conf_template.txt";s:4:"9a00";s:12:"ext_icon.gif";s:4:"406f";s:17:"ext_localconf.php";s:4:"9a9e";s:14:"ext_tables.php";s:4:"9d29";s:47:"Classes/Controller/AbstractActionController.php";s:4:"7b9e";s:46:"Classes/Controller/DocumentationController.php";s:4:"75cf";s:50:"Classes/Controller/InteractiveViewerController.php";s:4:"4dfe";s:43:"Classes/Controller/RestEditorController.php";s:4:"f990";s:32:"Classes/Controller/mod1/conf.php";s:4:"3255";s:33:"Classes/Controller/mod1/index.php";s:4:"e8b1";s:38:"Classes/Domain/Model/Documentation.php";s:4:"3a82";s:34:"Classes/Domain/Model/Extension.php";s:4:"9ea5";s:32:"Classes/Domain/Model/Project.php";s:4:"e08e";s:49:"Classes/Domain/Repository/ExtensionRepository.php";s:4:"54e4";s:47:"Classes/Domain/Repository/ProjectRepository.php";s:4:"eda1";s:28:"Classes/EM/Configuration.php";s:4:"7e25";s:31:"Classes/Slots/CustomProject.php";s:4:"d462";s:37:"Classes/Slots/SphinxDocumentation.php";s:4:"13ae";s:33:"Classes/Utility/Configuration.php";s:4:"db99";s:34:"Classes/Utility/GeneralUtility.php";s:4:"6f60";s:39:"Classes/Utility/OpenOfficeConverter.php";s:4:"8220";s:25:"Classes/Utility/Setup.php";s:4:"fab4";s:33:"Classes/Utility/SphinxBuilder.php";s:4:"6cb4";s:36:"Classes/Utility/SphinxQuickstart.php";s:4:"c0d3";s:38:"Classes/ViewHelpers/FormViewHelper.php";s:4:"1030";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"aab8";s:50:"Classes/ViewHelpers/IncludeJs/JQueryViewHelper.php";s:4:"75f0";s:45:"Classes/ViewHelpers/Link/ActionViewHelper.php";s:4:"a22f";s:26:"Documentation/Includes.txt";s:4:"3b14";s:23:"Documentation/Index.rst";s:4:"66c9";s:26:"Documentation/Settings.yml";s:4:"afbf";s:38:"Documentation/Administration/Index.rst";s:4:"6e4d";s:59:"Documentation/Administration/InstallingExtension/Images.txt";s:4:"6103";s:58:"Documentation/Administration/InstallingExtension/Index.rst";s:4:"8bcf";s:52:"Documentation/Administration/RenderingPdf/Images.txt";s:4:"dfe0";s:51:"Documentation/Administration/RenderingPdf/Index.rst";s:4:"8c12";s:66:"Documentation/Administration/RenderingPdf/InstallingLaTeXLinux.rst";s:4:"caea";s:68:"Documentation/Administration/RenderingPdf/InstallingLaTeXWindows.rst";s:4:"1374";s:65:"Documentation/Administration/RenderingPdf/InstallingShareFont.rst";s:4:"119e";s:61:"Documentation/Administration/UsingSphinxCommandLine/Index.rst";s:4:"dda4";s:52:"Documentation/Administration/WindowsSetup/Images.txt";s:4:"d651";s:51:"Documentation/Administration/WindowsSetup/Index.rst";s:4:"b355";s:33:"Documentation/ChangeLog/Index.rst";s:4:"1f0a";s:35:"Documentation/Development/Index.rst";s:4:"fa4b";s:48:"Documentation/Development/SignalSlots/Images.txt";s:4:"f68c";s:72:"Documentation/Development/SignalSlots/RegisteringCustomDocumentation.rst";s:4:"53cf";s:41:"Documentation/Images/build_button_pdf.png";s:4:"c7a0";s:38:"Documentation/Images/build_buttons.png";s:4:"7549";s:33:"Documentation/Images/checkbox.png";s:4:"f398";s:43:"Documentation/Images/convert-openoffice.png";s:4:"8809";s:45:"Documentation/Images/custom_documentation.png";s:4:"02b1";s:37:"Documentation/Images/edit_chapter.png";s:4:"3647";s:37:"Documentation/Images/em_configure.png";s:4:"5713";s:34:"Documentation/Images/em_update.png";s:4:"d682";s:50:"Documentation/Images/environment_check_windows.png";s:4:"8017";s:46:"Documentation/Images/environment_variables.png";s:4:"df2d";s:38:"Documentation/Images/import_sphinx.png";s:4:"0db8";s:41:"Documentation/Images/kickstart-sphinx.png";s:4:"2dbe";s:34:"Documentation/Images/kickstart.png";s:4:"4bf8";s:35:"Documentation/Images/LaTeX_logo.png";s:4:"aa3b";s:41:"Documentation/Images/libarchive_setup.png";s:4:"4697";s:40:"Documentation/Images/miktex_onthefly.png";s:4:"1e3c";s:37:"Documentation/Images/miktex_setup.png";s:4:"a7ee";s:38:"Documentation/Images/mod1_overview.png";s:4:"53bc";s:36:"Documentation/Images/msvcr100dll.png";s:4:"046b";s:34:"Documentation/Images/pdf_latex.png";s:4:"8020";s:36:"Documentation/Images/pdf_rst2pdf.png";s:4:"9f26";s:43:"Documentation/Images/project_properties.png";s:4:"e55c";s:39:"Documentation/Images/project_wizard.png";s:4:"ff70";s:48:"Documentation/Images/project_wizard_overview.png";s:4:"cec4";s:37:"Documentation/Images/python_setup.png";s:4:"d207";s:35:"Documentation/Images/render_pdf.png";s:4:"1e82";s:37:"Documentation/Images/save_compile.png";s:4:"efe1";s:37:"Documentation/Images/section_help.png";s:4:"c54d";s:35:"Documentation/Images/share_font.png";s:4:"18cf";s:39:"Documentation/Images/sphinx_version.png";s:4:"84ac";s:41:"Documentation/Images/system_variables.png";s:4:"8c9f";s:36:"Documentation/Images/unzip_setup.png";s:4:"2208";s:38:"Documentation/Images/update_script.png";s:4:"d46c";s:31:"Documentation/Images/viewer.png";s:4:"efe1";s:48:"Documentation/Images/viewer_choose_extension.png";s:4:"6272";s:37:"Documentation/Introduction/Images.txt";s:4:"6fe6";s:36:"Documentation/Introduction/Index.rst";s:4:"34eb";s:37:"Documentation/KnownProblems/Index.rst";s:4:"107d";s:42:"Documentation/Localization.fr_FR/Index.rst";s:4:"73d7";s:45:"Documentation/Localization.fr_FR/Settings.yml";s:4:"c706";s:57:"Documentation/Localization.fr_FR/Administration/Index.rst";s:4:"6b02";s:78:"Documentation/Localization.fr_FR/Administration/InstallingExtension/Images.txt";s:4:"2291";s:77:"Documentation/Localization.fr_FR/Administration/InstallingExtension/Index.rst";s:4:"0be7";s:71:"Documentation/Localization.fr_FR/Administration/RenderingPdf/Images.txt";s:4:"e7e0";s:70:"Documentation/Localization.fr_FR/Administration/RenderingPdf/Index.rst";s:4:"93cf";s:85:"Documentation/Localization.fr_FR/Administration/RenderingPdf/InstallingLaTeXLinux.rst";s:4:"df88";s:87:"Documentation/Localization.fr_FR/Administration/RenderingPdf/InstallingLaTeXWindows.rst";s:4:"3a02";s:84:"Documentation/Localization.fr_FR/Administration/RenderingPdf/InstallingShareFont.rst";s:4:"7fc2";s:80:"Documentation/Localization.fr_FR/Administration/UsingSphinxCommandLine/Index.rst";s:4:"680b";s:71:"Documentation/Localization.fr_FR/Administration/WindowsSetup/Images.txt";s:4:"e58a";s:70:"Documentation/Localization.fr_FR/Administration/WindowsSetup/Index.rst";s:4:"804a";s:52:"Documentation/Localization.fr_FR/ChangeLog/Index.rst";s:4:"daf7";s:54:"Documentation/Localization.fr_FR/Development/Index.rst";s:4:"2ab3";s:67:"Documentation/Localization.fr_FR/Development/SignalSlots/Images.txt";s:4:"6927";s:91:"Documentation/Localization.fr_FR/Development/SignalSlots/RegisteringCustomDocumentation.rst";s:4:"d359";s:56:"Documentation/Localization.fr_FR/Introduction/Images.txt";s:4:"6baf";s:55:"Documentation/Localization.fr_FR/Introduction/Index.rst";s:4:"e180";s:56:"Documentation/Localization.fr_FR/KnownProblems/Index.rst";s:4:"f9e3";s:51:"Documentation/Localization.fr_FR/ToDoList/Index.rst";s:4:"ab15";s:53:"Documentation/Localization.fr_FR/UserManual/Index.rst";s:4:"3d2f";s:97:"Documentation/Localization.fr_FR/UserManual/CreatingBuildingSphinxDocumentationProject/Images.txt";s:4:"4351";s:96:"Documentation/Localization.fr_FR/UserManual/CreatingBuildingSphinxDocumentationProject/Index.rst";s:4:"b112";s:81:"Documentation/Localization.fr_FR/UserManual/RenderingPdf/CustomizingRendering.rst";s:4:"297b";s:67:"Documentation/Localization.fr_FR/UserManual/RenderingPdf/Images.txt";s:4:"17dc";s:66:"Documentation/Localization.fr_FR/UserManual/RenderingPdf/Index.rst";s:4:"4543";s:78:"Documentation/Localization.fr_FR/UserManual/RenderingPdf/IntroductionLaTeX.rst";s:4:"476c";s:75:"Documentation/Localization.fr_FR/UserManual/RenderingPdf/LaTeXVsRst2pdf.rst";s:4:"fe53";s:66:"Documentation/Localization.fr_FR/UserManual/Requirements/Index.rst";s:4:"700c";s:80:"Documentation/Localization.fr_FR/UserManual/SphinxDocumentationEditor/Images.txt";s:4:"9766";s:79:"Documentation/Localization.fr_FR/UserManual/SphinxDocumentationEditor/Index.rst";s:4:"541b";s:80:"Documentation/Localization.fr_FR/UserManual/SphinxDocumentationViewer/Images.txt";s:4:"cdb6";s:79:"Documentation/Localization.fr_FR/UserManual/SphinxDocumentationViewer/Index.rst";s:4:"289b";s:64:"Documentation/Localization.fr_FR/UserManual/SphinxRest/Index.rst";s:4:"2370";s:32:"Documentation/ToDoList/Index.rst";s:4:"3f4f";s:34:"Documentation/UserManual/Index.rst";s:4:"6823";s:78:"Documentation/UserManual/CreatingBuildingSphinxDocumentationProject/Images.txt";s:4:"0411";s:77:"Documentation/UserManual/CreatingBuildingSphinxDocumentationProject/Index.rst";s:4:"f95c";s:62:"Documentation/UserManual/RenderingPdf/CustomizingRendering.rst";s:4:"32a5";s:48:"Documentation/UserManual/RenderingPdf/Images.txt";s:4:"511e";s:47:"Documentation/UserManual/RenderingPdf/Index.rst";s:4:"a415";s:59:"Documentation/UserManual/RenderingPdf/IntroductionLaTeX.rst";s:4:"0646";s:56:"Documentation/UserManual/RenderingPdf/LaTeXVsRst2pdf.rst";s:4:"8ca8";s:47:"Documentation/UserManual/Requirements/Index.rst";s:4:"ac9e";s:61:"Documentation/UserManual/SphinxDocumentationEditor/Images.txt";s:4:"2c2f";s:60:"Documentation/UserManual/SphinxDocumentationEditor/Index.rst";s:4:"6b9e";s:61:"Documentation/UserManual/SphinxDocumentationViewer/Images.txt";s:4:"3d9f";s:60:"Documentation/UserManual/SphinxDocumentationViewer/Index.rst";s:4:"b3b6";s:45:"Documentation/UserManual/SphinxRest/Index.rst";s:4:"ba8d";s:40:"Resources/Private/Language/locallang.xlf";s:4:"279b";s:45:"Resources/Private/Language/locallang_mod1.xlf";s:4:"5fb9";s:58:"Resources/Private/Language/locallang_mod_documentation.xlf";s:4:"677d";s:43:"Resources/Private/Layouts/ModuleSphinx.html";s:4:"6a71";s:58:"Resources/Private/Partials/Documentation/ExtensionRow.html";s:4:"f7f6";s:32:"Resources/Private/Scss/main.scss";s:4:"5a7e";s:43:"Resources/Private/Scss/helpers/_mixins.scss";s:4:"1c41";s:38:"Resources/Private/Scss/page/_base.scss";s:4:"bc6b";s:43:"Resources/Private/Scss/page/_kickstart.scss";s:4:"2eb5";s:38:"Resources/Private/Scss/page/_menu.scss";s:4:"f2ed";s:50:"Resources/Private/Templates/Console/BuildForm.html";s:4:"bd3d";s:54:"Resources/Private/Templates/Console/KickstartForm.html";s:4:"ee9b";s:52:"Resources/Private/Templates/Documentation/Index.html";s:4:"02e1";s:56:"Resources/Private/Templates/Documentation/Kickstart.html";s:4:"940c";s:51:"Resources/Private/Templates/Documentation/Menu.html";s:4:"7d57";s:53:"Resources/Private/Templates/Documentation/Render.html";s:4:"a17f";s:65:"Resources/Private/Templates/InteractiveViewer/MissingRestdoc.html";s:4:"5086";s:66:"Resources/Private/Templates/InteractiveViewer/OutdatedRestdoc.html";s:4:"8b16";s:57:"Resources/Private/Templates/InteractiveViewer/Render.html";s:4:"c2e7";s:62:"Resources/Private/Templates/Projects/BlankProject/conf.py.tmpl";s:4:"39ee";s:63:"Resources/Private/Templates/Projects/BlankProject/Makefile.tmpl";s:4:"b56c";s:73:"Resources/Private/Templates/Projects/BlankProject/MasterDocument.rst.tmpl";s:4:"3e59";s:75:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/Settings.yml.tmpl";s:4:"98b6";s:76:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/_make/conf.py.tmpl";s:4:"3c61";s:77:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/_make/make-html.bat";s:4:"6d1c";s:77:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/_make/make.bat.tmpl";s:4:"22dc";s:77:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/_make/Makefile.tmpl";s:4:"869f";s:90:"Resources/Private/Templates/Projects/TYPO3DocEmptyProject/_make/_not_versioned/_.gitignore";s:4:"829c";s:65:"Resources/Private/Templates/Projects/TYPO3DocProject/Includes.txt";s:4:"6d5f";s:76:"Resources/Private/Templates/Projects/TYPO3DocProject/MasterDocument.rst.tmpl";s:4:"accf";s:70:"Resources/Private/Templates/Projects/TYPO3DocProject/Settings.yml.tmpl";s:4:"ae3a";s:82:"Resources/Private/Templates/Projects/TYPO3DocProject/AdministratorManual/Index.rst";s:4:"e59b";s:83:"Resources/Private/Templates/Projects/TYPO3DocProject/Images/IntroductionPackage.png";s:4:"bd5d";s:100:"Resources/Private/Templates/Projects/TYPO3DocProject/Images/AdministratorManual/ExtensionManager.png";s:4:"47a4";s:86:"Resources/Private/Templates/Projects/TYPO3DocProject/Images/UserManual/BackendView.png";s:4:"7f27";s:75:"Resources/Private/Templates/Projects/TYPO3DocProject/Introduction/Index.rst";s:4:"6d62";s:100:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.de_DE.tmpl/MasterDocument.rst.tmpl";s:4:"fd34";s:83:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.de_DE.tmpl/README";s:4:"fe42";s:94:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.de_DE.tmpl/Settings.yml.tmpl";s:4:"c329";s:100:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.fr_FR.tmpl/MasterDocument.rst.tmpl";s:4:"9613";s:83:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.fr_FR.tmpl/README";s:4:"1daf";s:94:"Resources/Private/Templates/Projects/TYPO3DocProject/Localization.fr_FR.tmpl/Settings.yml.tmpl";s:4:"d9a6";s:73:"Resources/Private/Templates/Projects/TYPO3DocProject/UserManual/Index.rst";s:4:"479a";s:71:"Resources/Private/Templates/Projects/TYPO3DocProject/_make/conf.py.tmpl";s:4:"5867";s:72:"Resources/Private/Templates/Projects/TYPO3DocProject/_make/make-html.bat";s:4:"6d1c";s:72:"Resources/Private/Templates/Projects/TYPO3DocProject/_make/make.bat.tmpl";s:4:"22dc";s:72:"Resources/Private/Templates/Projects/TYPO3DocProject/_make/Makefile.tmpl";s:4:"b56c";s:85:"Resources/Private/Templates/Projects/TYPO3DocProject/_make/_not_versioned/_.gitignore";s:4:"829c";s:48:"Resources/Private/Templates/RestEditor/Edit.html";s:4:"6def";s:32:"Resources/Public/Css/Backend.css";s:4:"4157";s:29:"Resources/Public/Css/main.css";s:4:"0604";s:33:"Resources/Public/Css/pygments.css";s:4:"3fe3";s:39:"Resources/Public/Images/check_links.png";s:4:"6f39";s:47:"Resources/Public/Images/file_extension_html.png";s:4:"6d8e";s:47:"Resources/Public/Images/file_extension_json.png";s:4:"d131";s:46:"Resources/Public/Images/file_extension_pdf.png";s:4:"95b5";s:46:"Resources/Public/Images/file_extension_tex.png";s:4:"fa1b";s:37:"Resources/Public/Images/no-sphinx.png";s:4:"df3f";s:34:"Resources/Public/Images/sphinx.png";s:4:"3a49";s:35:"Resources/Public/Images/warning.png";s:4:"a59a";s:47:"Resources/Public/JavaScript/jquery.clearable.js";s:4:"c55f";s:58:"Resources/Public/JavaScript/jquery.dataTables-1.9.4.min.js";s:4:"f1e6";s:47:"Resources/Public/JavaScript/jquery.tools.min.js";s:4:"53da";s:35:"Resources/Public/JavaScript/main.js";s:4:"1a80";s:55:"Resources/Public/docs.typo3.org/css/t3_org_doc_main.css";s:4:"8023";s:61:"Resources/Public/docs.typo3.org/css/t3_org_doc_main_alt_1.css";s:4:"b76e";s:59:"Resources/Public/docs.typo3.org/css/t3_to_be_integrated.css";s:4:"db4f";s:58:"Resources/Public/docs.typo3.org/i/arrow-r-888888-17x17.png";s:4:"712e";s:52:"Resources/Public/docs.typo3.org/js/docstypo3org-1.js";s:4:"ce22";s:52:"Resources/Public/docs.typo3.org/js/docstypo3org-2.js";s:4:"eba9";s:53:"Resources/Public/docs.typo3.org/t3extras/css/grid.css";s:4:"2c21";s:51:"Resources/Public/docs.typo3.org/t3extras/css/ie.css";s:4:"3811";s:52:"Resources/Public/docs.typo3.org/t3extras/css/ie7.css";s:4:"c4b3";s:52:"Resources/Public/docs.typo3.org/t3extras/css/ie8.css";s:4:"67aa";s:53:"Resources/Public/docs.typo3.org/t3extras/css/main.css";s:4:"462b";s:54:"Resources/Public/docs.typo3.org/t3extras/css/reset.css";s:4:"9088";s:54:"Resources/Public/docs.typo3.org/t3extras/css/share.css";s:4:"ba11";s:69:"Resources/Public/docs.typo3.org/t3extras/fonts/share-bold-webfont.eot";s:4:"8c37";s:69:"Resources/Public/docs.typo3.org/t3extras/fonts/share-bold-webfont.svg";s:4:"d80b";s:69:"Resources/Public/docs.typo3.org/t3extras/fonts/share-bold-webfont.ttf";s:4:"2199";s:70:"Resources/Public/docs.typo3.org/t3extras/fonts/share-bold-webfont.woff";s:4:"ab6f";s:71:"Resources/Public/docs.typo3.org/t3extras/fonts/share-italic-webfont.eot";s:4:"d209";s:71:"Resources/Public/docs.typo3.org/t3extras/fonts/share-italic-webfont.svg";s:4:"b6a5";s:71:"Resources/Public/docs.typo3.org/t3extras/fonts/share-italic-webfont.ttf";s:4:"298c";s:72:"Resources/Public/docs.typo3.org/t3extras/fonts/share-italic-webfont.woff";s:4:"3f06";s:72:"Resources/Public/docs.typo3.org/t3extras/fonts/share-regular-webfont.eot";s:4:"a366";s:72:"Resources/Public/docs.typo3.org/t3extras/fonts/share-regular-webfont.svg";s:4:"4e5d";s:72:"Resources/Public/docs.typo3.org/t3extras/fonts/share-regular-webfont.ttf";s:4:"3a9a";s:73:"Resources/Public/docs.typo3.org/t3extras/fonts/share-regular-webfont.woff";s:4:"b60d";s:55:"Resources/Public/docs.typo3.org/t3extras/fonts/share.js";s:4:"4950";s:57:"Resources/Public/docs.typo3.org/t3extras/i/blockquote.png";s:4:"66c6";s:55:"Resources/Public/docs.typo3.org/t3extras/i/i-arrows.png";s:4:"cacf";s:56:"Resources/Public/docs.typo3.org/t3extras/i/nav-aside.png";s:4:"2431";s:54:"Resources/Public/docs.typo3.org/t3extras/i/nav-sub.png";s:4:"c9d8";s:50:"Resources/Public/docs.typo3.org/t3extras/i/pre.png";s:4:"b6a6";s:56:"Resources/Public/docs.typo3.org/t3extras/i/s-buttons.png";s:4:"e2ee";s:58:"Resources/Public/docs.typo3.org/t3extras/i/shadow-page.jpg";s:4:"4957";s:58:"Resources/Public/docs.typo3.org/t3extras/i/shadow-site.png";s:4:"7390";s:57:"Resources/Public/docs.typo3.org/t3extras/i/typo3-logo.png";s:4:"f048";s:52:"Resources/Public/docs.typo3.org/t3extras/js/cufon.js";s:4:"7e47";s:55:"Resources/Public/docs.typo3.org/t3extras/js/jcookies.js";s:4:"4667";s:60:"Resources/Public/docs.typo3.org/t3extras/js/jquery.easing.js";s:4:"5d14";s:51:"Resources/Public/docs.typo3.org/t3extras/js/main.js";s:4:"e7d5";s:14:"doc/manual.sxw";s:4:"4368";}',
	'suggests' => array(
	),
);

?>