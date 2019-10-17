# jupiter-for-all
Jupiter for All. Makes your Jupiter child theme accessible.

## CSS Features:
- Loads CSS classes that helps you create accessible sites:
- - .screen-reader-text: Use it to make an element visible only for screen readers.
- - .screen-reader-shortcut: Use it on an <a> element to display it only on focus.
- - .uppercase: Use it to make a normal case text displays as uppercase (you shouldn type uppercase text only for acronyms. Other uppercase text will be read by the screen reader as acronym).
- Sets accessible styles for focus elements as default.

## Javascript Features:
- Implements aria-expanded on the mobile menu button.
- Adds title attribute to Youtube iframes.

## Jupiter 6 Improvements:
- Overrides /views/footer/navigate-top.php on Jupiter. Adds screen-reader-text to "Go to top" button.
- Overrides /views/footer/quick-contact.php on Jupiter. Adds aria-label to the Quick Contact form.
- Overrides /views/header/global/main-menu-burger-icon.php on Jupiter.
- - Converts clickable <div> to <button>.
- - Add aria-expanded.
- - Add screen-reader-text.
- Overrides /views/header/global/nav-side-search.php on Jupiter.
- - Add screen-reader-text.
- - Add aria-label.
- - Convert <input> to <button>.
- Overrides /views/header/global/responsive-menu.php on Jupiter.
- - Add screen-reader-text.
- - Add aria-label.
- - Convert <input> to <button>.
- Overrides /views/header/master/logo.php on Jupiter.
- - Removes redundant title.
- Overrides /views/widgets/widgets-social-networks.php on Jupiter. Adds screen-reader-text.

## Jupiter Donut Improvements:
- Overrides mk_build_main_wrapper() from /framework/helpers/global.php on Jupiter Donut. Replaces <div id="theme-page"> with <main id="theme-page">.
- Overrides mk_head_meta_tags() from /framework/helpers/wp_head.php on Jupiter Donut. Enable zoom and scale.
- Overrides mk_get_template_part() from /includes/helpers/template-part-helpers.php on Jupiter Donut. Allows to override Jupiter template parts from Jupiter for All.
- Overrides /wpbakery/shortcodes/mk_page_section/components/video-backgrounds.php on Jupiter Donut. Adds aria-label to the iFrames.

## WPBakery Page Builder (Modified Version) Improvements:
- Overrides /include/templates/shortcodes/vc_gallery.php on WPBakery Page Builder (Modified Version). Replaces prettyphoto opener links (<a>) with buttons (<button>).
- Overrides /include/templates/shortcodes/vc_icon.php on WPBakery Page Builder (Modified Version). Adds screen-reader-text to the icons.

## Other Accessibility Features:
- Implements "Skip to" links.
