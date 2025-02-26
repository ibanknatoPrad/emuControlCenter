<?
/**
 * emuControlCenter language system file
 * ------------------------------------------
 * language:	nl (dutch)
 * author:	Sebastiaan Ebeltjes
 * date:	2006/06/26
 * ------------------------------------------
 */
$i18n['popupConfig'] = array(
	// -------------------------------------------------------------
	// tooltips
	// -------------------------------------------------------------

	/* ECC */
	'lbl_ecc_hdl' =>
		"Configureer emuControlCenter",
	'lbl_ecc_userfolder' =>
		"Gebruikers map (voor plaatjes en export)",
	'lbl_ecc_userfolder_button' =>
		"Wijzig folder",
	'title_ecc_userfolder_popup' =>
		"Selecteer de positie van de gebruikersmap",
	/* ECC-OPTIONS */
	'lbl_ecc_otp_hdl' =>
		"Opties",
	'lbl_ecc_opt_detail_pp' =>
		"Aantal ROMS in detail weergave",
	'lbl_ecc_opt_list_pp' =>
		"Aantal ROMS in lijst weergave",
	/* ECC-COLOR&FONTS */
	'lbl_ecc_colfont_hdl' =>
		"Kleuren en lettertypen",
	'lbl_ecc_colfont_font_list' =>
		"Lijst lettertype en grootte",
	'title_ecc_colfont_font_list_popup' =>
		"Selecteer een lettertype voor de ROM lijst",
	'lbl_ecc_colfont_font_global' =>
		"GLOBAAL Lettertype en grootte",
	'title_ecc_colfont_font_global' =>
		"Selecteer een GLOBAAL Lettertype",
	/* ECC-STARTUP */
	'lbl_ecc_startup_hdl' =>
		"Opstarten",
	'btn_ecc_startup' =>
		"Open opstart-configuratie",
	
	/* EMU-PLATFORM */
	'lbl_emu_hdl%s%s' =>
		"%s (%s)",
	'lbl_emu_platform_name' =>
		"Platform naam",
	'lbl_emu_platform_category' =>
		"Platform categorie",
	/* EMU-ASSING */
	'lbl_emu_assign_hdl%s' =>
		"Emulator aanwijzen (%s)",
	'lbl_emu_assign_path' =>
		"Pad naar emulator",
	'btn_emu_assign_path_select' =>
		"Selecteer emulator",
	'title_emu_assign_path_select_popup%s' =>
		"Selecteer emulator voor %s",
	'lbl_emu_assign_parameter' =>
		"Commandolijn parameter",
	'lbl_emu_assign_escape' =>
		"pad in aanhalingstekens",
	'lbl_emu_assign_eightdotthree' =>
		"8.3 bestandsnaam",
	'lbl_emu_assign_nameonly' =>
		"alleen bestandsnaam",
	'lbl_emu_assign_noextension' =>
		"geen extensie",
	
	/* DAT */
	'lbl_dat_hdl' =>
		"Configuratie DAT-bestand",
	'lbl_dat_author' =>
		"Ontwerper",
	'lbl_dat_website' =>
		"Website",
	'lbl_dat_email' =>
		"E-Mail",
	'lbl_dat_comment' =>
		"Commentaar",
	/* DAT-OPTIONS */
	'lbl_dat_opt_hdl' =>
		"Opties",
	'lbl_dat_opt_namestrip' =>
		"Maak romcenter DAT-bestand schoon",
		
	/* 0.9 FYEO 3 */
	'lbl_img_otp_list_hdl' =>
		"Opties - Details ROM",
	'lbl_img_otp_list_imagesize' =>
		"Plaatjesgrootte",
	'lbl_img_otp_list_aspectratio' =>
		"Behoud verhoudingen",
	/* 0.9 FYEO 4 */
	'lbl_img_otp_list_fastrefresh' =>
		"Snel verversen",
		
	/* 0.9 FYEO 9 */
	'confEccStatusLogCheck' =>
		"Activeer loggen",
	'confEccStatusLogOpen' =>
		"Laat logbestanden zien",
		
	/* 0.9.1 FYEO 5 */
	'tab_label_emulators' =>
		"Emulators",
	'tab_label_general' =>
		"Hoofdinstellingen",
	'tab_label_datfiles' =>
		"DAT-bestanden",
	'tab_label_multimedia' =>
		"Multimedia",
	'tab_label_colorsandfonts' =>
		"Kleuren en lettertypen",
	
	/* 0.9.2 FYEO 1 */
	'lbl_emu_tips' =>
		"Bekende emulator links en info",
	'lbl_img_opt_conv' =>
		"Opties - Plaatjesomzetter",
	'lbl_img_opt_conv_quality' =>
		"Kwaliteit miniatuur",
	'lbl_img_opt_conv_quality_def%s' =>
		"(Standaard: %s)",
	'lbl_img_opt_conv_minsize' =>
		"Min. orginele grootte",
	'lbl_img_opt_conv_minsize_def%s' =>
		"(standaard: %s)",
	'lbl_col_opt_global' =>
		"Globaal",
	'lbl_col_opt_list' =>
		"Lijst",
	'lbl_col_opt_options' =>
		"Opties",

	/* 0.9.2 FYEO 3 */
	'lbl_emu_assign_use_eccscript' =>
		"eccScript",
	
	/* 0.9.2 FYEO 5 */
	'lbl_emu_assign_edit_eccscript' =>
		"Bewerk eccScript",	
	'lbl_emu_assign_edit_eccscript_error' =>
		"Je kan pas een script toevoegen als je een emulator heb geselecteerd!",	

	/* 0.9.2 FYEO 6 */
	'lbl_emu_assign_eccscript_hdl' =>
		"eccScript opties",
	'lbl_emu_assign_delete_eccscript' =>
		"verwijder",
	'msg_emu_assign_delete_eccscript%s' =>
		"verwijder eccScript\n\n%s\n\nWeet je dit zeker?",

	/* 0.9.2 FYEO 8 */
	'tab_label_startup' =>
		"Opstarten",
	'startConfHdl' =>
		"Configuratie opstarten",
	'startConfSoundHdl' =>
		"Geluid bij opstarten",
	'startConfOptHdl' =>
		"Opties",
	'startConfUpdate' =>
		"Controleer voor updates bij opstarten",
	'startConfMinimize' =>
		"Minimaliseer naar startbalk",
	'startConfSoundSelect' =>
		"Selecteer geluid",
	
	/* 0.9.2 FYEO 9 */
	'lbl_preview_impossible' =>
		"Voorbeeld is niet mogelijk!, geen of verkeerde instellingen!!",

	/* 0.9.2 FYEO 10 */
	'lbl_emu_assign_edit_eccscript_error_notfound' =>
		"Kan geen emulator vinden!, Kies eerst een emulator!",
	'lbl_emu_assign_create_eccscript' =>
		"Creeer eccScript",
	'emu_info_nodata' =>
		"Nog geen informatie aanwezig...",
	'emu_info_footer%s' =>
		"Misschien weet jij een goede emulator voor dit platform!\nJe kan je bevindingen plaatsen op ons forum op\n%s",
	
	/* 0.9.2 FYEO 11 */
	'title_startup_select_sound' =>
		"Selecteer een opstart geluid",

	/* 0.9.2 FYEO 14 */
	'title_emu_assign_found_eccscript' =>
		"eccScript gevonden",
	'msg_emu_assign_found_eccscript%s' =>
		"Een eccScript is gevonden voor de geselecteerde emulator!\n\nActiveer deze eccScript %s",
	'title_popup_save' =>
		"Herstart ECC",
	'msg_popup_save' =>
		"Herstart emuControlCenter om wijzigingen van kracht te doen komen?",
	
	/* 0.9.2 FYEO 15 */
	'title_emu_found_eccscript_preview' =>
		"Informatie:",
	'title_emu_found_eccscript_nopreview' =>
		"Geen informatie aanwezig!",

	/* 0.9.6 FYEO 05 */
	'lbl_emu_assign_executeinemufolder' =>
		"Start vanuit Emufolder",
	'lbl_preview_selectEmuFirst' =>
		"Je hebt geen emulator geselecteerd! gebruik de 'selecteer emulator' knop hierboven!",

	/* 0.9.6 FYEO 13 */
	'winTitleConfiguration' =>
		"Configuration",

	'colOptGlobalFont' =>
		"Lettertype",

	'colOptListBg0' =>
		"Achtergrond",
	'colOptListBg1' =>
		"Achtergrond 1",
	'colOptListBg2' =>
		"Achtergrond 2",
	'colOptListBgHilight' =>
		"Achtergrond selectie",
	'colOptListBgImage' =>
		"Achtergrond plaatje",
	'colOptListText' =>
		"Tekst",
	'colOptListTextHilight' =>
		"Tekst geselecteerd",
	'colOptListFont' =>
		"Lettertype",

	'colOptOptionsBg1' =>
		"Achtergrond 1",
	'colOptOptionsBgHilight' =>
		"Achtergrond geselecteerd",
	'colOptOptionsText' =>
		"Tekst",

	/* 0.9.6 FYEO 17 */
	'colImgSlotUnsetBg' =>
		"Achtergrond ongebruikt",
	'colImgSlotSetSelect' =>
		"Achtergrond ongebruikt geselecteerd",
	'colImgSlotSetBg' =>
		"Achtergrond gebruikt",
	'colImgSlotUnsetSelect' =>
		"Achtergrond gebruikt geselecteerd",
	'colImgSlotText' =>
		"Tekst",

	'colOptOptionsBg2' =>
		"Achtergrond 2",

	'tabEmuConfig' =>
		"Emulator configuratie",
	'tabEmuPlatformSettings' =>
		"Platform instellingen",
	'tab_label_platforms' =>
		"Platforms / Emulators",
	
	/* 0.9.6 WIP 18 */
	'confEccSaveViewSettings' =>
		"Bewaar lijst/detail instellingen (alleen voor experts)",
	
	/* 0.9.6 WIP 19 */
	'tabEmuInfos' =>
		"Links & Infos",
		
	/* 0.9.6 WIP 20 */
	'startConfBugreportSend' =>
		"Verstuur automatisch een foutenrapport bij opstarten",
	'lbl_ecc_opt_language' =>
		"Taal instellingen",
	'tab_label_language' =>
		"Taal",
	
	/* 0.9.7 WIP 01 */
	'confEccSilentParsing' =>
		"ROM toevoegen in achtergrond (geen meldingen)",
		
	'emuAssignGlobalEnableEccScript' =>
		"activeer eccScript",
	'emuAssignFileextLabel' =>
		"Emulator voor fileextension",
	'emuAssignPreviewLabel' =>
		"Commandolijn voorbeeld",
	'emuAssignGlobalActive%s' =>
		"Start ROMS met bestandextensie '%s' met deze emulator",
	'emuAssignGlobalActiveGlobal%s' =>
		"Activeer 'grijp' alle emulator '%s'",
	'lbl_emu_tips_ecc' =>
		"ecc links",	
	'emuPlatformActiveState' =>
		"activeer platform",
	'tabGeneralHlListOptions' =>
		"Lijst-modus opties",	
		
	/* 0.9.7 WIP 04 */
	'tab_label_themes' =>
		"Themas",
	'lblThemeSelect' =>
		"Selecteer thema",

	/* 0.9.7 WIP 10 */
	'emuAssignLabelZipUnpack' =>
		"ZIP/7ZIP automatisch uitpakken",
	'emuAssignGlobalCheckZipUnpackActive' =>
		"Pakt automatisch ZIP/7ZIP bestanden uit",
	'emuAssignGlobalCheckZipUnpackSkip' =>
		"Sla al eerder uitgepakte bestanden over (sneller)",
	'emuAssignGlobalCheckZipUnpackClean' =>
		"Maak ecc-unpack folder schoon voor platform",
	'emuAssignGlobalCheckZipUnpackOpen' =>
		"Open ecc-unpack folder",

	/* 0.9.7 WIP 10 */
	'conEccSaveGuiSettings' =>
		"Sla GUI instellingen op",

	/* 0.9.8 WIP 02 */
	'lbl_img_otp_list_imagesize_default' =>
		"Standaard: 120x80",
	'lbl_img_otp_list_aspectratio_default' =>
		"Standaard: uit",
	'lbl_img_otp_list_fastrefresh_default' =>
		"Standaard: off - experimenteel",

	/* 0.9.8 WIP 04 */
	'lbl_emu_assign_usecuefile' =>
		"gebruik CD-index (cue,ccd,toc,m3u) bestand wanneer aanwezig",

    /* 0.9.9. WIP 01 */
	'startConfThirdPartyHdl' =>
		"Third Party",

    /* 0.9.9. WIP 06 */
	'emuAssignGlobalEccScriptOptions' =>
		"Options",
	'lbl_emu_assign_refresh_eccscript' =>
		"Refresh",

	/* 1.11 BUILD 6 */
	'emuAssignGlobalCheckZipUnpackAll' =>
		"Alle bestanden uitpakken met subfolders",
	'emuUnpackNotelabel' =>
		'Ps. in de TAB [start] kun je tijdelijke bestanden laten verwijderen als ECC gesloten wordt',
	'startConfDeleteUnpacked' =>
		"Maak folder met tijdelijke bestanden leeg bij afsluiten.",

	/* 1.13 BUILD 4-8 */
	'eccVideoPlayer_enable' =>
		"Video Player aanzetten",
	'eccVideoPlayer_sound' =>
		"Geluid inschakelen",
	'eccVideoPlayer_soundvolume' =>
		"Volume (0-200%) =",		
	'eccVideoPlayer_loop' =>
		"Video herhalen",
	'eccVideoPlayer_resolution' =>
		"Resolutie (pixels): ",
	'eccVideoPlayer_padding' =>
		"Afstand van rechter onderhoek (pixels): ",

	/* 1.13 BUILD 12 */		
	'lbl_ecc_opt_hdl' =>
		"Overige opties",
	'tabGeneralImageTabOptions' =>
		"PLAATJES TAB in hoofd scherm opties",
	'tabGeneralImageTabTcuttLabel' =>	
		"Tekst afbreken bij x karakters:",
	'tabGeneralParsingUnpackingOptions' =>	
		"Verwerking / Uitpakken opties:",
	'tabGeneralParsingTriggerLabel' =>	
		"Grote bestanden verwerkings module trigger grootte (MB)",
	'tabGeneralParsingTriggerNoteLabel' =>	
		"(experimenteel, PHP kan crashen als deze te hoog gezet wordt)",
	'ThemeSelectLabel' =>
		"Thema:",
		
	/* 1.152 BUILD 04 */		
	'tabGeneralUnpackGUITriggerLabel' =>	
		"GUI voor uitpakken (progressbar) trigger grootte (MB)",
	'tabGeneralUnpackGUITriggerNoteLabel' =>	
		"(hangt af van computer snelheid / wachttijd)",

	/* 1.152 BUILD 06 */		
	'lblUseThemeColors' =>	
		"Gebruik thema kleuren",

	/* 1.20 */		
	'DatabaseFolderLabel' =>	
		"Database map:",
	'DatabaseFolderButton' =>	
		"Wijzig folder",
    'dialogDatabaseFolder' =>	
		"Selecteer een map om de database in op te slaan",

	/* 1.21 */		
	'extProgDaemontoolsButton' =>
		"Selecteer",	
	'extProgJoyEmulatorLabel' =>
		"Joystick emulator:",	
	'startConfJoyEmulatorLabel' =>	
		"Start Joystick emulator bij opstarten van ECC",
    'dialogJoyEmulatorFolder' =>	
		"Lokaliseer Joystick emulator bestand",
	'extProgJoyEmulatorbutton' =>
		"Selecteer",	

	/* 1.22 */
	'extProgJoyEmulatorParamLabel' =>
	"Commandolijn parameter(s):",
);
?>