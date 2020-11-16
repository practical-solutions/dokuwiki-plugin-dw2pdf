<?php
/**
 * English language file
 *
 */

// for the configuration manager

$lang['pagesize']                = 'The page format as supported by mPDF. Usually <code>A4</code> or <code>letter</code>.';
$lang['orientation']             = 'The page orientation.';
$lang['orientation_o_portrait']  = 'Portrait';
$lang['orientation_o_landscape'] = 'Landscape';
$lang['font-size']               = 'The font-size for normal text in points.';
$lang['doublesided']             = 'Double-sided document starts add odd page, and has pairs of even and odd pages. Single-side document has only odd pages.';
$lang['toc']                     = 'Add an autogenerated Table of Content in PDF (note: Can add blank pages due to start at an odd page and ToC always include on even number of pages, ToC pages itself has no pagenumbers)';
$lang['toclevels']               = 'Define top level and maximum level depth which are added to ToC. Default wiki ToC levels <a href="#config___toptoclevel">toptoclevel</a> and <a href="#config___maxtoclevel">maxtoclevel</a> are used. Format: <code><i>&lt;top&gt;</i>-<i>&lt;max&gt;</i></code>';
$lang['maxbookmarks']            = 'How many section levels should be used in the PDF bookmarks? <small>(0=none, 5=all)</small>';
$lang['template']                = 'Which template should be used for formatting the PDFs?';
$lang['output']                  = 'How should the PDF be presented to the user?';
$lang['output_o_browser']        = 'Show in browser';
$lang['output_o_file']           = 'Download the PDF';
$lang['usecache']                = 'Should PDFs be cached? Embedded images won\'t be ACL checked then, disable if that\'s a security concern for you.';
$lang['usestyles']               = 'You can give a comma separated list of plugins of which the <code>style.css</code> or <code>screen.css</code> should be used for PDF generation. By default only <code>print.css</code> and <code>pdf.css</code> are used.';
$lang['qrcodesize']              = 'Size of embedded QR code (in pixels <code><i>&lt;width&gt;</i><b>x</b><i>&lt;height&gt;</i></code>). Empty to disable';
$lang['showexportbutton']        = 'Show PDF export button (only when supported by your template)';
