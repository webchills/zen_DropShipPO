<?php
/**
 * @package Drop Shipping
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: dropshipping.php 2016-04-30 09:26:16Z webchills $
 */
define('BOX_CUSTOMERS_SEND_POS', 'Drop Shipping - Send POS');
define('BOX_CUSTOMERS_CONFIRM_TRACKING', 'Drop Shipping - Confirm Tracking');
define('BOX_CUSTOMERS_CONFIRM_TRACKING_SUB', 'Drop Shipping - Confirm Tracking SUB');
define('BOX_CUSTOMERS_SEND_POS_NC', 'Drop Shipping - Send POS NOC');
define('BOX_TOOLS_EDIT_SUBCONTRACTORS', 'Drop Shipping - Edit Subcontractors');
define('BOX_TOOLS_SET_SUBCONTRACTORS', 'Drop Shipping - Assign Products to Origin Locations');
define('BOX_CONFIGURATION_DROPSHIP', 'Drop Shipping Configuration');
define('HEADING_TITLE_EDIT_SUBCONTRACTORS','Edit Subcontractors');
// edit_subcontrac
define('TABLE_HEADING_ID','ID#');
define('TABLE_HEADING_SHORTNAME','Short name (Alias)');
define('TABLE_HEADING_FULLNAME','Full name');
define('TABLE_HEADING_EMAIL','Email');
define('TABLE_HEADING_STREET','Street');
define('TABLE_HEADING_ZIP','Zip');
define('TABLE_HEADING_CITY','City');
define('TABLE_HEADING_STATE','State');
define('TABLE_HEADING_COUNTRY','Country');
define('TABLE_HEADING_TELEPHONE','Telephone');
define('TABLE_CONTACT_PERSON','Contact Person');
define('TABLE_PICKUP_RESTRICTIONS','Pickup Restrictions');
define('TABLE_HEADING_ACTION','Aktion');
// confirm_tracking
define('HEADING_TITLE_TRACKING', 'Enter tracking data');
define('ORDERS_ID_TRACKING', 'Order #');
define('NUMBER_POS_TRACKING', 'PO #');
define('SUBCONTRACTOR_TRACKING', 'POed to');
define('SEND_TRACKING', 'Send');
define('DELIVER_NAME_TRACKING', 'Delivery Name and Address');
define('DELIVER_CARRIER_NAME_TRACKING', 'Carrier name');
define('TRACKING_NUMBER_TRACKING', 'Tracking number');
define('DATA_POS_TRACKING', 'PO Date');
define('TRACKING_ERROR', 'Unable to calculate tracking forms for this PO. Please contact us to resolve this. Thank you.');
define('TRACKING_SAVING', 'Tracking numbers for all items in this PO have already been saved.');
define('TRACK_SAVE_ERROR', 'In order for any tracking information to be saved, you need to enter at least one tracking number and choose at least one product. Please hit BACK and try again. Thank you.');
define('TRACKING_CHANGE', 'COPY TO ALL');
define('TRACKING_CHANGE_HELP', 'Press this button to copy tracking info from the first item to all consecutive ones.');
define('TRACKING_ALERT1', 'Single entry for all');
define('TRACKING_ALERT2', 'Individual entry');
define('TRACKING_PO_NUMBER', 'PO number');
define('TRACKING_PO_DATE', 'PO date');
define('TRACKING_CUSTOMER_DATA', 'Customer info');
define('TRACKING_PRODUCT_NAME', 'Product name');
define('SEND_TRACKING_YES_NO', 'Included');
define('SUBCONTRACTOR_FORM_DESCRIPTION', 'Please use this form to notify us and our customers about tracking information for items on this Purchase Order.');
define('SUBCONTRACTOR_TRACKING_THANKYOU', 'Thank you for submitting tracking information.');
define('PO_SENT_TO_NAME', 'P.O. Sent To');
define('SHOW_OLDEST_PO_FIRST', 'Show Oldest Purchase Orders First');
define('SHOW_NEWEST_PO_FIRST', 'Show Newest Purchase Orders First');
// send pos
define('TABLE_CUSTOMER_NAME','Customer Name');
define('TABLE_ORDER_NUMBER', 'Order #');
define('TABLE_SEND_PO', 'Send PO yes/no ');
define('TABLE_PO_SUBCONTRACTOR', 'Send PO To');
define('TABLE_SHOW_DELIVERED_ORDERS', 'Show Delivered Orders');
define('TABLE_COMMENTS_FOR_POS', 'Comments for Purchase Orders');
define('TABLE_COMMENTS_FOR_PACKING_LISTS', 'Comments for Packing Lists');
define('TABLE_ADD_CUSTOMERS_COMMENTS_TO_PACKING_LIST', 'Add Customers Comments to Packing Lists');
define('TABLE_REVIEW_EMAIL_OPTION', 'Review E-mail Before Sending(Only Works Sending 1 PO at a Time)');
define('TABLE_DATA_FROM_DATES', 'Data from');
define('TABLE_SUBCONTRACTOR', 'Subcontractor');
define('TABLE_TO', 'to');
define('TABLE_SEND', 'SEND');
define('TABLE_ALL_SUBCONTRACTORS', 'All');
define('TABLE_PRODUCTS_NAME', 'Product');
define('TABLE_PO_PREOVIOUSLY_SENT_TO', 'Last Sent To');
define('TABLE_PO_PREOVIOUS_NUMBER', '2nd Part of Last PO #');
define('TABLE_PO_WHEN_SEND', 'Last Send Date');
define('BUTTON_NEW', 'View new POs');
define('BUTTON_OLD', 'View old POs and re-send them');
define('TABLE_ORDER_COMMENTS', 'Comments');
define('TABLE_ORDER_SHIPPING', 'Shipping Method');
define('TABLE_ORDER_ADDRESS', 'Shipping Address');
define('TABLE_ORDER_PRODUCT_MANUFACTURER', 'Manufacturer &amp; Model');
define('TABLE_INCLUDE_PACKINGLIST_OPTION', 'Include Packing List');
define('PACKING_LIST_FIRST_WORD', 'Packing');
define('PACKING_LIST_SECOND_WORD', 'List');
define('PACKING_LIST_MODEL_NUMBER', 'MODEL NUMBER');
define('PACKING_LIST_PRODUCT_DESCRIPTION', 'PRODUCT DESCRIPTION');
define('PACKING_LIST_QUANTITY', 'QUANTITY');
define('SHIPPING_OPTION', 'Shipping Option');
define('REVIEW_AND_SUBMIT_WARNING', 'Make sure you click the <em>SEND</em> button.  Your PO has been marked sent, but will NOT be sent unless you click <em>SEND</em>.');
define('REFRESH_WARNING', 'Warning: Never refresh this page.  Doing so may accidentaly resend purchase orders!');
define('COMMENTS_WARNING', 'Warning: The comments you add will appear on <u>every</u> purchase order or packing list you send at a time.');
define('REVIEW_EMAIL_SEND_EMAIL_TO', 'Send Email To');
define('REVIEW_EMAIL_EMAIL_TITLE', 'Email Title');
// set Subcontrac
define('TABLE_SET_SUBC_HEADING', 'Set Sub-Contractors');
define('TABLE_SET_SUBC_MANUFACTURER', 'Manufacturer');
define('TABLE_SET_SUBC_MODEL', 'Model');
define('TABLE_SET_SUBC_DEFAULT', 'Default Sub-Contractors');
define('TABLE_SET_SUBC_PRODUCTS_NAME', 'Name');
define('TABLE_SET_SUBC_LINK_PREVIOUS', 'Previous page');
define('TABLE_SET_SUBC_LINK_NEXT', 'Next page');
define('TABLE_SET_SUBC_TOTAL_FOUND', 'Found');
define('TABLE_SET_SUBC_TOTAL_OUT_OF', 'on');
define('TABLE_SET_SUBC_TOTAL_PAGES', 'pages');
// sen pos_nc
define('ADD_A_PRODUCT_HEADER', 'Add a Product');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Choose product');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Choose options');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'No Options: Skipped..');
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', 'Qty.');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Add now');
define('TABLE_SEND_PO_TO', 'Send To');
define('TABLE_PO_ORDER_NUMBER', 'PO & Order Number');
define('TABLE_PO_SHIPPING_CHOICE', 'Shipping - Leave Blank for');
define('TABLE_PO_BILLING_ADDRESS', 'Billing Address');
define('TABLE_PO_SHIPPING_ADDRESS', 'Shipping Address (Leave Blank If Same)');
define('TABLE_PO_PRODUCTS_QUANTITY', 'Quantity');
define('TABLE_PO_PRODUCTS_MODEL_NUMBER', 'Model Number');
define('TABLE_PO_PRODUCTS_MANUFACTURER', 'Manufacturer');
define('TABLE_PO_PRODUCTS_DESCRIPTION', 'Product Description');
define('TABLE_PO_PRODUCTS_OPTIONS', 'Options');
define('TABLE_COMMENTS_FOR_POS', 'Comments for Purchase Orders');
define('TABLE_COMMENTS_FOR_PACKING_LISTS', 'Comments for Packing Lists');
define('TABLE_PARTIAL_SHIPMENT_OPTION', 'Partial Shipment');
define('PACKING_LIST_MODEL_NUMBER', 'MODEL NUMBER');
define('PACKING_LIST_PRODUCT_DESCRIPTION', 'PRODUCT DESCRIPTION');
define('PACKING_LIST_QUANTITY', 'QUANTITY');
define('PACKING_LIST_FIRST_WORD', 'Packing');
define('PACKING_LIST_SECOND_WORD', 'List');
define('SHIPPING_OPTION', 'Shipping Option');
define('PO_SENT_MESSAGE', '*******  PO Has Been Sent!  *******');
define('REFRESH_WARNING', 'Warning: Never refresh this page.  Doing so may accidentaly resend purchase orders!');