=== Luviana ===
Contributors: MotoPress
Tags: custom-logo, custom-menu, featured-images, threaded-comments, translation-ready, block-styles
Requires at least: 5.0
Tested up to: 6.1
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Luviana is a Gutenberg theme perfectly fitting for hotels, rental accommodations and services, boarding houses or hostels. The theme comprises an integrated online booking plugin that allows conducting reservations of your rental properties and receiving online payments.


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now. Click Activate.
3. Install required plugins.
4. If you create a new website, you may import sample data in Appearance > Import Demo Data.

== Changelog ==

= 1.4.0, Dec 5 2022 =
* Hotel Booking plugin updated to version 4.5.0.
    * Added support for displaying prices in the availability calendars of individual accommodations.
    * Added the ability to create a percentage fee, which applies to the accommodation cost.
    * Improved the color-coding for dates in the availability calendar to better show days unavailable for check-in or check-out. Note for developers: This update might affect styles of the availability calendar in your themes or projects. Please update your code.
    * Improved the color-coding for dates in the admin calendar to better show booked and blocked days.
    * Fixed an issue with selecting a check-out day on a day that is not allowed to stay.
    * Fixed an issue with the session data security.
    * Optimized the asset loading in the admin panel for REST API.
    * Fixed an error of creating coupon codes in REST API.
    * Fixed an error with the availability search when one of the accommodations was blocked. Applies for REST API and the mobile app.
* Minor style improvements.

= 1.3.0, Sep 13 2022 =
* Hotel Booking plugin updated to version 4.4.1.
    * Implemented REST API. This will give developers more extensive control over the plugin data, help integrate third-party services, and build new frontend experiences for Hotel Booking in WordPress.
    * Added the new Hotel Manager and Hotel Worker user roles that define access to the Hotel Booking plugin settings and menus. Note: you might need to change user roles you used before this update.
    * Added the user area for customers that allows them to log in, view bookings and speed up reservations with pre-populated info at checkout. Website admins can set the plugin to create user accounts automatically or let customers create ones manually.
    * Improved booking export report.
    * Improved backend booking calendar.
    * Improved support for several Hotel Booking addons.
    * Fixed several translation related issues.
    * Fixed an issue with dates being available for selection while direct booking despite not check-in or not check-out booking rules are applied to certain accommodation types.
    * Fixed an issue with defining the number of blocked accommodation types within certain booking rules.
    * Fixed an issue with the maximum stay rule of specific accommodation type that was also applied to other accommodation types.
    * Minor bugfixes and improvements.
* Minor style improvements.

= 1.2.4, Sep 24 2021 =
* Added the Getwid plugin to the theme package.

= 1.2.3, Aug 9 2021 =
* Hotel Booking plugin updated to version 3.9.10.
    * New feature: added the option to display information about tax and fee charges additionally to the base property rate on the frontend.
    * New feature: the revenue chart (beta version).
    * Added a new payment status Canceled.
    * Added the ability to enable a two-step booking cancelation process that requires users to confirm their booking cancelation request on the external page.
    * Added the ability to disable booking rules when adding bookings on the backend manually.
    * Added a new color for the external bookings in the Bookings calendar.
    * Improved the user experience with the calendar datepicker on mobile devices.
    * Fixed an issue with displaying the number of bookings for secondary language versions in the WPML plugin.
    * Added the ability to sort accommodations by price in the accommodations listing.
* Minor style improvements.

= 1.2.2, Mar 12 2021 =
* Added a header layout variation for the Accommodation page.
* Added the ability to turn on a sticky menu.
* Added the "back to top" button.
* Hotel Booking plugin updated to version 3.9.5.
    * Added the ability to set the Booking Buffer option.
    * Added the ability to set Advance Reservation: the minimum number of days allowed before booking and the maximum number of days available for future bookings.
    * Added the ability to resend the confirmation email for a booking.
    * Added the ability to create internal notes for a booking visible for site admins only.
    * Added the ability to edit existing bookings: you can now update check-in and check-out dates, rates, services, etc., as well as add, replace, or remove accommodations in the original bookings.
    * Added the ability to set the number of days prior to the check-in date applicable for applying deposits.
    * Stripe API updated to version 7.72.0.
    * Improved compatibility with the image lazy-loading feature.
    * Bug fix: fixed an issue that may cause errors in Sucuri and WP Mail SMTP plugins.
    * Bug fix: fixed an issue with payments via Stripe when amount of transaction was not calculated properly.
    * Bug fix: fixed an issue when an accommodation became unavailable for assignment to its accommodation type after renaming.
* Minor bugfixes and improvements.

= 1.2.1, Jan 15 2020 =
* Improved the front-page slideshow performance.

= 1.2.0, Jan 13 2020 =
* Added the ability to setup video as a first slide for front-page slideshow.
* Added the ability to change primary colors.
* Minor bugfixes and improvements.

= 1.1.0, Nov 18 2019 =
* Added ability to setup front-page slideshow settings in Customizer.
* Added editor styles for Hotel Booking editor blocks.
* Minor bugfixes and improvements.
* Hotel Booking plugin updated to version 3.7.1.
  * Improved blocks compatibility with the new versions of the Gutenberg editor.
  * Added customer email address to the Stripe payment details.
  * Fixed an issue where the price breakdown was not displayed in the new booking emails.
  * Fixed an issue at checkout when coupon discount was not applied to the total price at the bottom of the page.
  * Fixed a bug concerning impossibility to complete Stripe payment after applying the coupon code.
  * Fixed an issue where the type of the coupon code was changed after its use.
  * Improved the "Booking Confirmed" page with regard to displaying information on client's booking and payment in case the booking is paid online. Follow the prompts to update the content of the "Booking Confirmed" page automatically or apply the changes manually.
  * Added the new email tag, which allows guests to visit their booking details page directly from the email. Important: you need to update your email templates to start using this functionality.
  * New actions and filters were added for developers.
  * Fixed the issue at checkout when a variable price was not applied if capacity is disabled in plugin settings.
  * Added Direct Bank Transfer as a new payment gateway.
  * Added the ability to delete ical synchronization logs automatically.
  * Added new intervals for importing bookings through the ical "Quarter an Hour" and "Half an Hour".
  * The user information is no longer required while creating a booking in the admin panel. You can enable it again in the settings.
  * Added new tags for email templates: Price Breakdown, Country, State, City, Postcode, Address, Full Guest Name.
  * Added the ability to select the accommodation type while duplicating rates.
  * Improvement: now if the accommodation type size is not set, the field will not be displayed on the website.
  * Implemented bookings synchronization with Expedia travel booking website.
  * Updated PayPal and Stripe payment integrations to comply with PSD2 and the SCA requirements.
  * Added the ability to receive payments through Bancontact, iDEAL, Giropay, SEPA Direct Debit and SOFORT payment gateways via the updated Stripe API.

= 1.0, July 2019 =
* Initial release

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)
