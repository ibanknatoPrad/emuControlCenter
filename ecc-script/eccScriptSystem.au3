; ------------------------------------------------------------
; ECC ScriptROM SYSTEM file
;
; Version: 1.0.0.4 (2008.07.19)
; Author: Sebastiaan Ebeltjes (Phoenix Interactive)
; ------------------------------------------------------------


; ============================================================
; SET AutoIt options
; ============================================================

Break(0)
AutoItSetOption("TrayAutoPause",0)
AutoItSetOption("WinTitleMatchMode",2)


; ============================================================
; ECC ScriptROM reader
;
; This part will open the 'ecc-script\eccScriptRom.dat' file
; and read all settings and convert these to usable variables
; we can use in the scripts.
; ============================================================

;[META]
$eccMetaName =			IniRead("..\eccScriptRom.dat", "META", "name", "")
$eccMetaMediaType =		IniRead("..\eccScriptRom.dat", "META", "media_type", "")
$eccMetaMediaCurrent =		IniRead("..\eccScriptRom.dat", "META", "media_current", "")
$eccMetaMediaCount =		IniRead("..\eccScriptRom.dat", "META", "media_count", "")
$eccMetaPlayer =		IniRead("..\eccScriptRom.dat", "META", "player", "")
$eccMetaInfoId =		IniRead("..\eccScriptRom.dat", "META", "info_id", "")
$eccMetaInfoString =		IniRead("..\eccScriptRom.dat", "META", "info_string", "")

;[FILE]
$eccFileRomCrc32 = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_crc32", "")
$eccFileRomFile = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_file", "")
$eccFileRomPath = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_path", "")
$eccFileRomFilePacked = 	IniRead("..\eccScriptRom.dat", "FILE", "rom_file_packed", "")
$eccFileRomNamePlain = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_name_plain", "")
$eccFileRomExtension = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_extension", "")
$eccFileRomFileExtension =	IniRead("..\eccScriptRom.dat", "FILE", "rom_file_extension", "")
$eccFileRomFilesize = 		IniRead("..\eccScriptRom.dat", "FILE", "rom_filesize", "")
$eccFileEccUnpackedFile = 	IniRead("..\eccScriptRom.dat", "FILE", "ecc_unpacked_file", "")
$eccFileEccUnpackedPath = 	IniRead("..\eccScriptRom.dat", "FILE", "ecc_unpacked_path", "")
$eccFileIsMultirom = 		IniRead("..\eccScriptRom.dat", "FILE", "is_multirom", "")

;[AUDIT]
$eccAuditDriver = 		IniRead("..\eccScriptRom.dat", "AUDIT", "driver", "")
$eccAuditRom = 			IniRead("..\eccScriptRom.dat", "AUDIT", "rom", "")
$eccAuditRomOf = 		IniRead("..\eccScriptRom.dat", "AUDIT", "rom_of", "")
$eccAuditCloneOf = 		IniRead("..\eccScriptRom.dat", "AUDIT", "clone_of", "")
$eccAuditSetType = 		IniRead("..\eccScriptRom.dat", "AUDIT", "set_type", "")
$eccAuditSetContainsTrash = 	IniRead("..\eccScriptRom.dat", "AUDIT", "contains_trash", "")
$eccAuditFilenameValid = 	IniRead("..\eccScriptRom.dat", "AUDIT", "filename_valid", "")

;[EMU]
$eccEmuEmulatorFile = 		IniRead("..\eccScriptRom.dat", "EMU", "emulator_file", "")
$eccEmuEmulatorPath = 		IniRead("..\eccScriptRom.dat", "EMU", "emulator_path", "")
$eccEmuEmulatorFilePlain = 	IniRead("..\eccScriptRom.dat", "EMU", "emulator_file_plain", "")
$eccEmuParameter = 		IniRead("..\eccScriptRom.dat", "EMU", "parameter", "")
$eccEmuEscape = 		IniRead("..\eccScriptRom.dat", "EMU", "escape", "")
$eccEmuWin8char = 		IniRead("..\eccScriptRom.dat", "EMU", "win8char", "")
$eccEmuFilenameOnly = 		IniRead("..\eccScriptRom.dat", "EMU", "filenameonly", "")
$eccEmuNoExtension = 		IniRead("..\eccScriptRom.dat", "EMU", "noextension", "")
$eccEmuExecuteInEmufolder = 	IniRead("..\eccScriptRom.dat", "EMU", "executeinemufolder", "")
$eccEmuEnableZipUnpackActive = 	IniRead("..\eccScriptRom.dat", "EMU", "enablezipUnpackactive", "")
$eccEmuEnableZipUnpackSkip = 	IniRead("..\eccScriptRom.dat", "EMU", "enablezipUnpackskip", "")
$eccEmuUseCueFile =		IniRead("..\eccScriptRom.dat", "EMU", "useCueFile", "")

;[SYSTEM]
$eccSystemIdent = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "ident", "")
$eccSystemName = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "name", "")
$eccSystemCategory = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "category", "")
$eccSystemExtensions = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "extensions", "")
$eccSystemLanguage = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "language", "")
$eccSystemEccFolder = 		IniRead("..\eccScriptRom.dat", "SYSTEM", "ecc_folder", "")


;[EXTRA]
; $eccScriptParamsFile (amiga gameconfig INI) (TheCyberDruid)
; ============================================================
If StringLower($eccEmuEmulatorFilePlain) == "winuae" Then
	$eccScriptParamsFile = $eccSystemEccFolder & "ecc-script-user\amiga\winuae\eccscript_" & $eccFileRomCrc32 & ".ini"
	$eccMultiRoms = IniReadSection("..\eccScriptRom.dat", "MULTI")
EndIf
; ============================================================


;[EXTRA]
; $eccFileRomFileIsPacked (extra flag if the romfile is packed) (Phoenix)
; ============================================================
Dim $eccFileRomFileIsPacked
If StringLower($eccFileRomFileExtension) = "zip" Then $eccFileRomFileIsPacked = "1"
If StringLower($eccFileRomFileExtension) = "7z" Then $eccFileRomFileIsPacked = "1"
If StringLower($eccFileRomFileExtension) = "7zip" Then $eccFileRomFileIsPacked = "1"
If StringLower($eccFileRomFileExtension) = "rar" Then $eccFileRomFileIsPacked = "1"


; ------------------------------------------------------------
; Check if the 'use CUE file' option is selected, when
; selected change the file extension to 'CUE'
; ------------------------------------------------------------
If $eccEmuUseCueFile = "1" Then
	$eccFileRomFile = StringReplace($eccFileRomFile, "." & $eccFileRomExtension, ".cue")
	$eccFileRomFilePacked = StringReplace($eccFileRomFilePacked, "." & $eccFileRomExtension, ".cue")
	$eccFileEccUnpackedFile = StringReplace($eccFileEccUnpackedFile, "." & $eccFileRomExtension, ".cue")
	;After changing the filenames with the extensions cue, also change the cue variable to cue.
	$eccFileRomExtension = "cue"
EndIf


; ============================================================
; This part contains basic settings.
; ============================================================

; ------------------------------------------------------------
; Display traytip to let user know a script is being executed.
; ------------------------------------------------------------
TrayTip($eccSystemName, "Executing script...please wait...", 30, 1)


; ------------------------------------------------------------
; Check if emulator is already running, when the emulator
; is running, then try to close it first.
; ------------------------------------------------------------
If ProcessExists($eccEmuEmulatorPath & $eccEmuEmulatorFile) Then ProcessClose($eccEmuEmulatorPath & $eccEmuEmulatorFile)


; ------------------------------------------------------------
; Some emulators may need to start from their root folder to read their CFG file
; so we change the current work folder to the emulator folder.
; ------------------------------------------------------------
FileChangeDir($eccEmuEmulatorPath)


; ************************************************************
; FUNCTION: EmuWindowControl(EmulatorWindowTitle) (also startup the emulator)
; ************************************************************
Func EmuWindowControl($EmulatorWindowTitle)

; Start the emulator
Run($eccEmuEmulatorPath & $eccEmuEmulatorFile)

; Wait until emulator is active (window name) (has a 10 seconds timeout) 
WinWaitActive($EmulatorWindowTitle, "", 10) 

; Is the emulator active or not? 
If WinExists($EmulatorWindowTitle) = 0 Then
	MsgBox(0, $eccSystemName, "The emulator '" & $eccEmuEmulatorPath & $eccEmuEmulatorFile & "' did not respond!" & @CRLF & @CRLF & _
	"eccScript searched for an window named '" & $EmulatorWindowTitle & "'but didn't find this!" & @CRLF & _
	"Maybe the version has changed in the meantime, please check the window title-string again.")
	Exit
EndIf

EndFunc

; ************************************************************
; FUNCTION: CDImage(CDaction)
; ************************************************************
Func CDImage($CDaction)
Global $DaemonTools
Global $RomExtensionInfo
Global $DTsupport


$DaemonTools = IniRead($eccSystemEccFolder & "\ecc-script\eccScriptDaemonTools.ini", "GENERAL", "DaemonTools", "")

; Check if Daemontools is already configured, if not then let user select the program first.
If FileExists($DaemonTools) = 0 Then

	$DaemonTools = FileOpenDialog("CONFIG - Please locate Daemon Tools", "", "Daemon Tools (daemon.exe)", 3)

	If @error Then
		; Show user a messagebox that Daemontools is needed.
		MsgBox(48, "ECC Script", "You need 'Daemon Tools' to mount an CD Image with Scripts." & @CRLF & @CRLF & _
		"you can find this software at: http://www.disc-tools.com/download/daemon")
		Exit
	Else
		IniWrite($eccSystemEccFolder & "\ecc-script\eccScriptDaemonTools.ini", "GENERAL", "DaemonTools", chr(34) & $DaemonTools & chr(34))
	EndIf

EndIf

; Check

If $eccEmuEnableZipUnpackActive = "0" Then
	If $eccFileRomFileIsPacked = "1" Then
	        MsgBox(48, "ECC Script - Daemon tools", "'Daemon Tools' does not support packed files '" & $eccFileRomFileExtension & "'." & @CRLF & @CRLF & _
		"To run this rom properly, enable the 'auto unpack' option in the ECC emulator config to extract files before mounting them!")
		Exit
	EndIf
EndIf


; Check if the extension is supported by Daemon Tools, and set extensions info tag.
$DTsupport = "0"

Select

	Case $eccFileRomExtension = "cue"
		$RomExtensionInfo = "CUE sheet"
		$DTsupport = "1"

	Case $eccFileRomExtension = "iso"
		$RomExtensionInfo = "ISO image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "mds"
		$RomExtensionInfo = "Media Discriptor file"
		$DTsupport = "1"

	Case $eccFileRomExtension = "b5t"
		$RomExtensionInfo = "BlindWrite image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "b6t"
		$RomExtensionInfo = "BlindWrite image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "bwt"
		$RomExtensionInfo = "Blindread image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "ccd"
		$RomExtensionInfo = "Clone CD image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "isz"
		$RomExtensionInfo = "Compressed ISO image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "nrg"
		$RomExtensionInfo = "Nero image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "pdi"
		$RomExtensionInfo = "Instand CD/DVD image"
		$DTsupport = "1"

	Case $eccFileRomExtension = "cdi"
		$RomExtensionInfo = "DiscJuggler image"
		$DTsupport = "1"

EndSelect


If $DTsupport <> "1" Then
        MsgBox(48, "ECC Script - Daemon tools", "The current extension '" & $eccFileRomExtension & "'is not supported by 'Daemon Tools', abort...")
	Exit
EndIf


Select
	Case $CDaction = "mount"

	; Mount a CD image
	TrayTip($eccSystemName, "mounting '" & $RomExtensionInfo & "' please wait...", 1, 1)

	If $eccFileRomFileIsPacked <> "1" Then
		; File is standard
		ShellExecuteWait($DaemonTools, " -mount 0," & chr(34) & $eccFileRomPath & $eccFileRomFile & chr(34) , "")
	Else
		; File is unpacked to a temp folder
		ShellExecuteWait($DaemonTools, " -mount 0," & chr(34) & $eccFileEccUnpackedPath & $eccFileEccUnpackedFile & chr(34) , "")
	EndIf

	Case $CDaction = "unmount"

	; Unmount a CD image
	TrayTip($eccSystemName, "unmounting CD image...please wait...", 1, 1)
	ShellExecuteWait($DaemonTools, " -unmount 0", "")

EndSelect

EndFunc