- 0.2.4
  - Fixed the translation key for the favorited filter
- 0.2.3
  - Added package search #53
  - Improved the error message when Bazaar fails to load the list of packages #67
  - Fixed an issue when php memory limit was set to infinite #71
  - Fixed an issue causing tooltips to be misaligned #74
- 0.2.2
  - Allow filtering of installed, outdated and favorited extensions.
- 0.2.1
  - Fixed an issue where the connect and dashboard buttons would no longer work.
- 0.2.0
  - Added Tasks history page.
    - Shows what extension was installed and when.
    - Gives easy access to Composer logs and memory usage.
  - Shows possible conflicts with your hosting environment, like:
    - Memory needed, available.
    - Permissions of directories.
  - Moved some logic into modals to clean up the Bazaar page header. Allowing for more stuff in the long run.
  - Improve Bazaar header to navigate between pages.
  - Added privacy statement.
  - German language (thanks @DennaGherlyn).
- 0.1.1
  - Huge refactoring. Extension manager logic moved into the repository.
  - Extensions with available updates are now marked "outdated".
  - Allowing updating of single extensions when outdated.
  - Flush cache, including manifest (not yet fixed in core), during (de-)installation and updating of packages.
  - Fixed tooltips overlapping for extension title and badges.
  - Gave badges a color based on their state indication.
  - Not showing "installable" badge when extension enabled.
  - Refactored tests namespacing to adhere to psr standards.
  - Removed console.log debugging from xhr calls results.
  - Now showing latest version or current version on extension card.
- 0.1.0
  - Moved our loader modal below the error popup.
  - Added a contributing document.
- 0.1.0-beta.5
  - Dutch, Portuguese (thanks @1337god) and Spanish (thanks @AngellitoX) language.
  - Allow favoriting extensions, only if you've connected your Bazaar.
  - Readme added.
  - Implemented, but disabled, code to allow registering our own satis into the composer.json for private packages.ages.
  - Complete rewrite of the frontend, it no longer refreshes the whole page when doing actions on extensions.
- 0.1.0-beta.4
  - Allows connecting Bazaar to Flagrow.io to provide a dashboard.
  - Prevent extension list result caching when debug is on.
  - IT locale added for beta.3 of this extension.
- 0.1.0-beta.3
  - Removed timeout on install and uninstall xhr calls.
- 0.1.0-beta.2
  - Working version.
- 0.1.0-beta.1
  - Initial version.