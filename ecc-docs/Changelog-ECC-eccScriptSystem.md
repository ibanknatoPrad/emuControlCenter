## Changelog ECC eccScriptSystem
***
v1.3.0.1 (2016.09.25)
- Removed Xpadder variable, added JoyEmulator variable.

v1.3.0.0 (2014.05.18)
- Fixed Daemon tools mounting (option "scsi" added)
- New feature: ECC commandline parameters are now passed trough
- Added CCD, TOC, MDS index files for Daemontoools referred in ECC CONFIG as "index" files.

v1.2.1.6 (2014.03.29)
- Fixed a bug in the Daemon Tools algoritm

v1.2.1.5 (2013.12.29)
- Added img & bin file extensions (possibly needs .cue or .m3u file to assist).
- Changed traytips to tooltips.

v1.2.1.2 (2013.10.04)
- Fixed bugs where Amiga script variables are not declared, these where returning an error.

v1.2.1.1 (2013.02.06)
- Fixed a bug where amiga settings are stored in the wrong folder.

v1.2.1.0 (2012.12.07)
- Daemontools location now needs to be selected in ECC config!.

v1.2.0.9 (2012.11.18)
- Added more information if a file extension is not supported by deamontools.

v1.2.0.8 (2012.11.07)
- Added: new function 'GetActiveKeyboardLayout' to get the keyboard layout.

v1.2.0.7 (2012.09.01)
- Fixed selecting executable for Daemon tools.

v1.2.0.6 (2012.07.04)
- Changed filename for 7zip usage due to 7zip update.

v1.2.0.5 (2012.01.15)
- Added '$eccFileRomRegion' to use the roms region setting in a script (given as english language)
Possible regions: Asia, Brazil, Europe, Hispanic, Japan, USA, World, Australia, USA-Europe, USA-Japan

v1.2.0.0 (2012.01.14)
- Added 8.3 Dosfile names on unpacked ROM files when 8.3 is enabled in ECC config! (only affects the FILEname of the ROM)

v1.1.0.6 (2010.02.26)
- Added an extra 'flag' in the function 'EmuWindowControl' to choose if the emulator should startup too.

v1.1.0.5 (2010.02.11)
- Fixed an issue where Windows could not find some emulators through the shell commandline due to a trailing space. (Phoenix)

v1.1.0.4 (2010.02.02)
- Fixed part of mounting script that did not mount CUE file's properly with daemontools (Phoenix)

v1.1.0.3 (2010.01.21)
- Fixed part of mounting script that did not load ISO's (DerMicha75)

v1.1.0.2 (2010.01.04)
- Fixed part of mounting script that did not load ISO's, now adapted to 'IntelliX' section (Altheos) 

v1.1.0.1 (2009.12.18)
- Added new variable from the ECC general config: $eccConfigFile, $eccUserLanguage, $eccUserPath 

v1.1.0.0 (2009.11.30)
- Added "IntelliX" subroutine.
- This subroutine uses the ECC config variables and applies them automatically.
- This should make handling of packed romfile inside archives a lot easier.
- Autodetects if there is a .cue file present (with the same filename) and uses this
when available

v1.0.0.7 (2009.09.20)
- Made some grammatical changes in the 'title bar not found' sentence.

v1.0.0.6 (2009.01.17)
- Added 3rdparty variables.
- made variables GLOBAL, so you can use these in functions inside your scripts.

v1.0.0.5 (2008.09.04)
- Added '$eccFileRomFileExtension' to give the real extension (if the file is zipped)

v1.0.0.4 (2008.07.20)
- Added '$eccFileRomFileExtension' to give the real extension (if the file is zipped)
- Added '$eccFileRomFileIsPacked', a extra flag if the romfile is packed.
- Fixed a bug where the filename is currupt when containing the extension piece in it.
- Example: a rom name called 'isolater man' was renamed to 'cuelater man'
- Only make mounting possible for supported Deamontools LITE extensions.
- Added ZIP support, where mouting happens from the temporally unpack folder.
- Added strings for fileextensions, so you can see what daemontools is mouting.

v1.0.0.3
- Added '$eccEmuUseCueFile' to see if the 'use CUE file' option is selected
- Added CUE handler, changes the file extension to CUE when CUE option is selected.

v1.0.0.2
- Added '$eccScriptParamsFile' to locate the config file for a amiga game. (TheCyberDruid)